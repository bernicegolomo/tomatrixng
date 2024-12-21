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
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                                {!! NoCaptcha::renderJs() !!}
                                <form id="contact-form" class="contact-form" action="{{URL('/contact-us')}}" method="post" data-toggle="validator">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="name" placeholder="Enter full name" required="required" data-error="Name is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" name="email" placeholder="Enter your email" required="required" data-error="Email is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="phone" placeholder="Phone Number" required="required" data-error="Phone is required." onkeypress="return onlyNumberKey(event)" maxlength="13">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
                                                <div class="help-block with-errors"></div>
                                                <i class="fal fa-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="message" id="message" placeholder="Enter messages" required="required" data-error="Message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                        <i class="fal fa-pencil"></i>
                                    </div>
                                    {!! NoCaptcha::display() !!}
                                    <button type="submit" name="submit" value="1"class="btn gradient-btn">send your message</button>
                                    <div class="messages"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-map -->
            <div id="contact-map">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=TIC%20Building,%20Mani%20Road,%20Katsina,%20Nigeria+(Tomatrix%20Nigeria)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
                    allowfullscreen loading="lazy"></iframe>-->
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-info-area pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="contact-info-box mb-30">
                                <div class="contact-info-box-head">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="contact-info-box-content">
                                    <ul>
                                        <li>
                                            <i class="fal fa-map-marker-alt"></i>
                                            <span>Block B2, TIC Building, Mani Road, Katsina, Nigeria.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="contact-info-box mb-30">
                                <div class="contact-info-box-head">
                                    <h3>Phone Contant</h3>
                                </div>
                                <div class="contact-info-box-content">
                                    <ul>
                                        <li>
                                            <i class="fal fa-phone"></i>
                                            <span>+234-9056833734</span>
                                        </li>
                                        <li>
                                            <i class="fal fa-phone"></i>
                                            <span>+234-8060172591</span>
                                        </li>
                                        <li>
                                            <i class="fal fa-phone"></i>
                                            <span>+234-8038645425</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="contact-info-box mb-30">
                                <div class="contact-info-box-head">
                                    <h3>Email</h3>
                                </div>
                                <div class="contact-info-box-content">
                                    <ul>
                                        <li>
                                            <i class="fal fa-envelope"></i>
                                            <span>info@tomatrixng.com</span>
                                        </li>
                                        <li>
                                            <i class="fal fa-envelope"></i>
                                            <span>tomatrixnigeria@gmail.com</span>
                                        </li>
                                    </ul>
                                </div>
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