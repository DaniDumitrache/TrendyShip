@extends('layouts.body')
@section('content')
    <!-- account wrapper -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include('layouts.headerAccount')
                <!-- account content -->
                <div class="col-lg-12">
                    <div class="acprof_info_wrap shadow_sm">
                        <h4 class="text_xl mb-3">Gestionati Adresa</h4>
                        <form action="ManageAdress" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Nume Si Prenume</label>
                                        <input type="text" name="LastNameAndFirstName"
                                            Value="{{ auth()->user()->name }}">
                                        @error('LastNameAndFirstName')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Telefon</label>
                                        <input type="text" name="PhoneNumber" Value="{{ auth()->user()->Phone }}">
                                        @error('PhoneNumber')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Judet</label>
                                        <input type="text" name="County" Value="{{ auth()->user()->County }}">
                                        @error('County')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Localitate </label>
                                        <input type="text" name="local" Value="{{ auth()->user()->Local }}">
                                        @error('local')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Adresa</label>
                                        <input type="text" name="Adress" Value="{{ auth()->user()->adress }}">
                                        @error('Adress')
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
@endsection
