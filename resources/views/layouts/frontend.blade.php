{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="ShopUS, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/homepage-one/icon.png">

    <!--title  -->
    <title>Shopus: Your One-Stop Destination for Fashion and Style</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/swiper10-bundle.min.css')}}">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-5.3.2.min.css')}}">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="{{asset('frontend/css/nouislider.min.css')}}">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="{{asset('frontend/css/aos-3.0.0.css')}}">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


</head>

<body>


    <!--------------- header-section --------------->
    @include('include.frontend.header')
    <!--------------- header-section-end --------------->

   @yield('content')

    <!--------------- footer-section--------------->
    <br>
    @include('include.frontend.footer')
    <!--------------- footer-section-end--------------->














    <!--------------- jQuery ---------------->
    <script src="{{asset('frontend/assets/js/jquery_3.7.1.min.js')}}"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="{{asset('frontend/assets/js/bootstrap_5.3.2.bundle.min.js')}}"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="{{asset('frontend/assets/js/nouislider.min.js')}}"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="{{asset('frontend/assets/js/aos-3.0.0.js')}}"></script>

    <!--------------- swiper-js ---------------->
    <script src="{{asset('frontend/assets/js/swiper10-bundle.min.js')}}"></script>

    <!--------------- additional-js ---------------->
    <script src="{{asset('frontend/assets/js/shopus.js')}}"></script>


</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Sentuhan Seni</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	{{-- header --}}
    @include('include.frontend.header')
	{{-- end header --}}

	{{-- content --}}
    @yield('content')
	{{-- end content --}}

	{{-- footer --}}
    @include('include.frontend.footer')
    {{-- end footer --}}

	<!-- jquery -->
	<script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('frontend/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('frontend/assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>
