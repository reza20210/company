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
                        <h2>بازخورد مشتریان</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>بازخورد مشتریان</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Testimonials -->
    <section class="testimonials-area five ptb-100">
        <div class="container">
            <div class="row">

                @foreach($customers as $customer)

                    <div class="col-lg-12">
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
                    </div>

                @endforeach

            </div>
            <div class="col-md-12 text-md-center align-content-center">
                {{ $customers->links('vendor.pagination.mpage') }}
            </div>

        </div>
    </section>
    <!-- End Testimonials -->

@endsection
