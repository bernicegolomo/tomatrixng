@extends('front.layouts.app')

@section('content')

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('assets/img/bg/breadcrumb.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Social Innovation</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Social Innovation</li>
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
                        <div class="col-lg-6">
                            <div class="capsule-section-title mb-35">
                                <!--<span class="sub-title">Faq</span>-->
                                <h2 class="title">Who We Are</h2>
                            </div>

                            <p>Tomatrix Nigeria is a community-driven social enterprise with a vision to reduce rural poverty by addressing food losses (postharvest losses) through value-addition processing, system thinking, innovation and bold actions.</p>
                            
                            <div class="faq-wrapper faq-style-two">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn-block text-start collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Mission Statement
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="faq-card-content">
                                                    <p>At Tomatrix Nigeria, we promote enterprising solutions to rural poverty. Our mission is to empower rural communities with resources to fight poverty by deconcentrating productive assets, information, technology, innovation, finance, and sustainable solutions. We are dedicated to fostering economic growth and improving the livelihoods of farmers, farming households and communities across Nigeria. With a focus on social impact and environmental sustainability, we strive to create a brighter future for all.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn-block text-start" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Our Theory of Change
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="faq-card-content">
                                                    <p>Tomatrix Nigeria aims to reduce rural poverty in Nigeria by combating food losses through value-addition processing, market development, and access to finance. Through training, technology, and innovative solutions, Tomatrix empowers farmers, fosters economic growth, and creates sustainable livelihoods, thereby transforming agrifood systems and improving rural communities.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn-block text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    Our Strategic Principles
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="faq-card-content">
                                                    <ul>
                                                        <li>- Community-driven social enterprise</li>
                                                        <li>- Focus on reducing rural poverty</li>
                                                        <li>- Addressing food-crop loss (postharvest loss) through value-addition processing</li>
                                                        <li>- Nutritious food product development through innovation</li>
                                                        <li>- Circularity-as-a-business-model </li>
                                                        <li>- System thinking toward agrifood system transformation</li>
                                                        <li>- Bold actions to achieve the vision of rural prosperity</li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cap-faq-img">
                                <img src="assets/img/images/about.jpeg" class="main-img" alt="">
                                <img src="assets/img/images/faq_round_shape.png" alt="" class="faq-round-shape">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->

            <section class="faq-area fix pt-120 pb-120" style="background: #F9F8F8;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="capsule-section-title mb-35">
                                <span class="sub-title">Farmers Outreach & Training</span>
                                <h2 class="title">Our Approach</h2>
                            </div>


                            <p>Our Farmers Training & Aggregation model is designed to equip farmers with essential knowledge, information, and skills necessary for sustainable food production, enhanced productivity, effective marketing, and food loss mitigation. By providing resources for sustainable agriculture, we empower farmers to boost yield, minimize food losses, and enhance their overall livelihoods. Our comprehensive training program encompasses various themes such as climate-smart agriculture, value addition, agribusiness management, farm cooperative dynamics, circularity, and value chain development. Through hands-on and context-specific training sessions, we ensure that farmers can readily apply their newfound knowledge on their farms and within their communities. </p>

                        </div>
                        <div class="col-lg-6">
                            <div class="cap-faq-img">
                                <img src="assets/img/images/training.jpeg" class="main-img" alt="">
                                <img src="assets/img/images/faq_round_shape.png" alt="" class="faq-round-shape">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- product-info-area -->
            <section class="product-info-area pt-120 pb-120 capsule-theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="product-info-img text-center">
                                <img src="assets/img/images/about-13.jpeg" class="main-img" alt="" width="400px" height="auto">
                                <img src="assets/img/images/product_info_shape.png" class="img-shape" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-info-content">
                                <div class="capsule-section-title mb-10">
                                    <span class="sub-title">Value-Addition Processing </span>
                                    <h2 class="title">Our Approach</h2>
                                </div>
                                <p>Our agro-processing hub is strategically designed to address the requirements of small-scale tomato farmers and local consumers, ensuring access to high-quality, consistent, and nutritious tomato products. Through our value-addition approach and distribution networks, we combat post-harvest loss within the tomato value chains. This multifaceted strategy offers a range of options tailored to meet the specific needs of farmers, communities, clients, and consumers.</p>
                                
                                <div class="capsule-section-title mb-10">
                                    <span class="sub-title">Why Tomato? </span>
                                </div>
                                
                                <div class="product-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fal fa-acorn"></i></div>
                                            <div class="content">Nigeria ranks as the second largest producer of tomatoes in Africa, trailing only behind Egypt, and holds the 12th position globally (FAO, 2020).</div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fal fa-box"></i></div>
                                            <div class="content">More than 200,000 smallholder farmers cultivate tomatoes as a staple source of nutrients across the country</div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fal fa-ball-pile"></i></div>
                                            <div class="content">Approximately 20% of the daily vegetable consumption in Nigeria comprises tomatoes.</div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fal fa-users"></i></div>
                                            <div class="content">Alarmingly, over 45% of Nigeria's annual tomato yield is lost along the value chains, highlighting the urgent need for intervention and improvement in the tomato sector.</div>
                                        </li>
                                    </ul>
                                    <p class="mt-20">Through a systemic approach, innovative ideas and community initiatives, we will end tomato postharvest losses in Nigeria as a proof of concept for net zero food loss strategy across diverse crop value chains.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-info-area-end -->


            <!-- ingredient-area -->
            <!--
            <section id="ingredient" class="ingredient-area pt-90 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="capsule-section-title text-center mb-50">
                                <span class="sub-title">By buying Tomatrix - TOMATO PUREE, you help us achieve the following;</span>
                                <h2 class="title">Benefits of Buying Our Products - Tomatrix</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row ingredients-wrapper align-items-center">
                        <div class="col-lg-4 order-1 col-md-6">
                            <div class="ingredients-item wow fadeInLeft" data-wow-delay=".2s">
                                <div class="ingredients-icon">
                                    <i class="flaticon-vitamins"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Nutritous and healthy food products (No chemical or preservatives added to Tomatrix)</p>
                                </div>
                            </div>
                            <div class="ingredients-item wow fadeInLeft" data-wow-delay=".3s">
                                <div class="ingredients-icon">
                                    <i class="fal fa-briefcase"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Jobs creation in local communities</p>
                                </div>
                            </div>
                            <div class="ingredients-item wow fadeInLeft" data-wow-delay=".4s">
                                <div class="ingredients-icon">
                                    <i class="fal fa-expand"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Boost tomato supply all-year round in Nigeria</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-0 order-lg-2">
                            <div class="ingredients-img">
                                <img src="assets/img/images/product.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-3 col-md-6">
                            <div class="ingredients-item wow fadeInRight" data-wow-delay=".2s">
                                <div class="ingredients-icon">
                                    <i class="fal fa-compress"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Reduction of tomato post-harvest losses</p>
                                </div>
                            </div>
                            <div class="ingredients-item wow fadeInRight" data-wow-delay=".3s">
                                <div class="ingredients-icon">
                                    <i class="fal fa-chart-bar"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Improve farmers income</p>
                                </div>
                            </div>
                            <div class="ingredients-item wow fadeInRight" data-wow-delay=".4s">
                                <div class="ingredients-icon">
                                    <i class="fal fa-sun"></i>
                                </div>
                                <div class="ingredients-content">
                                    <p>Promote climate-smart and sustainable agriculture in Nigeria</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            -->
            <!-- ingredient-area-end -->


            <!-- faq-area -->
            <section class="faq-area fix pt-120 pb-120" style="background: #F9F8F8;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="capsule-section-title mb-35">
                                <h2 class="title">Our Approach</h2>
                                <span class="sub-title mt-5">Market Development</span>
                            </div>

                            <p>As a core strategy to mitigate postharvest losses during peak production seasons, we facilitate market opportunities that directly link farmers with buyers. Leveraging data-driven market insights, we provide farmers with valuable information on market trends, consumer preferences, and pricing dynamics. This empowers farmers to make informed decisions regarding their products and pricing strategies. Through a combination of offline channels and semi-formal platforms, we support smallholder farmers in aggregating and showcasing their products to potential buyers, thereby enhancing their sales revenue. By expanding their market reach and accessing a broader customer base, farmers can effectively reduce food loss, increase household income, and enhance their overall livelihoods.</p>
                            

                            <div class="capsule-section-title mb-35 mt-5">
                                <span class="sub-title">Access to Finance</span>
                                <!--<h2 class="title">Who We Are</h2>-->
                            </div>

                            <p>Through our aggregation model, cooperative, and agro-processing hub, we facilitate both financial and in-kind capital for smallholder farmers to support their production activities. Collaborating with a network of farmers and market actors, we ensure access to finance and production output, thereby enabling farmers to enhance their productivity and scale their operations. Additionally, our holistic social impact model extends beyond agriculture, offering farmers access to essential resources such as irrigation kits, household healthcare insurance, and educational support for their children. </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="cap-faq-img">
                                <img src="assets/img/images/training.jpeg" class="main-img" alt="">
                                <img src="assets/img/images/faq_round_shape.png" alt="" class="faq-round-shape">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->


            <!--

            <section id="feedbacks" class="testimonial-area bar-testimonial pt-120 pb-70 capsule-theme-bg">
                <div class="container text-justify">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="capsule-section-title bar-section-title text-center mb-50">
                               
                                <h2 class="title">Access to Finance</h2>
                            </div>
                        </div>
                    </div>
                    
                    <p>We facilitate capital for production in cash and kind for smallholder farmers through our aggregation model, cooperative and agro-processing hub. We work with a network of farmers and market actors to facilitate access to finance and production output respectively. Beyond agriculture, our holistic social impact model offers farmers access to irrigation kits, household health insurance and education support for their children. </p>
                 
                    <p>By providing farmers with training, access to capital, technology and markets, we aim to create a sustainable agrifood system that benefits all.</p>

                    <h4>Support us to Reduce Rural Poverty in Nigeria:</h4>
                    <p>We are focused on reducing rural poverty and postharvest loss. Your investment helps us to address specific and urgent needs. At Tomatrix Nigeria, </p>
                    <div class="row justify-content-center">
                        <ul>
                            <li><i class="fal fa-dot-circle sub-title"></i> We involve and empower local communities to ensure sustainable and long-term impact.</li>
                            <li><i class="fal fa-dot-circle sub-title"></i> We take bold actions and innovate to reduce postharvest loss and alleviate poverty.</li>                            
                        </ul>
                    </div>
                    <p>By supporting us, you become a champion of this important work.</p>


                    
                </div>

                
            </section>
            -->

            @if(isset($teams) && count($teams) > 0)

                <!-- testimonial-area -->
                <section id="feedbacks" class="testimonial-area pt-120 pb-70">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8">
                                <div class="capsule-section-title text-center mb-50">
                                    <span class="sub-title">Meet Us</span>
                                    <h2 class="title">Our Team</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row testimonial-active">

                            @foreach($teams as $team)
                            <div class="col-xl-6 col-md-6" >
                                <div class="testimonial-item">
                                    
                                    <div class="testi-avatar-wrap mb-2">
                                        <div class="testi-avatar-thumb">
                                            @if(!empty($team->image))
                                                <img src="{{asset('assets/img/teams/'.$team->image)}}" class="img-rounded" style="height:50px;">
                                            @else
                                                <img src="{{asset('assets/img/teams/team.png')}}" class="img-rounded" style="height:50px;">
                                            @endif
                                        </div>
                                        <div class="testi-avatar-info">
                                            <h5>{{$team->name}}</h5>
                                            <span>{{$team->designation}}</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>@php echo $team->content; @endphp</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                        </div>
                    </div>
                </section>
                <!-- testimonial-area-end -->
            @endif


            

            <!-- cta-area -->
            <div class="cta-area protein-cta mb-3">
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