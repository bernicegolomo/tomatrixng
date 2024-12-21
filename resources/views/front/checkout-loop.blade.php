@if(count($cartContent) > 0)
                    <div class="row">
                        <div class="col-md-7">
                            <table class="table table-responsive">
                                <thead>
                                    <td>Product</td>
                                    <td>Unit Price</td>
                                    <td>Quantity</td>
                                    <td>Total</td>
                                </thead>

                                <tbody>

                                    @php $total = 0; $x = 0; @endphp
                                    @foreach($cartContent as $key=>$cart) 
                                        @php 
                                            $x++;
                                            $product = App\Http\Controllers\WebsiteController::productdetails($cart->id); 
                                            $total = $total + ($cart->price * $cart->qty)
                                        @endphp

                                        <tr>
                                            <td class="text-wrap">
                                                <img src="{{asset('assets/img/product/'.$product->file)}}" height="30px">
                                                {{$cart->name}}
                                            </td>
                                            <td>&#8358; {{number_format($cart->price)}}</td>
                                            <td>
                                                <div class="quantity-input">
                                                    <button onclick="decrement('{{$cart->rowId}}', '{{$x}}')" style="cursor:pointer">-</button>
                                                    <input type="number" id="{{$x}}" name="quantity" min="1" value="{{$cart->qty}}">
                                                    <button onclick="increment('{{$cart->rowId}}', '{{$x}}')" style="cursor:pointer">+</button>
                                                </div>
                                                <div class="mt-3">
                                                    <!--<button type="button" onclick="UpdateFormData('{{$cart->rowId}}', '{{$x}}')"  class="btn btn-small btn-success" style="padding:5px !important; color: #fff; background-color: #198754; border-color: #198754; cursor:pointer"> <i class="fal fa-spinner"></i></button>-->
                                                    <button type="button" data-rowid="{{ $cart->rowId }}"  class="remove-item btn btn-small btn-danger" style="padding:5px !important; color: #fff; background-color: #E92300; border-color: #E92300; cursor:pointer"> <i class="fal fa-trash"></i></button>
                                                </div>
                                            </td>
                                            <td>&#8358; {{number_format($cart->price * $cart->qty)}}</td>
                                        </tr>

                                    @endforeach

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Total</strong></td>
                                        <td><strong>&#8358; {{number_format($total)}}</strong></td>
                                    </tr>

                                </tbody>
                            </table>   
                        </div>


                        <div class="col-md-5">
                            <div class="fact-item contact-form-wrap">
                                <form action="{{url('/makepayment')}}" method="post" >
                                    @csrf 
                                    <div class="row">
                                        <h4 class="title text-center col-md-12" >Checkout Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Enter full name" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Enter your email" required="required" data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="text" name="phone" placeholder="Phone Number" required="required" data-error="Phone is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-phone"></i>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <select name="country" required="required" data-error="Country is required.">
                                                    <option value="">-- Select Country --</option>
                                                    @if(isset($countries) && count($countries) > 0)
                                                        @foreach($countries as $country)
                                                            <option value="{{$country->name}}">{{$country->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-home"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <select name="state" required="required" data-error="State is required.">
                                                    <option value="">-- Select State --</option>
                                                    @if(isset($states) && count($states) > 0)
                                                        @foreach($states as $state)
                                                            <option value="{{$state->name}}">{{$state->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-university"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="text" name="address" placeholder="Address" required="required" data-error="Address is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-arrow-down"></i>
                                            </div>
                                        </div>


                                        <div class="col-md-12 mt-2">
                                            <div class="purchase-btn">
                                                <button type="submit"  class="btn gradient-btn" style="padding: 10px 20px 10px 20px !important;">Proceed To Make Payment <i class="fal fa-credit-card"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                    @else
                    <div class="row mt-5">
                        <div class="container">
                            <p class="text-center">Your cart is empty!</p>
                        </div>
                    </div>
                    
                    
                    @endif