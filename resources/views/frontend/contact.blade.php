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
                        <h2>تماس با ما</h2>
                        <ul>
                            <li>
                                <a href="{{ route('default') }}">صفحه اصلی</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                            </li>
                            <li>
                                <span>تماس با ما</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact -->
    <div class="contact-area pt-100 pb-70">
        <div class="contact-shape">
            <img src="{{ asset('assets/img/contact-shape.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>در تماس باشید</h2>
                    </div>
                    {!! Form::open(['method' => 'POST', 'id' => 'contactForm']) !!}
                    {{--                                        {!! Form::open(['method' => 'POST', 'route' => ['messageStore']]) !!}--}}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="نام"
                                       required
                                       data-error="لطفا نام خود را وارد کنید">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="ایمیل"
                                       required data-error="لطفا ایمیل خود را وارد کنید">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" placeholder="تلفن" required
                                       data-error="تلفن خود را وارد کنید" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                       placeholder="موضوع" required data-error="موضوع خود را وارد کنید">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                          placeholder="پیام شما" required data-error="پیام خود را بنویسید"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="form-group">
                                {!! Form::submit('ارسال پیام', ['class' => 'btn common-btn col-lg-12']); !!}
                            </div>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3>اطلاعات تماس</h3>
                        <br>
                        <ul>
                            <li>
                                <i class='bx bx-current-location'></i>
                                <a href="#">{{ $header ? $header->address : "" }}</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:{{ $header ? $header->telephoneNumber : "" }}">{{ $header ? $header->telephoneNumber : "" }}</a>
                            </li>
                            <li>
                                <i class='bx bx-paper-plane'></i>
                                <a href="mailto:{{ $header ? $header->email : "" }}">{{ $header ? $header->email : "" }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
