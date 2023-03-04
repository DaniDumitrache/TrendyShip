@extends('layouts.body')
@section('content')
    <div class="popup_wrap active" style="padding:0px;">
        <div class="popup_container"
            style="max-width: initial; height: 100vh; display:flex; justify-content:center; align-items:center;">
            <div class="popup_content" style="text-align: initial;">


                <div class="register_form padding_default shadow_sm">
                    <h4 style="text-align: center;">Salut!</h4>
                    <div style="display: flex; justify-content:center;">
                        <img src="{{ asset('assets/images/avatar/avatar.png') }}" alt="">
                    </div>
                    <p class="mb-4 text_md" style="text-align: center;">{{ Auth::user()->email }}</p>

                    <form method="POST" action="{{ route('ValidatePassword') }}">
                        @csrf
                        <input type="hidden" name="action" value="{{ $action }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="single_billing_inp">
                                    <label>Parola veche <span>*</span></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="type password">
                                    @error('password')
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
