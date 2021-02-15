<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Inva - Finance and Investment HTML Template">
    <meta name="description" content="Inva - Finance and Investment HTML Template">
    <meta name="author" content="Barat Hadian">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Box Icons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Modal Video CSS -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="assets/css/rtl.css">

    <title>Inva - قالب HTML اینوا , پوسته سایت شرکتی امور مالی و سرمایه گذاری</title>

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

<!-- User Form -->
<div class="user-form-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">

                <div class="user-form-item">
                    <a class="logo" href="{{ route('default') }}">
                        <img src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/900x300" }}" alt="Logo">
                    </a>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" placeholder="نام شما"
                                   autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email" placeholder="آدرس ایمیل">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password" placeholder="گذرواژه">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password"
                                   placeholder="تکرار گذرواژه">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="common-btn">
                                ثبت نام
                                <span></span>
                            </button>
                        </div>
                        <p>حساب کاربری داری؟ <a href="{{ route('login') }}">ورود</a></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End User Form -->

<!-- Go Top -->
<div class="go-top">
    <i class="bx bxs-up-arrow-alt"></i>
    <i class="bx bxs-up-arrow-alt"></i>
</div>
<!-- End Go Top -->


<!-- Essential JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Ajax Chip JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Mean Menu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Modal Video JS -->
<script src="assets/js/jquery-modal-video.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="assets/js/smoothscroll.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
</body>
</html>

