@extends('layouts.body')
@section('content')
    <!-- account wrapper -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <!-- account content -->
                <div class="col-lg-12">
                    <div class="acprof_info_wrap shadow_sm">
                        <h4 class="text_xl mb-3">Gestionati Profilul Personal</h4>
                        <form action="ManageProfile" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Nume Si Prenume</label>
                                        <input type="text" name="name"
                                            Value="{{ auth()->user()->name }}">
                                        @error('name')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Email</label>
                                        <input type="email" name="Email" Value="{{ auth()->user()->email }}">
                                        @error('Email')
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