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
                        <h4 class="text_xl mb-3">Configurare server e-mail</h4>
                        <form action="{{ route('SmtpSettings') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="email_server">Serverul de e-mail</label>
                                        <input type="text" class="form-control" id="email_server" name="email_server"
                                            value="{{ $website_config->email_server }}" placeholder="ex: smtp.example.com">
                                        @error('email_server')
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
                                            value="{{ $website_config->email_sender }}"
                                            placeholder="ex: no-reply@example.com">
                                        @error('sender_email')
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
                                            value="{{ $website_config->sender_name }}" placeholder="ex: Echipa Example">
                                        @error('sender_name')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="email_authentication">Autentificare la serverul de e-mail</label>
                                        <select class="form-control" id="email_authentication" name="email_authentication">
                                            @if ($website_config->email_authentication == true)
                                                <option value="1">Necesara</option>
                                                <option value="0">Nu este necesara</option>
                                            @else
                                                <option value="0">Nu este necesara</option>
                                                <option value="1">Necesara</option>
                                            @endif
                                        </select>
                                        @error('email_authentication')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
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
