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
                                        <li class="breadcrumb-item active" aria-current="page">Policy</li>
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
                                <h2 class="title">Our Policy</h2>
                            </div>

                            @php echo $page->content; @endphp
                            
                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->




@endsection

@push('scripts')
 
@endpush
@stack('scripts')