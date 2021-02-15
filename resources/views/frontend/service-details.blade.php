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
                        <h2>جزئیات خدمات</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>جزئیات خدمات</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Services Details -->
    <div class="service-details-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="details-item">

                        <div class="details-img">
                            <h2>{{ $service->title }}</h2>
                            <p>{!!  $service->description !!}</p>
                            @if($service->photos)
                                <div class="row">
                                    @foreach($service->photos as $photo)
                                        <div class="col-sm-6 col-lg-6">
                                            <img
                                                src="{{ $photo ? $photo->path : "http://www.placehold.it/900x300" }}"
                                                alt="Details">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <section class="projects-area section-overlay pt-100 pb-70" style="margin-top: 50px">
                            <div class="container">

                                <div class="section-title">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12">
                                            <h2>تعدادی از <span>پروژه ها</span>
                                            </h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    @include('layouts.projects', ['projects' => $service->projects])
                                </div>

                            </div>
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Details -->
@endsection
