<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Roxo Administrator">
    <meta name="author" content="Masoud Salehi">
    <meta name="keyword" content="Bootstrap Data">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>صفحه مدیریت</title>
    <!-- Icons -->
    <link href="{{ asset('css/all-admin.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.min.js"></script>

    @yield('styles')
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        {{--        <a class="" href="{{ route('default') }}">صفحه اصلی</a>--}}
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>

            <li class="nav-item p-x-1">
                <a class="nav-link" href="{{ route('default') }}">صفحه اصلی سایت</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-left hidden-md-down">
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link aside-toggle" href="#"><i class="icon-bell"></i><span--}}
            {{--                        class="tag tag-pill tag-danger">5</span></a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#"><i class="icon-list"></i></a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item">--}}
            {{--                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>--}}
            {{--            </li>--}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    {{--                    <img src="img/avatars/roxo-avatar.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
                    <span class="hidden-md-down">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                {{--                    <div class="dropdown-header text-xs-center">--}}
                {{--                        <strong>تنظیمات</strong>--}}
                {{--                    </div>--}}
                {{--                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>--}}
                {{--                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> تنظیمات</a>--}}
                <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                    <div class="divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick=" event.preventDefault();
                       document.getElementById('logout-form').submit()" ;><i class="fa fa-lock"></i> خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                {{--                <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>--}}
            </li>

        </ul>
    </div>
</header>
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}"><i class="icon-speedometer"></i> داشبورد <span
                        class="tag tag-info">جدید</span></a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-home"></i>صفحه اصلی</a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-frame"></i>هدر سایت</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('headers.create') }}"><i class="icon-picture"></i>
                                    ایجاد
                                    هدر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('headers.index') }}"><i class="icon-list"></i>لیست
                                    هدرها</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-frame"></i>اسلایدر</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('slides.create') }}"><i class="icon-picture"></i>
                                    ایجاد
                                    اسلاید</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('slides.index') }}"><i class="icon-list"></i>لیست
                                    اسلایدها</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i>مدیریت مشتریان</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customers.create') }}"><i class="icon-people"></i>
                                    ایجاد
                                    مشتری</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customers.index') }}"><i class="icon-list"></i>لیست
                                    مشتریان</a>
                            </li>
                        </ul>
                    </li>

                    {{--                                        <li class="nav-item nav-dropdown">--}}
                    {{--                                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i>مدیریت خدمات</a>--}}
                    {{--                                            <ul class="nav-dropdown-items">--}}
                    {{--                                                <li class="nav-item">--}}
                    {{--                                                    <a class="nav-link" href="{{ route('services.create') }}"><i class="icon-people"></i>--}}
                    {{--                                                        ایجاد--}}
                    {{--                                                        خدمت</a>--}}
                    {{--                                                </li>--}}
                    {{--                                                <li class="nav-item">--}}
                    {{--                                                    <a class="nav-link" href="{{ route('services.index') }}"><i class="icon-list"></i>لیست--}}
                    {{--                                                        خدمات</a>--}}
                    {{--                                                </li>--}}
                    {{--                                            </ul>--}}
                    {{--                                        </li>--}}

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i>مدیریت شمارنده
                            ها</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('counters.create') }}"><i class="icon-people"></i>
                                    ایجاد
                                    شمارنده</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('counters.index') }}"><i class="icon-list"></i>لیست
                                    شمارنده ها</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i>مدیریت درباره ما
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('abouts.create') }}"><i class="icon-people"></i>
                                    ایجاد
                                    درباره ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('abouts.index') }}"><i class="icon-list"></i>
                                    لیست درباره ما</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i>کاربران</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.create') }}"><i class="icon-user-follow"></i> ثبت
                            کاربر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}"><i class="icon-people"></i> لیست
                            کاربران</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-globe-alt"></i>پروژه ها</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.create') }}"><i class="icon-plus"></i>ایجاد
                            پروژه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects.index') }}"><i class="icon-docs"></i>لیست پروژه ها</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>دسته بندی</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.create') }}"><i class="icon-plus"></i>ایجاد دسته
                            بندی
                            جدید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}"><i class="icon-docs"></i>لیست دسته
                            بندی
                            ها</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>سوالات متداول</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('questions.create') }}"><i class="icon-plus"></i>ایجاد سوال
                            و پاسخ جدید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('questions.index') }}"><i class="icon-docs"></i>لیست سوالات
                            متداول</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>پیام های دریافتی</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.index') }}"><i class="icon-docs"></i>لیست پیام
                            ها</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-docs"></i>رسانه ها</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('photos.index') }}"><i class="icon-list"></i>لیست فایل
                            ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('photos.create') }}"><i class="icon-plus"></i>آپلود فایل</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
<!-- Main content -->
<main class="main">

    <div class="container-fluid bg-content">
        <div class="animated fadeIn">

            <div class="row">
                @yield('content')
            </div>
        </div>

    </div>
    <!--/.container-fluid-->
</main>

<script src="{{ asset('js/all-admin.js') }}"></script>
@yield('scripts')
</body>
</html>
