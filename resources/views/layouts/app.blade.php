<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Tomatrix offers premium, preservative-free tomato puree, embodying sustainability and wholesome nutrition. Discover our commitment to quality and community impact, transforming meals with the essence of Tomatrix." name="description" />
        <meta content="eLED Global Services" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('back/libs/owl.carousel/assets/owl.carousel.min.css')}}">

        <link rel="stylesheet" href="{{asset('back/libs/owl.carousel/assets/owl.theme.default.min.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('back/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('back/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('back/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        
    </head>

    <body class="auth-body-bg">
        
        @yield('content')

        
        
        <!-- JAVASCRIPT -->
        <script src="{{asset('back/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('back/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('back/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('back/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('back/node-waves/waves.min.js')}}"></script>

        <!-- owl.carousel js -->
        <script src="{{asset('back/libs/owl.carousel/owl.carousel.min.js')}}"></script>

        <!-- auth-2-carousel init -->
        <script src="{{asset('back/js/pages/auth-2-carousel.init.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('back/js/app.js')}}"></script>

        
    <!-- password-addon init -->
    <script src="{{asset('back/js/pages/password-addon.init.js')}}"></script>

    </body>
</html>
