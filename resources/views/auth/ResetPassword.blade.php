@extends('layouts.body')
@section('content')
    <!-- forgot password -->
    <div class="section_padding mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="padding_default shadow_sm">
                        <form action="{{ route('ResetPassword') }}" method="POST">
                            @csrf
                            <h2 class="title_2">RESETEAZA PAROLA</h2>
                            <p class="text_md mb-4">Vă rugăm să introduceți mai jos adresa dvs. de e-mail pentru a primi un link.</p>
                            @empty($Verification)
                                <div class="alert alert-danger" role="alert">
                                    Aceasta sesiune a expirat
                                </div>
                            @endempty
                            <input type="hidden" name="email" value="{{ $email }}">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="single_billing_inp mb-0">
                                <label>Parolă Nouă <span>*</span></label>
                                <input type="password" name="NewPassword" placeholder="">
                            </div>
                            @error('NewPassword')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="single_billing_inp mb-0">
                                <label>repeta noua parola <span>*</span></label>
                                <input type="password" name="NewPasswordRepeat" placeholder="">
                            </div>
                            @error('NewPasswordRepeat')
                                <span class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="mt-4">
                                <button type="submit" class="default_btn rounded small">reseteaza-mi parola</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
