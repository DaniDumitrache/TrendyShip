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
                    <p class="mb-4 text_md" style="text-align: center;">Setează numărul de telefon și validează-l în pasul
                        următor prin intermediul codului transmis prin SMS</p>

                    <form method="POST" action="{{ route('SendVerificationCode2fa') }}">
                        @csrf
                      
                        <div class="row">
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label>Introdu numărul de telefon mobil <span>*</span></label>
                                    <input id="phone" type="text"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        autocomplete="type phone">
                                    @error('phone')
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
