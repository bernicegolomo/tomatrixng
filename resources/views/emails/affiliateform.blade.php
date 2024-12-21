<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Email | Tomatrix Nigeria</title>
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

    <style>
        /* Add your custom styles here */

        header {
            text-align: center;
            padding-bottom: 20px;
        }

        .content {
            margin-top: 20px;
        }

        footer {
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <!-- Replace the src attribute with the URL of your logo -->
            <img src="{{asset('assets/img/logo/logo.png')}}" height= "100px">
            <h1>NewsLetter Subscription</h1>
        </header>

        <div class="content">
            <p>Hello Tomatrix,</p>
            <p>A user just indicated interest to become a member of Tomatrix Affiliate. Below are the form details:</p>
            <p>Business Name : {{$data['name']}}</p>
            <p>Email : {{$data['email']}}</p>
            <p>Phone : {{$data['phone']}}</p>
            <p>Minimum Order Quantity (MOQ) : {{$data['moq']}}</p>
            <p>Minimum Order : {{$data['amount']}}</p>
            <p>Online Link : {{$data['link']}}</p>
            <p>Address : {{$data['Delivery Address']}}</p>
            <p>Country : {{$data['country']}}</p>
            <p>State : {{$data['state']}}</p>

            <p class="mt-5">Best regards,<br>Site Administor</p>
        </div>

        <footer class="text-center">
            <p>&copy; @php echo date("Y"); @endphp Tomatrix Nigeria. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
