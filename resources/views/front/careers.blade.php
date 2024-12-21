@extends('front.layouts.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('assets/img/bg/breadcrumb.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>About Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
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


            <!-- faq-area -->
            <section class="faq-area fix pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="capsule-section-title mb-35">
                                <!--<span class="sub-title">Faq</span>-->
                                <h2 class="title text-center">Jobs Openings at Tomatrix</h2>
                                <p class="text-center mt-4">We’re always searching for amazing people to join our team. Take a look at our current openings.</p>
                            </div>

                            @if(isset($careers) && count($careers) > 0)
                                <div class="col-md-12 mt-5">
                                    <div class="job-list__wrapper mb-6">

                                        @foreach($careers as $career)
                                        <a href="" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover" style="color:#101f41 !important">
                                            <div class="card-body">
                                                <span class="row justify-content-between align-items-center">
                                                    <span class="col-md-5 color--heading">
                                                        <span class="badge badge-circle background--danger text-white mr-3">--</span> {{$career->title}}
                                                    </span>

                                                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                                                        <i class="fas fa-clock mr-1"></i> {{$career->type}}
                                                    </span>

                                                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                                                        <i class="fas fa-map-marker-alt mr-1"></i> {{$career->location}}
                                                    </span>

                                                    <span class="d-none d-md-block col-1 text-center color--text">
                                                        <small><i class="fas fa-chevron-right"></i></small>
                                                    </span>
                                                </span>
                                                <hr>
                                                <p> @php echo $career->content; @endphp</p>
                                            </div>
                                        </a> <!-- Job Card -->
                                        @endforeach

                                        
                                    </div>

                            
                                </div>
                            @else
                                <p class="mt-5 text-center">No career available</p>

                            @endif


                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->



            <!-- cta-area -->
            <div class="cta-area protein-cta">
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





@endsection

@push('scripts')
 
@endpush
@stack('scripts')