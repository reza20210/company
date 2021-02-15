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
                        <h2>خدمات</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>خدمات</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Services -->
    <section class="services-area ptb-100">
        <div class="container">
            <div class="row">

                @include('layouts.services')

            </div>
            <div class="col-md-12 text-md-center align-content-center">
                {{ $services->links('vendor.pagination.mpage') }}
            </div>
        </div>
    </section>
    <!-- End Services -->
@endsection
