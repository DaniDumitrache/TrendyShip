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
                        <h4 class="text_xl mb-3">Setări de autentificare Google</h4>
                        <form action="{{ route('GoogleLoginSettings') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="google_client_id">Google Client ID</label>
                                        <input type="text" class="form-control" id="google_client_id"
                                            name="google_client_id" value="{{ $website_config->google_client_id }}"
                                            placeholder="ex: 1234567890abcdefghijklmnopqrstuvwxyz.apps.googleusercontent.com">
                                        @error('google_client_id')
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
                                            name="google_client_secret" value="{{ $website_config->google_client_secret }}"
                                            placeholder="ex: abcdefghijklmnopqrstuvwxyz">
                                        @error('google_client_secret')
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
