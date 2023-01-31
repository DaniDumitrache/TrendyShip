@extends('layouts.body')
@section('content')
    <!-- account wrapper -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include('layouts.headerAccount')
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="acprof_info_wrap shadow_sm">
                        @include('layouts.settings.Navigation')
                        <h4 class="text_xl mb-3">Autentificare</h4>
                        <form action="{{ route('LoginSettings') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Lungimea minima a parolei</label>
                                        <input type="number" class="form-control" id="min_password_length"
                                            name="min_password_length" value="{{ $website_config->min_password_length }}"
                                            placeholder="Lungimea minima a parolei">
                                        @error('min_password_length')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Zile expirare parola</label>
                                        <input type="number" class="form-control" id="password_expiration_days"
                                            name="password_expiration_days"
                                            value="{{ $website_config->password_expire_days }}"
                                            placeholder="Zile expirare parola">
                                        @error('password_expiration_days')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Numarul maxim de incercari nereusite</label>
                                        <input type="number" class="form-control" id="allowed_failed_login_attempts"
                                            name="allowed_failed_login_attempts"
                                            value="{{ $website_config->max_failed_attempts }}"
                                            placeholder="Numarul maxim de incercari nereusite">
                                        @error('allowed_failed_login_attempts')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Numarul maxim de incercari brute force</label>
                                        <input type="number" class="form-control" id="max_brute_force_attempts"
                                            name="max_brute_force_attempts"
                                            value="{{ $website_config->max_brute_force_attempts }}"
                                            placeholder="Numarul maxim de incercari brute force">
                                        @error('max_brute_force_attempts')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                    <div class="custom_check check_2 d-flex align-items-center" bis_skin_checked="1">
                                        <input type="checkbox" class="check_inp" hidden=""
                                            @if ($website_config->two_factor_authentication == true) checked @endif id="two_factor_authentication"
                                            name="two_factor_authentication">
                                        <label for="two_factor_authentication" class="text_md">Foloseste autentificare in doi
                                            pasi</label>
                                    </div>
                                </div>


                                <div class="col-12 acprof_subbtn">
                                    <button type="submit" name="asss"
                                        class="default_btn rounded small">Salveaza</button>
                                    <button type="submit" name="Back" class="default_btn rounded small">Inapoi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#maintance').niceSelect();
        $('#PaymentsMethod').select2();
        $('#currency').niceSelect();
        $('#languages').niceSelect()
    </script>
@endsection
