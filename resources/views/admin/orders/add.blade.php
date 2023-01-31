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
                        <h4 class="text_xl mb-3">adaugare comenzi</h4>
                        <form action="{{ route('ChangePassword') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="OrderId">Numarul comenzii:</label>
                                        <input type="text" class="form-control" id="OrderId" name="OrderId" required>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <select multiple class="form-control" id="products" name="products[]">
                                            {{-- @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach --}}
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
                                        <label for="FullName">Nume complet:</label>
                                        <input type="text" class="form-control" id="FullName" name="FullName" required>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="PhoneNumber">Numarul de telefon:</label>
                                        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber"
                                            required>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="County">Judet:</label>
                                        <input type="text" class="form-control" id="County" name="County" required>
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
                                        <input type="text" class="form-control" id="local" name="local" required>
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
                                        <input type="text" class="form-control" id="adress" name="adress" required>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="DeliveryCost">Costul livrarii:</label>
                                        <input type="text" class="form-control" id="DeliveryCost" name="DeliveryCost"
                                            required>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="Total">Total:</label>
                                        <input type="text" class="form-control" id="Total" name="Total" required>
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
        $('#products').select2();


        var myDropzone = new Dropzone("div#my-dropzone", {
            url: "/file/post",
            // mai multe setari ...
        });
    </script>
@endsection
