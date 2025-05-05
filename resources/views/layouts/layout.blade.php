<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India Bhavan</title>
    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{asset('css/icofont.min.css')}}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="icon" type="image/x-icon" href="{{asset('images/bhavan/India-logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="{{asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="index_wraper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        @include('layouts.header')
@include('flash_data')
        @yield('content')

        @include('layouts.footer')

    </div>
    <!-- Page-wrapper-End -->

    @include('layouts.footer_script')

    @yield('footer-script')

</body>

</html>
