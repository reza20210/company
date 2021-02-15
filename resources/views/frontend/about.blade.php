@extends('layouts.master')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

    <!-- Page Title -->
    <div class="page-title-area" style="background-image: url({{ $about->third_photo->path }}); ">
        <div class="title-shape">
            <img src="{{ asset('assets/img/title/title-bg-shape.png') }}" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>درباره ما</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>درباره ما</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <section class="about-area four section-overlay pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="about-img">
                        <div class="row align-items-end">
                            <div class="col-sm-6 col-lg-6">
                                <img
                                    src="{{ $about->fifth_photo_id ? $about->fifth_photo->path : "http://www.placehold.it/900x300" }}"
                                    alt="About">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <img
                                    src="{{ $about->sixth_photo_id ? $about->sixth_photo->path : "http://www.placehold.it/900x300" }}"
                                    alt="About">
                            </div>
                        </div>
                        <div class="years">
                            <h3>{{ $counter->workExperience }}+ <br> <span>سال</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">درباره ما</span>
                            <h2>{{ $about->title }}<span> {{ $counter->workExperience }}+</span> سال تجربه</h2>
                        </div>
                        <p class="about-p">{{ $about->description }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Counter -->
    @include('layouts.counters')
    <!-- End Counter -->

    <!-- Team -->
    <section class="team-area four ptb-100">
        <div class="container">

            <div class="section-title">
                <span class="sub-title">اعضای تیم</span>
                <h2>ملاقات عالی با <span>تیم</span> به چه کسانی وابسته هستیم</h2>
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
@endsection
