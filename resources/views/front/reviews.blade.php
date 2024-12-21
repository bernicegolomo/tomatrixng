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
                                        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
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


            <!-- health-leaders-area -->
            <section class="health-leaders-area pt-120 pb-60" style="background-image: url({{asset('assets/img/bg/video_bg_1.png')}});">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="section-title white-title special-title text-center mb-55">
                                <h6 class="sub-title">What Our Customers Have To Say</h6>
                                <h2 class="title" style="color:#E92300;">Testimonials</h2>
                                <!--<p>There are many variations of passages of lorem ipsum that available but the majority have alteration in some form by injected humour passages of lorem but the majority have alteration.</p>-->
                            </div>
                        </div>
                    </div>
                    
                    @if($testimonials && count($testimonials) > 0)
                        <div class="row justify-content-center">
                            @foreach($testimonials as $testimonial)
                                <div class="col-lg-5 col-md-6">
                                    <div class="health-leaders-item text-center">
                                        @if(!empty($testimonial->image))
                                        <div class="hl-thumb">
                                            <img src="{{asset('assets/img/testimonials/'.$testimonial->image)}}" alt="">
                                        </div>
                                        @endif
                                        <div class="hl-content">
                                            @php echo $testimonial->testimonial; @endphp
                                        </div>
                                        <div class="hl-info">
                                            <h4 class="title" style="color:#E92300;">{{$testimonial->name}}</h4>
                                            <!--<p>Heart Specialist</p>-->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    @endif
                </div>
            </section>
            <!-- health-leaders-area-end -->



@endsection

@push('scripts')
 
@endpush
@stack('scripts')