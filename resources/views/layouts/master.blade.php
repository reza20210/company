<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Inva - Finance and Investment HTML Template">
    <meta name="description" content="Inva - Finance and Investment HTML Template">
    <meta name="author" content="Barat Hadian">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Box Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Modal Video CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">

    <title>{{ $header->title }}</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="pre-load">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

@yield('content')

<!-- Footer -->
@include('layouts.footer')
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="bx bxs-up-arrow-alt"></i>
    <i class="bx bxs-up-arrow-alt"></i>
</div>
<!-- End Go Top -->

<!-- Essential JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Form Validator JS -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- Ajax Chip JS -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Mean Menu JS -->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Modal Video JS -->
<script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>
<!-- Odometer JS -->
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<!-- Smooth Scroll JS -->
<script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
