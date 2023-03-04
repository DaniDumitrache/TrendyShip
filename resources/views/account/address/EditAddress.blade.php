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
                        <h4 class="text_xl mb-3">Gestionati Adresa</h4>
                        @if (isset($address->user_id) && Auth::user()->id == $address->user_id)
                            <form action="{{ route('EditAddress') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="address_id" value="{{ $address->id }}">
                                    <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            <label>Nume Si Prenume</label>
                                            <input type="text" name="full_name" Value="{{ $address->full_name }}">
                                            @error('full_name')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            <label>Telefon</label>
                                            <input type="text" name="PhoneNumber" Value="{{ $address->phone_number }}">
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
                                            <input type="text" name="County" Value="{{ $address->county }}">
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
                                            <input type="text" name="city" Value="{{ $address->city }}">
                                            @error('city')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            <label>Adresa</label>
                                            <input type="text" name="Adress" Value="{{ $address->address_line_1 }}">
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
                                        <button type="submit" name="Back"
                                            class="default_btn rounded small">Inapoi</button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <div class="alert alert-info">
                                Ne pare rău, aceasta adresa nu este valabilă pentru contul dvs.
                                Vă rugăm să contactați suportul nostru pentru <a href="">asistență</a>.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
