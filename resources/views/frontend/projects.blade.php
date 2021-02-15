@extends('layouts.master')

@section('content')
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

    <!-- Page Title -->
    <div class="page-title-area title-bg-three">
        <div class="title-shape">
            <img src="{{ asset('assets/img/title/title-bg-shape.png') }}" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>پروژه ها</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>پروژه ها</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Projects -->
    <div class="projects-area ptb-100">
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
            <div class="col-md-12 text-md-center align-content-center">
                {{ $projects->links('vendor.pagination.mpage') }}
            </div>
        </div>
    </div>
    <!-- End Projects -->
@endsection
