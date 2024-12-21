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
                                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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


            <!-- gallery-area -->
            <section id="gallery" class="gallery-area pt-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-50">
                                <div class="overlay-title">Showcase</div>
                                <h6 class="sub-title">Gallery</h6>
                                <!--<h2 class="title">Product Showcase</h2>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--<div class="col-lg-3">
                            <div class="product-menu">
                                <button class="active" data-filter="*">All Categories</button>
                                <button data-filter=".cat-one">Fruits</button>
                                <button data-filter=".cat-two">Medicine</button>
                                <button data-filter=".cat-three">Zinc</button>
                                <button data-filter=".cat-four">Calcium</button>
                                <button data-filter=".cat-five">Foods</button>
                            </div>
                        </div>-->
                        <div class="col-lg-12">
                            <div class="row gallery-product-active" style="position: relative; height: 600px;">
                                <div class="col-lg-4 col-sm-6 grid-item cat-two cat-three cat-five" style="position: absolute; left: 0%; top: 0px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/1.jfif" alt="">
                                        <a href="assets/img/gallery/1.jfif" class="popup-image" ></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-four cat-five" style="position: absolute; left: 33.3333%; top: 0px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/2.jpeg" alt="">
                                        <a href="assets/img/product/gallery/2.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-two cat-three cat-four" style="position: absolute; left: 66.6667%; top: 0px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/3.jpg" alt="">
                                        <a href="assets/img/gallery/3.jpg" class="popup-image"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-two cat-three cat-five" style="position: absolute; left: 0%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/4.jpeg" alt="">
                                        <a href="assets/img/gallery/4.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-two cat-four cat-five" style="position: absolute; left: 33.3333%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/5.jpg" alt="">
                                        <a href="assets/img/gallery/5.jpg" class="popup-image"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-three cat-four" style="position: absolute; left: 66.6667%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/6.jpeg" alt="">
                                        <a href="assets/img/gallery/6.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-three cat-four" style="position: absolute; left: 66.6667%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/7.jpeg" alt="">
                                        <a href="assets/img/gallery/7.jpeg" class="popup-image"></a>
                                    </div>
                                </div>

                                
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-three cat-four" style="position: absolute; left: 66.6667%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/8.jpeg" alt="">
                                        <a href="assets/img/gallery/8.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-three cat-four" style="position: absolute; left: 66.6667%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/9.jpeg" alt="">
                                        <a href="assets/img/gallery/9.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6 grid-item cat-one cat-three cat-four" style="position: absolute; left: 66.6667%; top: 300px;">
                                    <div class="gallery-product-item mb-30">
                                        <img src="assets/img/gallery/10.jpeg" alt="">
                                        <a href="assets/img/gallery/10.jpeg" class="popup-image"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- gallery-area-end -->




@endsection

@push('scripts')
 
@endpush
@stack('scripts')