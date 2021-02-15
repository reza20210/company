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
    <div class="main-nav four">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('default') }}">
                    <img
                        src="{{ $header->siteLogoId ? $header->siteLogo->path : "http://www.placehold.it/900x300" }}"
                        alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('default') }}" class="nav-link active">خانه </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">صفحات <i
                                    class='bx bx-chevron-down'></i></a>
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
