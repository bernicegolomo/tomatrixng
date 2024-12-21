@extends('front.layouts.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('assets/img/bg/breadcrumb.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>{{$title}}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Affiliate</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="transparent-title">Tomatrix</div>-->
                <div class="breadcrumb-shape" data-parallax='{"y" : 300 }'></div>
            </section>
            <!-- breadcrumb-area-end -->


            <!-- contact-area -->
            <div class="contact-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form-wrap">
                                <form id="contact-form" class="contact-form" action="{{url('affiliate-signup')}}" method="Post" data-toggle="validator">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Enter Business Name" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Enter Email Address" required="required" data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="phone" placeholder="Enter Phone Number" required="required" data-error="Phone is required." onkeypress="return onlyNumberKey(event)" maxlength="13">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-phone"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="moq" placeholder="Enter Minimum Order Quantity (MOQ)" required="required" data-error="field is required." onkeypress="return onlyNumberKey(event)" maxlength="13">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-cart-arrow-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="amount" placeholder="Minimum Order Value You Plan to Commit (Naira, Pounds or Dollar)" required="required" data-error="field is required." onkeypress="return onlyNumberKey(event)" maxlength="13">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-usd"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="link" placeholder="Online Link (social media or Website)" required="required" data-error="Link is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-globe"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-grp">
                                                <input type="text" name="address" placeholder="Delivery Address" required="required" data-error="field is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-arrow-down"></i>
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

                                        

                                        {!! NoCaptcha::display() !!}
                                        
                                    </div>
                                    
                                    <button type="submit" name="submit" value="1" class="btn gradient-btn">Submit Request</button>
                                    <div class="messages"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->

           



@endsection

@push('scripts')
 
@endpush
@stack('scripts')