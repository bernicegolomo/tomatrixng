<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use Anhskohbo\NoCaptcha\NoCaptcha;
use Paystack;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Product;
use App\Models\State;
use App\Models\Country;
use App\Models\NewsLetter;
use App\Mail\NewsLetterEmail;
use App\Mail\AffiliateEmail;
use App\Models\Page;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Artisan;
use App\Models\OurNumber;
use App\Models\Career;
use App\Models\OurTeam;


class WebsiteController extends Controller
{
    //

    public function index(){

        $title = "Home";
        //$blogs = Blog::where('status', 1)->orderby('id', "DESC")->take(3)->get();
        $products = Product::where('status', 1)->orderby('id', "DESC")->get();
        $numbers = OurNumber::orderby('id', "ASC")->get();
        
        //try {
            //Artisan::call('config:clear');
    
            //return "Configuration cache cleared successfully!";
        //} catch (\Exception $e) {
            //return "Error clearing configuration cache: " . $e->getMessage();
        //}


        return view('front.index', compact('title','products','numbers'));
    }

    public function blogdetails($id){
        $id = Crypt::decrypt($id);
        $blog = Blog::where('id',$id)->first();
        $title = $blog->title;

        return view('front.blogdetails', compact('title','blog'));
    }

    public static function productdetails($id){
        $data = Product::where('id',$id)->first();
        
        return $data;
    }

    public function addtocart($id,$qty,$amount,$name){

        Cart::add($id, $name, $qty, $amount); 

        // Retrieve the updated cart content
        $cartContent = Cart::content();

        // Return the updated cart content as JSON
        return response()->json($cartContent);
    }

    public function updatecart($rowId,$qty){
        Cart::update($rowId, $qty);

        return response()->json(['status' => 'success']);
    }

    public function getCartContent(){
        // Retrieve the cart content
        $cartContent = Cart::content();

        // Return the cart content as a view
        return view('front.cart-loop', compact('cartContent'));
    }

    public function getCheckoutContent(){
        // Retrieve the cart content
        $cartContent = Cart::content();

        // Return the cart content as a view
        return view('front.checkout-loop', compact('cartContent'));
    }

    public function removecartitem(Request $request, $rowId=null){
        //return response()->json(['status' => 'success', 'message' => $rowId]);
        Cart::remove($rowId);
        return response()->json(['status' => 'success']);
    }

    public function checkout(){
        $title = "Checkout";
        $countries = Country::all();
        $states = State::all();

        return view('front.checkout', compact('title','countries','states'));
    }

    public function makepayment(Request $request){
        //validate
        request()->validate([
            'name'     => ['required', 'string'],
            'email'    => ['required', 'string'],
            'phone'    => ['required'],
            'country'  => ['required', 'string'],
            'state'    => ['required', 'string'],
            'address'  => ['required', 'string'],
        ]);


        if(count(Cart::content()) > 0){
            //redirect to paystack to make payment
            $total = Cart::subtotal();
            $ref = $this->RandomString(16);
            
            //save details to orders table
            $saveOrder = Order::create([
                                'fullname'    => $request->name,
                                'email'       => $request->email,   
                                'phone'       => $request->phone,
                                'country'     => $request->country,
                                'state'       => $request->state,
                                'address'     => $request->address,
                                'status'      => "Pending Payment",
                                'amount'      => $total,
                                'ref'         => $ref,
                                'items'       => json_encode(Cart::content())
                            ]);
           
            //$makePayment = $this->payStack($request,$total,$ref);
            
            $orderID = $this->RandomString(4);

            $data = array(
                "amount"    => $total * 100,
                "reference" => $ref,
                "email"     => $request->email,
                "currency"  => "NGN",
                "orderID"   => $orderID,
            );
      
            return Paystack::getAuthorizationUrl($data)->redirectNow();


            //if($makePayment){                
                //return back()->with('success', 'Thank you for your purchase. You will be contacted by system administrator.');
            //}
        }else{
            return back()->with('error', 'Ensure you have selected at least one item in you shopping cart.');
        }

    }


    public function callback(Request $request){

        //dd($request->all());
        $reference = $request->reference; 
        $secret_key = env('PAYSTACK_SECRET_KEY');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $secret_key",
                "Cache-Control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        //dd($response);
        //$meta_data = $response->data->metadata->custom_fields;
        if($response->data->status == 'success')
        {
            $obj = Order::where('ref', $request->reference)->first();

            if($obj && !empty($obj)){
                $obj->date      = date("Y-m-d");
                $obj->status    = "Payment Successful";
                $obj->update();

                $serialitems = $obj->items; 
                $items = json_decode($serialitems , true); 

                if($items == "donations" || $items == "services/products"){
                    return Redirect::route('donate')->with('success', 'Thank you for your patronage. Your payment was successful.');
                }else{

                    Cart::destroy();                
                    return Redirect::route('checkout')->with('success', 'Thank you for your patronage. Your payment was successful. Your order is being processed and you will be contacted once it is ready for dispatch.');
            
                }
            }
            
        } else {
            return Redirect::route('checkout')->with('error', 'Error in processing your order. Please contact the system administrator if issue persist.');
        }
    }

    public function subscribe(Request $request){
        //validate

        $data = $request->validate([
            'g-recaptcha-response'  => NoCaptcha::rules(),
            'email'                 => 'required|email',
        ]);

        if($request->has('_token') && isset($request->submit) && $request->submit == 1){ 
            $saveNewsLetter = new NewsLetter;
            $saveNewsLetter->email = $request->email;
            $saveNewsLetter->save();

            //send email to admin
            Mail::to('tomatrixnigeria@gmail.com')->queue(new NewsLetterEmail($data));

            return back()->with('success', 'Thank you for subscribing.');
        }


    }


    public function affiliate(Request $request){
        $title = "Become An Affiliate";
        $countries = Country::all();
        $states = State::all();

        if($request->has('_token') && isset($request->submit) && $request->submit == 1){ 
            
            $data = $request->validate([
                'g-recaptcha-response'  => NoCaptcha::rules(),
                'name'                  => 'required|string',
                'email'                 => 'required|email',
                'phone'                 => 'required',
                'moq'                   => 'required',
                'amount'                => 'required',
                'link'                  => 'required',
                'country'               => 'required',
                'state'                 => 'required',
                'address'               => 'required',
            ]);

            //send email to admin
            Mail::to('tomatrixnigeria@gmail.com')->queue(new AffiliateEmail($data));

            return back()->with('success', 'Thank you for your interest to become an affiliate. We will get back to you shortly.');
        }

        return view('front.affiliate', compact('title', 'countries', 'states'));
    }

    public function aboutus(){
        $title = "About Us";
        $teams = OurTeam::all();


        return view('front.aboutus', compact('title','teams'));
    }

    public function contactus(Request $request){
        $title = "Contact Us";

        if($request->has('_token') && isset($request->submit) && $request->submit == 1){ 
            
            $data = $request->validate([
                'g-recaptcha-response'  => NoCaptcha::rules(),
                'name'                  => 'required|string',
                'email'                 => 'required|email',
                'phone'                 => 'required',
                'subject'               => 'required',
                'message'               => 'required',
            ]);

            //send email to admin
            Mail::to('tomatrixnigeria@gmail.com')->queue(new ContactEmail($data));

            return back()->with('success', 'Your request has been submitted successfully. We will reach out shortly.');
        }


        return view('front.contactus', compact('title'));
    }

    public function refundpolicy(){
        $page = Page::where('id', 1)->first();
        $title = $page->name;


        return view('front.refundpolicy', compact('title','page'));
    }

    public function terms(){
        $page = Page::where('id', 1)->first();
        $title = $page->name;


        return view('front.terms', compact('title', 'page'));
    }

    public function gallery(){
        $title = "Gallery";


        return view('front.gallery', compact('title'));
    }

    public function customersreviews(){
        $title = "Customer's Reviews";
        $testimonials = Testimonial::orderby('id', "DESC")->get();


        return view('front.reviews', compact('title','testimonials'));
    }

    public function careers(){
        $careers = Career::OrderBy('id', "DESC")->get();
        $title = "Careers";


        return view('front.careers', compact('title', 'careers'));
    }

    public function RandomString($length, $charset='123456789'){
        $str = '';
        $count = strlen($charset);
        while ($length--) {
            $str .= $charset[mt_rand(0, $count-1)];
        }
        return $str;
    }

    public static function getPages(){
        $pages = Page::all()->keyby('id');

        return $pages;
    }

    public function donate(Request $request){
        $title = "Make Payment";        
        $countries = Country::all();
        $states = State::all();

        if($request->has('_token') && isset($request->submit) && $request->submit == 1){ 
            
            $data = $request->validate([
                'g-recaptcha-response'  => NoCaptcha::rules(),
                'name'                  => 'required|string',
                'email'                 => 'required|email',
                'phone'                 => 'required',
                'amount'                => 'required',
                'type'                  => 'required',
                'country'               => 'required',
                'state'                 => 'required',
                'address'               => 'required',
            ]);

            //save to order table and call paystack to make payment
            $saveOrder = Order::create([
                'fullname'    => $request->name,
                'email'       => $request->email,   
                'phone'       => $request->phone,
                'country'     => $request->country,
                'state'       => $request->state,
                'address'     => $request->address,
                'status'      => "Pending Payment",
                'amount'      => $total,
                'ref'         => $ref,
                'items'       => json_encode($request->type)
            ]);

            //$makePayment = $this->payStack($request,$total,$ref);

            $orderID = $this->RandomString(4);

            $data = array(
            "amount"    => $total * 100,
            "reference" => $ref,
            "email"     => $request->email,
            "currency"  => "NGN",
            "orderID"   => $orderID,
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();

        }


        return view('front.payment', compact('title'));
    }
}
