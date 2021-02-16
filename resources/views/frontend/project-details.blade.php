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

    <!-- Project Details -->
    <div class="project-details-area pt-100">
        <div class="container">

            <div class="details-img">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="img-left">
                            <img src="{{ $project->photo ? $project->photo->path : "http://www.placehold.it/900x300" }}"
                                 alt="Details">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content-right">
                            <ul>
                                <li>
                                    دسته بندی:
                                    <span>{{ $project->category->title }}</span>
                                </li>
                                <li>
                                    کاربر:
                                    <span>{{ $project->user->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="details-handle">
                <div class="row">
                    <div class="col col-12 mb-3">
                        <h2>{{ $project->title }}</h2>
                    </div>
                    @if($project->projectVideoId)
                        <div class="col col-12 mb-3">
                            <video class="card w-100" id="player" playsinline controls
                                   data-poster="{{ $project->projectVideoPosterId ? $project->projectVideoPoster->path : "http://www.placehold.it/900x300" }}">
                                <source
                                    src="{{ $project->projectVideoId ? $project->projectVideo->path : "http://www.placehold.it/900x300" }}"
                                    type="video/mp4"/>
                            {{--                    <source src="/path/to/video.webm" type="video/webm"/>--}}

                            <!-- Captions are optional -->
                                <track kind="captions" label="English captions" src="/path/to/captions.vtt"
                                       srclang="en"
                                       default/>
                            </video>
                        </div>
                    @endif
                    <div class="col col-12">
                        <p>{!! $project->description !!}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Project Details -->
@endsection
