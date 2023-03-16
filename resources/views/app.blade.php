<!doctype html>
<html lang="en">
    <head>
        <title>Elderly &mdash; Website Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        @yield('page-css')
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="site-wrap">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
        </div>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        @yield('bottom-js')
    </body>
</html>
