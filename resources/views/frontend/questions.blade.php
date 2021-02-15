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
                        <h2>سوالات متداول</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>سوالات متداول</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- FAQ -->
    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('assets/img/faq-main1.jpg') }}" alt="FAQ">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-item">
                        <ul class="accordion">
                            @foreach($questions as $question)
                                <li>
                                    <a>{{ $question->questionTitle }}</a>
                                    <p>{{ $question->answer }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End FAQ -->
@endsection

