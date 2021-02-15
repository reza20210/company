<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css"/>

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

    <title>{{ $header ? $header->title : "" }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
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

<!-- Header -->
<div class="header-area">
    <div class="container">
        <div class="row">

            <div class="col-sm-9 col-lg-8">
                <div class="left">
                    <ul>
                        <li>
                            <i class='bx bx-mail-send'></i>
                            <a href="mailto:{{ $header ? $header->email : "" }}">{{ $header ? $header->email : "" }}</a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:{{ $header ? $header->telephoneNumber : "" }}">{{ $header ? $header->telephoneNumber : "" }}</a>
                        </li>
                        <li>
                            <i class='bx bx-time'></i>
                            <span>{{ $header ? $header->workTime : ""}}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-3 col-lg-4">
                <div class="right">
                    <ul>
                        <li>
                            <a href="{{ $header ? $header->telegram : "" }}" target="_blank">
                                <i class='bx bxl-telegram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $header ? $header->instagram : "" }}" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $header ? $header->youtube : "" }}" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $header ? $header->twitter : "" }}" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $header ? $header->facebook : "" }}" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Header -->

<!-- Navbar -->
<div class="navbar-area sticky-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{ route('default') }}" class="logo">
            <img src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/900x300" }}"
                 alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('default') }}">
                    <img src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/900x300" }}"
                         alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('default') }}" class="nav-link active">خانه </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">صفحات <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">کاربران <i
                                            class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="nav-link">ورود</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">ثبت نام</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">تیم ما <i
                                            class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('users') }}" class="nav-link">تیم ما</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('testimonials') }}" class="nav-link">بازخورد مشتریان</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('questions') }}" class="nav-link">سوالات متداول</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link">درباره ما </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link">خدمات ما </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects') }}" class="nav-link">پروژه ها </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">تماس با ما</a>
                        </li>
                    </ul>

                    @include('layouts.search')

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar -->

<!-- Banner -->
<div class="banner-area">
    <div class="banner-slider owl-theme owl-carousel">
        @foreach($slides as $slide)
            <div class="overlay-banner">
                <div class="banner-item"
                     style="background-image: url({{ $slide->photo->path }}); ">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>{{ $slide->title }}</h1>
                                    <p>{{ $slide->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- End Banner -->

<!-- Logo -->
<div class="logo-area">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-3">
                <div class="logo-text">
                    <h3>شرکتی که به ما اعتماد می کند</h3>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="logo-slider owl-theme owl-carousel">

                    @foreach($customers as $customer)
                        <div class="logo-item">
                            <img
                                src="{{ $customer->companyLogoId ? $customer->companyLogo->path : "http://www.placehold.it/400" }}"
                                alt="Logo">
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Logo -->

<!-- About -->
<section class="about-area section-overlay pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title">
                        <span class="sub-title">درباره ما</span>
                        <h2>{{ $about->title }}<span> {{ $counter->workExperience }}+</span> سال تجربه کاری
                        </h2>
                    </div>
                    <p class="about-p">{{ $about->description }}</p>
                    <a class="common-btn" href="{{ route('about') }}">
                        درباره ما کاوش کنید
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-img">
                    <div class="row align-items-end">
                        <div class="col-sm-6 col-lg-6">
                            <img
                                src="{{ $about->first_photo_id ? $about->first_photo->path : "http://www.placehold.it/900x300" }}"
                                alt="About">
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <img
                                src="{{ $about->second_photo_id ? $about->second_photo->path : "http://www.placehold.it/900x300" }}"
                                alt="About">
                        </div>
                        <div class="col-lg-12">
                            <img
                                src="{{ $about->third_photo_id ? $about->third_photo->path : "http://www.placehold.it/900x300" }}"
                                alt="About">
                        </div>
                    </div>
                    <div class="years">
                        <h3>{{ $counter->workExperience }}+ <br> <span>سال</span></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About -->

<!-- Services -->
<section class="services-area pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="sub-title">خدمات ما</span>
                    <h2><span>خدماتی</span> که ما برای مشتریان نهایی خود فراهم می کنیم</h2>
                </div>
            </div>
        </div>

        <div class="row">

            @include('layouts.services')

        </div>

    </div>
</section>
<!-- End Services -->

<!-- Work -->
<section class="work-area ptb-100">
    <div class="container">
        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="sub-title">چگونه کار می کنیم</span>
                    <h2>ببینید چگونه طیف وسیعی از کار را مدیریت می کنیم</h2>
                </div>
                <div class="col-lg-6">
                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم
                        ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-7">
                <video id="player" playsinline controls
                       data-poster="{{ $header->siteVideoPosterId ? $header->siteVideoPoster->path : "http://www.placehold.it/900x300" }}">
                    <source
                        src="{{ $header->siteVideoId ? $header->siteVideo->path : "http://www.placehold.it/900x300" }}"
                        type="video/mp4"/>
                {{--                    <source src="/path/to/video.webm" type="video/webm"/>--}}

                <!-- Captions are optional -->
                    <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en"
                           default/>
                </video>
            </div>

            <div class="col-lg-5">
                <div class="work-item">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-medal-of-award"></i>
                        </li>
                        <li>
                            <h3>کارایی عالی</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        </li>
                    </ul>
                </div>
                <div class="work-item">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-evaluate"></i>
                        </li>
                        <li>
                            <h3>تحلیل پروژه و بودجه</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        </li>
                    </ul>
                </div>
                <div class="work-item">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                        </li>
                        <li>
                            <h3>برنامه ریزی مالی</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        </li>
                    </ul>
                </div>
                <div class="work-item">
                    <ul class="align-items-center">
                        <li>
                            <i class="flaticon-trend"></i>
                        </li>
                        <li>
                            <h3>رشد موفق</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد.</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Work -->

<!-- Projects -->
<section class="projects-area section-overlay pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="sub-title">پروژه ها</span>
                    <h2>تعدادی از <span>پروژه ها</span> جایی که به موفقیت بزرگی دست می یابیم</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @include('layouts.projects')
        </div>

    </div>
</section>
<!-- End Projects -->

<!-- Counter -->
@include('layouts.counters')
<!-- End Counter -->

<!-- Team -->
<section class="team-area ptb-100">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="sub-title">اعضای تیم</span>
                    <h2>ملاقات عالی با <span>تیم</span> به چه کسانی وابسته هستیم</h2>
                </div>
            </div>
        </div>

        @include('layouts.team_members')

        <div class="text-center">
            <a class="common-btn" href="{{ route('users') }}">
                همه اعضا
                <span></span>
            </a>
        </div>

    </div>
</section>
<!-- End Team -->

<!-- Testimonials -->
<section class="testimonials-area ptb-100">
    <div class="container">

        <div class="section-title">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <span class="sub-title">بازخورد مشتریان</span>
                    <h2>مشتریان ما در مورد <span>{{ $header->title }}</span> چه می گویند</h2>
                </div>
            </div>
        </div>

        <div class="testimonials-slider owl-theme owl-carousel">

            @foreach($customers as $customer)
                <div class="testimonials-item">
                    <i class='bx bxs-quote-right icon'></i>
                    <p>{{ $customer->companyAgentComment }}</p>
                    <img
                        src="{{ $customer->companyAgentPhotoId ? $customer->companyAgentPhoto->path : "http://www.placehold.it/400" }}"
                        alt="Testimonials">
                    <h3>{{ $customer->companyAgentName }}</h3>
                    <span>{{ $customer->companyAgentRole }}</span>
                    <ul>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                        <li>
                            <i class='bx bxs-star checked'></i>
                        </li>
                    </ul>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Testimonials -->

<!-- Footer -->
@include('layouts.footer')
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="bx bxs-up-arrow-alt"></i>
    <i class="bx bxs-up-arrow-alt"></i>
</div>
<!-- End Go Top -->

<script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>
<script>
    const player = new Plyr('#player');
</script>

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
