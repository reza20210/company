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
                        <h2>تیم ما</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>جزئیات تیم</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Team Details -->
    <div class="team-details-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="details-img">
                        <img src="{{ $user->photo ? $user->photo->path : "http://www.placehold.it/900x300" }}"
                             alt="Team">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="details-content">
                        <h2>{{ $user->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Details -->

    <!-- Biography -->
    <div class="biography-area pb-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-2">
                    <h2>بیوگرافی</h2>
                </div>

                <div class="col-lg-10">
                    <div class="content">
                        {{--                    <p>{{ $user->bio }}</p>--}}
                        <p>{!! $user->bio !!}</p>
                    </div>
                </div>

                <section class="projects-area section-overlay pt-100 pb-70" style="margin-top: 50px">
                    <div class="container">

                        <div class="section-title">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h2>تعدادی از <span>نمونه کارها</span>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @include('layouts.projects', ['projects' => $user->projects])
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- End Biography -->
@endsection
