<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            @isset($title)
                {{ $title }} | 
            @endisset
            {{ config('app.name') }}
        </title>
        <meta name="description" content="Tomatrix offers premium, preservative-free tomato puree, embodying sustainability and wholesome nutrition. Discover our commitment to quality and community impact, transforming meals with the essence of Tomatrix.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/mCustomScrollbar.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- Link to Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->



        @php $pages = App\Http\Controllers\WebsiteController::getPages(); @endphp
                                                                                                
         <!-- Floating social media icons container -->
        <div class="floating-icons">
            @if(isset($pages[3]))
            <a href="{{$pages[3]->content}}" class="fab fa-facebook-f" target="blank"></a>
            @endif

            
            @if(isset($pages[5]))
            <a href="{{$pages[5]->content}}" class="fab fa-twitter" target="blank"></a>
            @endif
            
            @if(isset($pages[4]))
            <a href="{{$pages[4]->content}}" class="fab fa-instagram" target="blank"></a>
            @endif
            
            @if(isset($pages[6]))
            <a href="{{$pages[6]->content}}" class="fab fa-linkedin" target="blank"></a>
            @endif

            <a id="whatsapp-icon" onclick="openWhatsAppChat()" class="fab fa-whatsapp"></a>
            <!-- Add more social media icons as needed -->
        </div>

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area protein-header transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="flaticon-menu"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{ url('/') }}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo" height="80px" width="auto"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="{{ url('/') }}#home" class="section-link">Home</a></li>
                                            <li><a href="{{ url('/') }}#features" class="section-link">Features</a></li>
                                            <li><a href="{{ url('/about-us') }}" class="section-link">Social Innovation</a></li>
                                            <li><a href="{{ url('/') }}#price" class="section-link">Price</a></li>
                                            <!--<li><a href="{{ url('/') }}#blog" class="section-link">News</a></li>-->
                                            <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-sm-block" id="cart-list">                                        
                                        @include('front.cart-loop', ['cartContent' => Cart::content()])                                                
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="far fa-times"></i></div>
                                    <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{asset('assets/img/logo/w_logo.png')}}" alt="" title=""></a></div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li class="facebook"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                            <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <!--<li class="youtube"><a href="#"><span class="fab fa-youtube"></span></a></li>-->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo mb-30">
                                        <a href="{{ url('/') }}"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>Tomatrix Nigeria is a community-driven social enterprise with a vision to reduce rural poverty by addressing food losses through enterprising solutions, system thinking, innovation and bold actions.</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li>
                                                <i class="fal fa-phone"></i>
                                                <a href="tel:09056833734">+234-9056833734</a>, 
                                                <a href="tel:08060172591">+234-8060172591</a>, 
                                                <a href="tel:08038645425">+234-8038645425</a>
                                            </li>
                                            <li>
                                                <i class="fal fa-envelope-open-text"></i>
                                                <a href="mailto:info@tomatrixng.com">info@tomatrixng.com</a>
                                                <a href="mailto:tomatrixnigeria@gmail.com">tomatrixnigeria@gmail.com</a>
                                            </li>
                                            <li><i class="fal fa-map-marked-alt"></i>Block B2, TIC Building, Mani Road, Katsina, Nigeria</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to our newsletter</p>
                                        {!! NoCaptcha::renderJs() !!}
                                        <form action="{{url('/subscribe')}}" method="post">
                                            @csrf 
                                            <input type="email" name="email" required="" placeholder="Your Email...">
                                            {!! NoCaptcha::display() !!}
                                            <button class="btn" type="submit" name="submit" value="1">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- off-canvas-end -->

        </header>
        <!-- header-area-end -->


        <!-- main-area -->
         <main>

            @yield('content')

            

        </main>
        <!-- main-area-end -->

        
        <!--<div id="whatsapp-icon" onclick="openWhatsAppChat()">
            <i class="fal fa-phone fs-20"></i>
        </div>-->

        <!-- footer-area -->
        <footer class="footer-area">
            <div class="footer-top-wrap">
                <div class="container">
                    
                    <div class="footer-payment-method">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-quick-link">
                                    <ul>
                                        <li><a href="{{url('/about-us')}}">Social Innovation</a></li>
                                        <li><a href="{{url('/customers-reviews')}}">Testimonials</a></li>
                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                        <li><a href="{{url('/refund-policy')}}">Refund Policy</a></li>
                                        <li><a href="{{url('/terms')}}">Terms & Conditions</a></li>
                                        <li><a href="{{url('/careers')}}">Careers</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="payment-method-img text-center text-lg-end">
                                    <!--<img src="{{asset('assets/img/images/payment_method.png')}}" alt="">-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright-text">
                                <p>Copyright © Tomatrix Nigeria - @php echo date("Y") ; @endphp. Designed By <a href="#">eLED Global Services</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.parallaxScroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/validator.js')}}"></script>
        <script src="{{asset('assets/js/nav-tool.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>


        <script>
            function onlyNumberKey(evt) {

                // Only ASCII character in that range allowed
                var ASCIICode = (evt.which) ? evt.which : evt.keyCode
                if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                    return false;
                return true;
            }
        </script>
        
        <!-- Add this script for reloading the cart content -->
        <script>
            function reloadCartContent() {
                // Send an AJAX request to fetch the updated cart content
                $.ajax({
                    type: 'GET',
                    url: '{{ url('getcartcontent') }}', // Replace with the route that fetches cart content
                    success: function (data) {
                        // Update the content of the cart-list div with the fetched data
                        $('#cart-list').html(data);
                    },
                    error: function (error) {
                        //console.log(error);
                    }
                });
            }

        </script>

        <!-- Add this script for reloading the cart content -->
        <script>
            function reloadCheckoutContent() {
                // Send an AJAX request to fetch the updated cart content
                $.ajax({
                    type: 'GET',
                    url: '{{ url('getcheckoutcontent') }}', // Replace with the route that fetches cart content
                    success: function (data) {
                        // Update the content of the cart-list div with the fetched data
                        $('#checkout-list').html(data);
                    },
                    error: function (error) {
                        //console.log(error);
                    }
                });
            }

        </script>


        <script type='text/javascript'>

            function SubmitFormData(formId) {
                //console.log("Your word have I hidden in my heart so that I do not sin against thee.");
                var form = document.getElementById(formId);
                // Access form elements using their names
                var id = form.elements['id'].value;
                var qty = form.elements['qty'].value;
                var amount = form.elements['amount'].value;
                var name = form.elements['name'].value;
                
                
                // AJAX request 
                $.ajax({
                    url: "{{ url('addtocart') }}" + '/' + id + '/' + qty + '/' + amount + '/' + name,
                    type: 'get',
                    dataType: 'json',

                    success: function(response){
                        reloadCartContent();
                    }
                });

                
            }

            
        </script>


        <script type='text/javascript'>

        function UpdateFormData(rowId, myInput) {
            //console.log("Your word have I hidden in my heart so that I do not sin against thee.");
            var qty = document.getElementById(myInput).value;
            
            // AJAX request 
            $.ajax({
                url: "{{ url('updatecart') }}" + '/' + rowId + '/' + qty ,
                type: 'get',
                dataType: 'json',

                success: function(response){
                    //$('#results').html(response);
                    reloadCartContent();
                }
            });

            
        }

        </script>

        <script>

            function increment(rowId, inputId) {
                var inputElement = document.getElementById(inputId);
                inputElement.stepUp();
                var qty = inputElement.value;
                
                // AJAX request 
                $.ajax({
                    url: "{{ url('updatecart') }}" + '/' + rowId + '/' + qty ,
                    type: 'get',
                    dataType: 'json',

                    success: function(response){
                        reloadCartContent();
                        reloadCheckoutContent(); 
                    }
                });

            }

            function decrement(rowId, inputId) {
                var inputElement = document.getElementById(inputId);
                inputElement.stepDown();
                var qty = inputElement.value;

                // AJAX request 
                $.ajax({
                    url: "{{ url('updatecart') }}/" + rowId + "/" + qty,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        reloadCartContent();
                        reloadCheckoutContent(); 
                    }
                });
            }
        </script>


        

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Select all elements with the class 'remove-item'
                var removeButtons = document.querySelectorAll('.remove-item');

                // Add click event listener to each remove button
                removeButtons.forEach(function (button) {
                    button.addEventListener('click', function (event) {
                        event.preventDefault();
                        
                        // Get the rowId from the data attribute
                        var rowId = button.getAttribute('data-rowid');


                        // Make an Ajax request to remove the item from the cart
                        fetch('{{ url('removecartitem') }}' + '/' + rowId, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                        })

                        .then(response => response.json())
                        .then(data => {
                            // Handle the response, update the UI, etc.
                            //console.log(data);
                            // Reload the page after successful removal
                            if (data.status === 'success') {
                                reloadCartContent();
                            }
                        })
                        .catch(error => {
                            //console.error('Error:', error);
                        });
                    });
                });
            });
        </script>

        

        <!-- Include this script at the end of the body -->
        <script>
            function openWhatsAppChat() {
                // Replace 'your-phone-number' with your actual WhatsApp phone number
                var phoneNumber = '<?php echo $pages[7]->content; ?>'
                var chatLink = 'https://wa.me/' + phoneNumber;

                // Open the WhatsApp chat link in a new tab/window
                window.open(chatLink, '_blank');
            }
        </script>

        

        <style>
            select {
                width: 100%;
                border: none;
                background: #fff;
                padding: 23px 65px 23px 40px;
                color: #a5a5a5;
                font-size: 16px;
                font-weight: 400;
                display: block;
                margin-bottom: 20px;
            }

        
        </style>

    </body>
</html>