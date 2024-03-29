@extends('layouts.body')

@section('content')
    <!--register wrapper-->
    <div class="register_wrap section_padding_b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="register_form padding_default shadow_sm">
                        <h4 class="title_2">CREAȚI UN CONT</h4>
                        <p class="mb-4 text_md">Înregistrați-vă aici dacă sunteți un client nou.</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Numele complet <span>*</span></label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Adresa de e-mail <span>*</span></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Parola <span>*</span></label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="single_billing_inp">
                                        <label>Confirmă parola <span>*</span></label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <!--
                                                             <div class="col-12 mt-2">
                                                                <div class="custom_check check_2 d-flex align-items-center">
                                                                    <input type="checkbox" id class="check_inp" hidden id="save-default">
                                                                    <label for="save-default">I have read and agree to the <a
                                                                            href="terms-condition.html" class="text-color">terms & conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                           -->

                                <div class="col-12 mt-3">
                                    <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">
                                        Inregistrare
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!--
                                                     <div class="dif_regway my-3">
                                                        <span class="txt">Or singup in with</span>
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

                        <p class="text-center mt-3 mb-0">Am deja cont? <a href="{{route('login')}}"
                                class="text-color">Logheaza-te</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
