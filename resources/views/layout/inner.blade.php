<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title> Foods Craft</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awsome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('include.inner_header')

    @yield('content')

    @include('include.inner_footer')

    <!-- ToTop Button -->
    <button class="scrollup"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('js/vendor/counterup.min.js')}}"></script>
    <script src="{{asset('js/vendor/countdown.js')}}"></script>
    <script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/vendor/easing.min.js')}}"></script>
    <script src="{{asset('js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
