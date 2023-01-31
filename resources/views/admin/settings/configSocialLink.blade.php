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
                        <h4 class="text_xl mb-3">Link-uri sociale</h4>
                        <form action="{{ route('ChangePassword') }}" method="POST">
                            @csrf
                            <div class="row">
                                @include('layouts.settings.Navigation')

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="facebook_link">Link-ul către pagina de Facebook</label>
                                        <input type="url" class="form-control" id="facebook_link" name="facebook_link"
                                            placeholder="ex: https://www.facebook.com/yourpagename">
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
                                        <input type="url" class="form-control" id="instagram_link" name="instagram_link"
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
                                            <input type="url" class="form-control" id="twitter_link" name="twitter_link"
                                                placeholder="ex: https://twitter.com/yourusername">
                                            @error('NewPassword')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
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
