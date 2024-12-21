@extends('front.layouts.app')

@section('content')


        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('assets/img/bg/breadcrumb.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <!--<h2>About Us</h2>-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/blogs')}}">News</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> {{$blog->title}}</li>
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


            <!-- Blog details section-->
            <section class="blog-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="blog--post--item">
                                <div class="blog--post--content blog-details-content">
                                    <!--
                                    <div class="blog--tag">
                                        <a href="#">Business</a>
                                    </div>
                                    -->
                                    <blockquote style="background:#E92300;">
                                        <span> @php echo $blog->short_desc; @endphp </span>
                                    </blockquote>

                                    <div class="blog--post--meta mb-20">
                                        <ul>
                                            <li>
                                                <span><i class="far fa-calendar-alt"></i>
                                                    @php $edate = date("d-m-Y", strtotime($blog->date)); @endphp
                                                    {{ date('jS F, Y',strtotime($edate)) }}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    @if(!empty($blog->image))
                                        <div class="blog-details-post-thumb">
                                            <img src="{{URL::asset('assets/img/blog/'.$blog->image)}}">
                                        </div>
                                    @endif
                                    <div class="blog-details-wrap">
                                        @php echo $blog->desc; @endphp
                                    </div>
                                    
                                    
                                    
                                    <div class="row mt-45 mb-50">
                                        
                                        <div class="col-xl-6 col-md-5">
                                            <div class="post-share text-md-end">
                                                <h5>Social Share</h5>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-gg"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--End blog details section -->


@endsection