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
                        <h4 class="text_xl mb-3">adaugare produs</h4>
                        <form action="{{ route('ChangePassword') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="name">Nume utilizator</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Introduceti numele utilizatorului">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="email">Adresa de email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Introduceti adresa de email a utilizatorului">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="phone">Telefon:</label>
                                        <input type="tel" id="phone" name="phone">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="county">Judet:</label>
                                        <input type="text" id="county" name="county">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="local">Localitate:</label>
                                        <input type="text" id="local" name="local">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="adress">Adresa:</label>
                                        <input type="text" id="adress" name="adress">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label for="password">Parola:</label>
                                        <input type="password" id="password" name="password">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label for="password_confirmation">Confirma parola:</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation">
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


        var myDropzone = new Dropzone("div#my-dropzone", {
            url: "/file/post",
            // mai multe setari ...
        });
    </script>
@endsection
