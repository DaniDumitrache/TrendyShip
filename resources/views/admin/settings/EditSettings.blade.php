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
                        <h4 class="text_xl mb-3">Gestionati {{ config('app.name') }}</h4>
                        <form action="{{ route('ChangePassword') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{--
                                Autentificare
                                Configurare server e-mail
                                Stripe Config
                                SEO
                                Gestionati NordPc
                                Configurare publicitate 
                                --}}
                                {{-- General Settings --}}
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Numele Siteului</label>
                                        <input type="text" name="ActualPassword">
                                        @error('ActualPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Mod mentenanta</label>
                                        <select id="maintance">
                                            <option value="on">Activ</option>
                                            <option value="off">Inactiv</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Modalitati plata</label>
                                        <select style="width: 100%;" multiple id="PaymentsMethod">
                                            <option value="credit_card">Card de credit</option>
                                            <option value="bank_transfer">Transfer bancar</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="cash_on_delivery">Plata la livrare</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Moneda</label>
                                        <select id="currency">
                                            <option value="on">RON</option>
                                            <option value="off">EUR</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Limba</label>
                                        <select id="languages">
                                            <option value="on">Romana</option>
                                            <option value="off">engleza</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Taxa de livrare</label>
                                        <input type="number" max="100" value="0" name="ActualPassword">
                                        @error('ActualPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Auth --}}
                                <h4 class="text_xl mb-3">Autentificare</h4>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Lungimea minima a parolei</label>
                                        <input type="number" class="form-control" id="min_password_length"
                                            name="min_password_length" placeholder="Lungimea minima a parolei">
                                        @error('NewPassword')
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
                                            name="password_expiration_days" placeholder="Zile expirare parola">
                                        @error('NewPassword')
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
                                            placeholder="Numarul maxim de incercari nereusite">
                                        @error('NewPassword')
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
                                            placeholder="Numarul maxim de incercari brute force">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="retagreement mt-4 mb-4" bis_skin_checked="1">
                                    <div class="custom_check check_2 d-flex align-items-center" bis_skin_checked="1">
                                        <input type="checkbox" class="check_inp" hidden="" id="agreement-by">
                                        <label for="agreement-by" class="text_md">Foloseste autentificare in doi
                                            pasi</label>
                                    </div>
                                </div>

                                {{-- SEO --}}
                                <h4 class="text_xl mb-3">Seo</h4>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Titlu meta</label>
                                        <input type="text" name="meta_title" placeholder="Titlu meta">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cuvinte cheie meta</label>
                                        <input type="text" name="meta_keywords" placeholder="Cuvinte cheie meta">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Descriere meta</label>
                                        <textarea style="max-height: 400px; min-height: 250px;" type="text" name="meta_description" rows="3"
                                            placeholder="Descriere meta"></textarea>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- Smtp --}}
                                <h4 class="text_xl mb-3">Configurare server e-mail</h4>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="email_server">Serverul de e-mail</label>
                                        <input type="text" class="form-control" id="email_server" name="email_server"
                                            placeholder="ex: smtp.example.com">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="sender_email">Adresa de expeditor</label>
                                        <input type="text" class="form-control" id="sender_email" name="sender_email"
                                            placeholder="ex: no-reply@example.com">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="sender_name">Numele expeditorului</label>
                                        <input type="text" class="form-control" id="sender_name" name="sender_name"
                                            placeholder="ex: Echipa Example">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="email_authentication">Autentificare la serverul de e-mail</label>
                                        <select class="form-control" id="email_authentication"
                                            name="email_authentication">
                                            <option value="1">Necesara</option>
                                            <option value="0">Nu este necesara</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- config google login  --}}
                                <h4 class="text_xl mb-3">Setări de autentificare Google</h4>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="google_client_id">Google Client ID</label>
                                        <input type="text" class="form-control" id="google_client_id"
                                            name="google_client_id"
                                            placeholder="ex: 1234567890abcdefghijklmnopqrstuvwxyz.apps.googleusercontent.com">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="google_client_secret">Google Client Secret</label>
                                        <input type="text" class="form-control" id="google_client_secret"
                                            name="google_client_secret" placeholder="ex: abcdefghijklmnopqrstuvwxyz">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- config social link --}}
                                <h4 class="text_xl mb-3">Link-uri sociale</h4>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="facebook_link">Link-ul către pagina de Facebook</label>
                                        <input type="url" class="form-control" id="facebook_link"
                                            name="facebook_link" placeholder="ex: https://www.facebook.com/yourpagename">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="instagram_link">Link-ul către contul de Instagram</label>
                                        <input type="url" class="form-control" id="instagram_link"
                                            name="instagram_link"
                                            placeholder="ex: https://www.instagram.com/yourusername">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <div class="form-group">
                                            <label for="twitter_link">Link-ul către contul de Twitter</label>
                                            <input type="url" class="form-control" id="twitter_link"
                                                name="twitter_link" placeholder="ex: https://twitter.com/yourusername">
                                            @error('NewPassword')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                {{-- stripe payments --}}
                                <h4 class="text_xl mb-3">Stripe Config</h4>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cheia publica Stripe</label>
                                        <input type="password" name="NewPassword" Value="">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cheia secreta Stripe</label>
                                        <input type="password" name="NewPassword" Value="">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>ID-ul contului Stripe</label>
                                        <input type="password" name="NewPassword" Value="">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Adresa webhook-ului</label>
                                        <input type="password" name="NewPassword" Value="">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 acprof_subbtn">
                                    <button type="submit" name="asss"
                                        class="default_btn rounded small">Salveaza</button>
                                    <button type="submit" name="Back"
                                        class="default_btn rounded small">Inapoi</button>
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
