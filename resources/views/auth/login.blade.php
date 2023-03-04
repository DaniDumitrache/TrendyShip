@extends('layouts.body')
@section('content')
    <!--Login wrap-->
    <div class="register_wrap section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="register_form padding_default shadow_sm">
                        <h4 class="title_2">Logheaza-te</h4>
                        <p class="mb-4 text_md">Conectați-vă dacă sunteți un client care revine</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Adresa de e-mail <span>*</span></label>
                                        <input id="email" type="email" placeholder="exemplu@mail.com"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Parola <span>*</span></label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            autocomplete="type password" placeholder="Parola">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-2 d-flex justify-content-between align-items-center">
                                    <!--
                                                                                    <div class="custom_check check_2 d-flex align-items-center">
                                                                                        <label class="form-check-label" for="remember">
                                                                                            {{ __('Remember Me') }}
                                                                                        </label>
                                                                                    </div>
                                                -->

                                    <a href="{{ route('ForgotPassword') }}" class="text-color">Ai uitat parola?</a>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">
                                        Logheaza-te
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!--
                                                                    <div class="dif_regway my-3">
                                                                        <span class="txt">Or login in with</span>
                                                                    </div>

                                                                            <div class="d-flex">
                                                                                <button class="default_btn xs_btn rounded px-4 d-block w-50 text-capitalize bg-facebook">
                                                                                    <i class="fab fa-facebook-f me-2"></i> Facebook
                                                                                </button>
                                                                                <button class="default_btn xs_btn rounded px-4 d-block w-50 ms-3 text-capitalize bg-google">
                                                                                    <i class="fab fa-google me-2"></i> Google
                                                                                </button>
                                                                            </div>
                                                    -->

                        <p class="text-center mt-3 mb-0">Nu ai cont? <a href="register.php"
                                class="text-color">Înregistrează-te</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
