@extends('layouts.body')
@section('content')
    <div class="popup_wrap active" style="padding:0px;">
        <div class="popup_container"
            style="max-width: initial; height: 100vh; display:flex; justify-content:center; align-items:center;">
            <div class="popup_content" style="text-align: initial;">


                <div class="register_form padding_default shadow_sm">
                    <div style="display: flex; justify-content:center;">
                        <img src="{{ asset('assets/images/avatar/avatar.png') }}" alt="">
                    </div>
                    <h4 style="text-align: center;">Autentificare multi-factor</h4>
                    <p class="mb-4 text_md" style="text-align: center;">Ți-am trimis un cod de autentificare pe SMS la {{ $phone }}</p>

                    <form method="POST" action="{{ route('Activate2fa') }}">
                        @csrf
                        <input type="hidden" name="code" value="{{ $code }}">
                        <input type="hidden" name="phone" value="{{ $phone }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label>Introdu codul de autentificare <span>*</span></label>
                                    <input id="VerificationCode" type="text"
                                        class="form-control @error('VerificationCode') is-invalid @enderror"
                                        name="VerificationCode" autocomplete="type VerificationCode">
                                    @error('VerificationCode')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="default_btn xs_btn rounded px-4 d-block w-100">
                                    continua
                                </button>
                            </div>

                        </div>
                    </form>

                </div>


            </div>
        </div>
    </div>
@endsection
