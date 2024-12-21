@extends('front.layouts.app')

@section('content')




        <!-- banner-area -->
        <section id="home" class="banner-area protein-banner slider-area">
            <div class="banner-bg" data-background="{{asset('assets/img/banner/protein_banner_bg.png')}}"></div>
                <div class="slider-active">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-11 order-0 order-lg-2">
                                    <div class="banner-img-wrap" data-animation="fadeInRight" data-delay=".4s">
                                        <img src="{{asset('assets/img/banner/1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Tomatrix: Goodness Amplified! 🍅💪🌱</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Wholesome, chemical-free nutrition</h2>
                                        <div class="banner-btn" data-animation="fadeInUp" data-delay=".6s">
                                            <a href="#price" class="btn protein-btn">Order Now <i class="fal fa-arrow-right"></i></a>
                                            <a href="{{ url('/about-us') }}" class="btn solid-btn">Learn More <i class="fal fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-11 order-0 order-lg-2">
                                    <div class="banner-img-wrap" data-animation="fadeInRight" data-delay=".4s">
                                        <img src="{{asset('assets/img/banner/2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h6 class="sub-title" data-animation="fadeInUp" data-delay=".2s">Make a delicious impact with every spoon</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Taste the difference, make a difference with Tomatrix!</h2>
                                        <div class="banner-btn" data-animation="fadeInUp" data-delay=".6s">
                                            <a href="#price" class="btn protein-btn">Order Now <i class="fal fa-arrow-right"></i></a>
                                            <a href="{{ url('/about-us') }}" class="btn solid-btn">Learn More <i class="fal fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape">
                    <ul>
                        <li data-parallax='{"x" : 100 , "y" : -100 }'><img src="{{asset('assets/img/banner/protein_banner_shape01.png')}}" alt=""></li>
                        <li data-parallax='{"x" : -50 , "y" : 50 , "rotateZ":100}'><img src="{{asset('assets/img/banner/protein_banner_shape02.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/img/banner/protein_banner_shape03.png')}}" class="rotateme" alt=""></li>
                        <li data-parallax='{"x" : 100 , "y" : -100 }'><img src="{{asset('assets/img/banner/protein_banner_shape04.png')}}" alt=""></li>
                        <li data-parallax='{"x" : -100 , "y" : 100 }'><img src="{{asset('assets/img/banner/protein_banner_shape05.png')}}" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- banner-area-end -->

            @if(isset($numbers) && !empty($numbers))
                <!-- features-area -->
                <section class="capsule-features-area pt-120">
                    <div class="container">
                        <div class="row">

                            @foreach($numbers as $number)
                            <div class="col-lg-3 col-sm-6">
                                <div class="capsule-features-item mb-30">
                                    <div class="cf-icon">
                                        <img src="{{asset('assets/img/icon/'.$number->image)}}" alt="">
                                    </div>
                                    <div class="cf-content">
                                        <h5 class="title"> {{$number->name}}</h5>
                                    </div>
                                    <div class="cf-overlay-icon"><img src="{{asset('assets/img/icon/'.$number->image)}}" alt=""></div>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>
                    </div>
                </section>
                <!-- features-area-end -->
            @endif


            <!-- features-area -->
            <section id="features" class="features-area protein-features pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title protein-title text-center mb-50">
                                <div class="overlay-title">Features</div>
                                <h6 class="sub-title">Tomatrix Tomato Puree is not just a culinary choice</h6>
                                <h2 class="title">Tomatrix Features</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center mb-30">
                                <div class="features-count">01</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-1.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>100% tomato</h3>
                                    <p>Tomatrix Tomato Puree is made from 100% real tomato without any additives, fillers, or preservatives.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center mb-30">
                                <div class="features-count">02</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-2.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>Purely Naija</h3>
                                    <p>Tomatrix Tomato Puree is artfully developed with Naija’s touch of excellence, taste, and texture, making it easy to incorporate into various Nigerian cuisines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center active mb-30">
                                <div class="features-count">03</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-3.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>Nutrient-Rich</h3>
                                    <p>Packed with pepper and onions, this ready-to-cook Puree contributes to a healthy and nutritious diet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center mb-30">
                                <div class="features-count">04</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-4.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>BPA-Free Packaging</h3>
                                    <p>The packaging of our Tomato Puree is free from harmful chemicals like BPA to maintain it's purity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center mb-30">
                                <div class="features-count">05</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-5.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>Versatility</h3>
                                    <p>Tomatrix Tomato Puree is versatile and suitable for a wide range of culinary applications, such as sauces, soups, stews, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="features-item text-center mb-30">
                                <div class="features-count">06</div>
                                <div class="features-icon mb-25">
                                    <img src="{{asset('assets/img/icon/features-6.png')}}" alt="">
                                </div>
                                <div class="features-content">
                                    <h3>Long Shelf Life</h3>
                                    <p>While avoiding preservatives, our Tomato Puree still maintains a reasonable shelf life to ensure freshness and quality over time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->


            <!-- choose-area -->
            <!--
            <section id="ingredient" class="choose-area protein-choose position-relative pt-120 pb-120">
                <div class="choose-bg"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                            <div class="choose-content">
                                <div class="section-title protein-title mb-20">
                                    <h6 class="sub-title">Why Choose Us?</h6>
                                    <h2 class="title">Why Choose Our Tomato Puree<span>?</span></h2>
                                </div>
                                <p>Our agro-processing hub is designed to cater to the needs of small-scale tomato farmers for output market and local consumers that require high-quality, consistent, and nutritious tomato products. We combat food loss in the tomato value chains through training, agroprocessing, and market linkage, offering a range of options to meet the specific requirements of our farmers, community, clients, and consumers. </p>
                                <a href="{{url('/about-us')}}" class="btn transparent-btn pt-transparent">Learn More <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="position-relative">
                                <div class="choose-list-wrap">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-protein-supplement"></i>
                                            </div>
                                            <div class="content">
                                                <h4>Easy-to-Open Packaging</h4>
                                                <p>Tomatrix Tomato Puree, a premium blend of Nigerian tomato, pepper and onions offers a rich and authentic flavour while embodying a commitment to sustainability, community empowerment, and quality, transforming ordinary recipes into extraordinary culinary experiences.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-supplementary-food"></i>
                                            </div>
                                            <div class="content">
                                                <h4>No Added Sugar</h4>
                                                <p>Tomatrix Tomato Puree is without added sugars, allowing for a more versatile ingredient in both savory and sweet dishes.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-vitamins"></i>
                                            </div>
                                            <div class="content">
                                                <h4>Gluten-Free and Allergen-Free</h4>
                                                <p>Tomatrix Tomato Puree is free from gluten and common allergens, catering to individuals with dietary restrictions.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="choose-img">
                                    <img class="main-img" src="assets/img/images/choose_img.png" alt="">
                                    <img class="shape" src="assets/img/images/choose-bg.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            -->
            <!-- choose-area-end -->

            <!-- video-area -->
            <section class="video-area protein-video black-bg fix pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="video-content">
                                <div class="section-title protein-title white-title mb-35">
                                    <h6 class="sub-title">Tomatrix Tomato Puree</h6>
                                    <h2 class="title">Nutrition For Every Life<span></span></h2>
                                </div>
                                <p>Tomatrix Tomato Puree, a premium blend of 100% real tomato, offers a rich and authentic flavor while embodying a commitment to sustainability, community empowerment, and quality, transforming ordinary recipes into extraordinary culinary experiences.</p>
                                <div class="slider-nav"></div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="video-active">
                                <div class="video-item">
                                    <img src="assets/img/images/video-2.png" alt="">
                                    <!--<a href="https://www.youtube.com/watch?v=vkNcyKbRgqY" class="popup-video ripple-white"><i class="fas fa-play"></i></a>-->
                                </div>
                                <div class="video-item">
                                    <img src="assets/img/images/video-1.png" alt="">
                                    <!--<a href="https://www.youtube.com/watch?v=vkNcyKbRgqY" class="popup-video ripple-white"><i class="fas fa-play"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video-area-end -->

            
            <!-- fact-area -->
            <section class="fact-area pt-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="fact-item fact-item-two mb-30">
                                <div class="chart-two" data-percent="100">
                                    <span class="percentage">100<small>%</small></span>
                                </div>
                                <div class="fact-content">
                                    <h4 class="title">Premium Quality</h4>
                                    <span>Rich and authentic flavor derived from 100% field ripe quality tomato</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="fact-item fact-item-two mb-30">
                                <div class="chart-two" data-percent="100">
                                    <span class="percentage">100<small>%</small></span>
                                </div>
                                <div class="fact-content">
                                    <h4 class="title">Versatility and Convenience</h4>
                                    <span>Effortlessly elevate a wide range of recipes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="fact-item fact-item-two mb-30">
                                <div class="chart-two" data-percent="100">
                                    <span class="percentage">100<small>%</small></span>
                                </div>
                                <div class="fact-content">
                                    <h4 class="title">Nutritious</h4>
                                    <span>Enhances overall well-being and appeals to health-conscious consumers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            @if(isset($products) && count($products) > 0)
            <!-- shop-details-area -->
            <section id="price" class="shop-details-area protein-shop pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-12 justify-content-center">
                            <div class="section-title special-title text-center">                                
                                <h6 class="sub-title">By buying Tomatrix - TOMATO PUREE, you help us achieve the following</h6>
                            </div>
                            
                            <div class="row">
                            
                                <div class="formula-content text-center col-lg-9 justify-content-center">
                                    <ul class="mx-auto text-left">
                                        <li><i class="fal fa-check"></i> Develop and distribute nutritious and healthy food products (No chemicals or preservatives added to Tomatrix)</li>
                                        <li><i class="fal fa-check"></i> Create jobs in local communities</li>
                                        <li><i class="fal fa-check"></i> Reduce tomato and income losses among Nigerian farmers</li>
                                        <li><i class="fal fa-check"></i> Boost tomato supply all year round for consumers in Nigeria</li>
                                        <li><i class="fal fa-check"></i> Improve access to healthcare and education in rural communities</li>
                                        <li><i class="fal fa-check"></i> Increase farmers' income and boost rural economies and</li>
                                        <li><i class="fal fa-check"></i> Promote climate-smart and sustainable agriculture initiatives in Nigeria</li>
                                    </ul>
                                </div>

                                <div class="col-lg-3 d-none d-lg-block" style="position:relative;">
                                    <div class="choose-img" style="left:20px;">
                                        <img class="main-img" src="{{asset('assets/img/images/choose_img.png')}}">
                                        <img class="shape" src="{{asset('assets/img/images/choose-bg.png')}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>                             
                        <div class="row align-items-center justify-content-center mt-5">
                            @foreach($products as $key=>$product)
                                <div class="col-md-6 border border-end border-0 border-top-0 border-bottom-0 border-right-0 @if($key == 0) border-left-0 @endif">
                                    <div class="section-title protein-title mb-30">
                                        <h6 class="sub-title">Buy {{$product->name}} <small> {{$product->size}}</small></h6>
                                        <h2 class="title">Tomatrix<span></span></h2>
                                    </div>
                                    <div class="shop-details-price">
                                        <h2 class="price">&#8358 {{number_format($product->amount)}}</h2>
                                    </div>

                                    
                                    <div class="shop-details-content">
                                        <p>{{$product->size}}</p>
                                        <div class="shop-purchase-info">
                                            <form id="{{$key}}" method="post" class="num-block row">
                                                @csrf
                                                <div class="cart-plus-minus col-md-6">
                                                    <div class="form">
                                                        
                                                        <input type="hidden" value="{{$key}}" name="key" id ="key" >
                                                        <input type="hidden" value="{{$product->id}}" name="id" id ="id{{$key}}" >
                                                        <input type="hidden" value="{{$product->amount}}" name="amount" id ="amount{{$key}}" >
                                                        <input type="hidden" value="{{$product->name}}" name="name" id ="name{{$key}}" >
                                                        <input type="text" class="in-num" value="1" name="qty" id ="qty{{$key}}" readonly="">
                                                        <div class="qtybutton-box">
                                                            <span class="minus dis"><i class="fal fa-minus"></i></span>
                                                            <span class="plus"><i class="fal fa-plus"></i></span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="purchase-btn col-md-6">
                                                    <button type="button" id="submitFormData"  onclick="SubmitFormData({{$key}});"  class="btn gradient-btn">Add to cart <i class="fal fa-shopping-cart"></i></button>
                                                </div>    
                                            </form>

                                            <div id="results">
                                                <!-- All data will display here  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-none">
                                    <div class="shop-details-img-wrap">
                                        <div class="tab-content" id="myTabContentTwo">
                                            <div class="tab-pane show active" id="details-thumb01" role="tabpanel" aria-labelledby="details-thumb01-tab">
                                                <div class="shop-details-img">
                                                    <img src="{{asset('assets/img/product/'.$product->file)}}" alt="">
                                                    <div class="img-shape"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    
                </div>
            </section>
            <!-- shop-details-area-end -->
            @endif

            <!-- cta-area -->
            <div class="cta-area protein-cta mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cta-content">
                                <h6 class="title">Become An Affiliate Marketer</h6>
                                <a href="{{url('/affiliate-signup')}}" class="make-order">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cta-area-end -->

            
                <!-- blog-area -->
                
                <section id="blog" class="blog-area capsule-theme-bg pt-120 pb-90 mt-10">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12 col-lg-12">
                                <div class="text-center mb-50 section-title special-title">
                                    <span class="sub-title">Support us to Reduce Rural Poverty in Nigeria</span>
                                    <h3 class="title" style="font-size:40px;">Rural Poverty Reduction</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 order-2 order-lg-0">
                                <div class="row justify-content-center">

                                    <div class="col-md-12 col-sm-12 text-center">
                                        
                                        <p>We are focused on reducing rural poverty and postharvest loss. Your investment helps us to address the specific and urgent needs of farm families in Nigeria.</p>
                                        
                                        <p>
                                            We aimed to raise $100,000 by mid-2024 to scale our work focused on fighting rural poverty, food & nutritional insecurity, and health/education inequity among family farms in Nigeria.
                                            <strong>With your gift of $50 or more, we support and work with each family farm to achieve the set targets. Here is how a donation from you helps us run our initiatives: </strong>
                                        </p>

                                    </div>

                                    <div class="col-md-12 col-sm-12 mt-4 fact-item">
                                        <div class="row">

                                            <div class="col-md-12 col-sm-12 mt-4 text-center section-title special-title">
                                                <p class="sub-title"><strong>Our Corporate Social Targets for 2024-2025 </strong></p>
                                            </div>

                                            <div class="product-info-list text-left col-md-7 col-sm-12 mt-4 border border-left-0 border-top-0 border-bottom-0" style="border-left:0 !important">
                                                <ul class="text-left">
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content">Subsidize farm inputs for 125 smallholder farmers</div> 
                                                    </li>
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content"> Deliver comprehensive training on sustainable agriculture for 125 farmers

                                                    </li>
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content"> Ensure children from the 125 farm households return to school by incentivizing school enrolment</div>
                                                    </li>
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content"> Train 125 farmers and 500 household members on nutrition and healthcare insurance coverage</div>
                                                    </li>
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content"> Purchase healthcare insurance package for 125 farmers and 500 household members</div>
                                                    </li>
                                                    <li style="color:#777777;">
                                                        <div class="icon"><i class="fal fa-acorn"></i></div> 
                                                        <div class="content"> Ensure that all 125 beneficiaries experience zero postharvest losses</div>
                                                    </li>
                                                </ul>
                                            </div>

                                            

                                            <div class="col-md-5 col-sm-12 mt-5">
                                                <p>At Tomatrix Nigeria, we empower and work with local communities to ensure sustainable and long-term impact aimed at alleviating rural poverty and fostering sustainability.</p>
                                                <p>By supporting us, you become a champion of this important work</p>

                                                <a href="{{url('/donate')}}" class="btn solid-btn mt-4" tabindex="-1">Make Payment <i class="fal fa-arrow-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                        
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </section>
                
                <!-- blog-area-end -->
            

@endsection

@push('scripts')
 
@endpush
@stack('scripts')