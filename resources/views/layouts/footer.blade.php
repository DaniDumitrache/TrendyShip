    <!-- footer area -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-md-0">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_logo">
                                <img loading="lazy" src="assets/images/svg/logo.svg" alt="easy shop">
                            </div>
                            <div class="footet_text">
                                <p>Lorem ipsum, or lipsum as it is sometimes kno
                                    wn, is dummy text used in laying out print, gra
                                    phic or web designs the passage.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_newslet">
                                <h4>Newsletter</h4>
                                <form action="{{ route('NewsLetter') }}" method="POST" class="footernews_form">
                                    @csrf
                                    <input type="text" class="" name="NewsLetterEmail"
                                        placeholder="Your email address">
                                    <button type="submit" class="default_btn">Subscribe</button>
                                </form>
                                @error('NewsLetterEmail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-md-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">Servicii pentru clienti</h4>
                                <a href="account-order-history.html">Garantii si service</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">Comenzi si livrare</h4>
                                <a href="{{ route('account') }}">Contul meu</a>
                                <a href="">Livrarea comenzilor</a>
                                {{-- <a href="terms-condition.html">Vreau sa vand</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-md-0">
                    <div class="row">

                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">Suport clienti</h4>
                                <a href="">Formular returnare produs</a>
                                <a href="{{ route('contact') }}">Contact</a>
                                <a href="">ANPC</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">{{ config('app.name') }}</h4>
                                <a href="">Despre {{ config('app.name') }}</a>
                                <a href="">Termene si conditii</a>
                                <a href="">ANPC</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="footer_download">
                        <div class="row">
                            <div class="col-lg-6 col-lg-12">
                                <h4 class="footer_title">Contact</h4>
                                <div class="footer_contact">
                                    <p>
                                        <span class="icn"><i class="las la-map-marker-alt"></i></span>

                                        7895 Dr New Albuquerue, NM 19800, <br> United
                                        States Of America
                                    </p>
                                    <p class="phn">
                                        <span class="icn"><i class="las la-phone"></i></span>
                                        +566 477 256, +566 254 575
                                    </p>
                                    <p class="eml">
                                        <span class="icn"><i class="lar la-envelope"></i></span>
                                        info@domain.com
                                    </p>
                                </div>
                            </div>
                            <div class="footer_social col-lg-6 col-lg-12">
                                <div class="footer_icon d-flex">
                                    <a href="#" class="facebook"><i class="lab la-facebook-f"></i></a>
                                    <a href="#" class="twitter"><i class="lab la-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="lab la-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </footer>

    <!-- copyright -->
    <div class="copyright_wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright_text">© {{ config('app.name') }} - All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- popup -->
    <div class="popup_wrap">
        <div class="popup_container">
            <div class="popup_content">
                <div class="close_popup">
                    <i class="las la-times"></i>
                </div>
                <h2 class="text-uppercase">Get <span class="text-color">30%</span> off</h2>
                <p class="mb-3">
                    Subscribe to the newsletter to receive updates about new products.
                </p>
                <form class="subscribe_form">
                    <input type="text" placeholder="Your email address">
                    <button type="submit" class="default_btn">Subscribe</button>
                </form>
                <div class="mt-4">
                    <div class="custom_check check_2 d-flex align-items-center justify-content-center">
                        <input type="checkbox" class="check_inp" hidden="" id="save-default">
                        <label for="save-default">Do not show this again</label>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
