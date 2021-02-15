<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <p>{{ $header->description }}</p>
                        <ul>
                            <li>
                                <a href="{{ $header ? $header->facebook : "" }}" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header ? $header->twitter : "" }}" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header ? $header->telegram : "" }}" target="_blank">
                                    <i class='bx bxl-telegram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header ? $header->instagram : "" }}" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $header ? $header->youtube : "" }}" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-link">
                        <h3>لینکهای مفید</h3>
                        <ul>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                                <a href="{{ route('about') }}">درباره ما</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                                <a href="{{ route('services') }}">خدمات</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                                <a href="{{ route('projects') }}">پروژه ها</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                                <a href="{{ route('users') }}">تیم ما</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-left'></i>
                                <a href="{{ route('questions') }}">سوالات متداول</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-hours">
                        <h3>ساعت کاری</h3>
                        <ul>
                            <li>دوشنبه <span>8:00 - 21:00</span></li>
                            <li>سه شنبه <span>8:00 - 21:00</span></li>
                            <li>چهارشنبه <span>8:00 - 21:00</span></li>
                            <li>پنجشنبه <span>8:00 - 21:00</span></li>
                            <li>یکشنبه <span>8:00 - 21:00</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>اطلاعات تماس</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-location-plus'></i>
                                <span>{{ $header ? $header->address : "" }}</span>
                            </li>
                            <li>
                                <i class='bx bxs-phone-call'></i>
                                <a href="tel:{{ $header ? $header->telephoneNumber : "" }}">{{ $header ? $header->telephoneNumber : "" }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-paper-plane'></i>
                                <a href="mailto:{{ $header ? $header->email : "" }}">{{ $header ? $header->email : "" }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-shape">
        <img src="{{ asset('assets/img/footer-bg.png') }}" alt="Footer">
    </div>
</footer>
