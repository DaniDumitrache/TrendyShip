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
                        <form action="{{ route('WebsiteSettings') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Numele Siteului</label>
                                        <input type="text" name="SiteName" value="{{ $website_config->site_name }}">
                                        @error('SiteName')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Mod mentenanta</label>
                                        <select id="maintenance" name="maintenance">
                                            @if ($website_config->maintenance_mode == true)
                                                <option value="on">Activ</option>
                                                <option value="off">Inactiv</option>
                                            @else
                                                <option value="off">Inactiv</option>
                                                <option value="on">Activ</option>
                                            @endif
                                        </select>
                                        @error('maintenance')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                @php $payments_method = explode(',', $website_config->payment_methods); @endphp
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Modalitati plata</label>
                                        <select style="width: 100%;" multiple id="PaymentsMethod" name="PaymentsMethod[]">
                                            <option @if (is_int(array_search('credit_card', $payments_method))) selected @endif value="credit_card">
                                                Card de credit</option>
                                            <option @if (is_int(array_search('bank_transfer', $payments_method))) selected @endif value="bank_transfer">
                                                Transfer bancar</option>
                                            <option @if (is_int(array_search('paypal', $payments_method))) selected @endif value="paypal">Paypal
                                            </option>
                                            <option @if (is_int(array_search('cash_on_delivery', $payments_method))) selected @endif
                                                value="cash_on_delivery">Plata la livrare</option>
                                        </select>
                                        @error('PaymentsMethod')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Moneda</label>
                                        <select id="currency" name="currency" disabled>
                                            @if ($website_config->currency == 'RON')
                                                <option value="RON">RON</option>
                                                <option value="EUR">EUR</option>
                                            @else
                                                <option value="EUR">EUR</option>
                                                <option value="RON">RON</option>
                                            @endif
                                        </select>
                                        @error('currency')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Limba</label>
                                        <select id="languages" name="languages" disabled>
                                            @if ($website_config->language == 'RO')
                                                <option value="RO">Romana</option>
                                                <option value="EN">engleza</option>
                                            @else
                                                <option value="EN">engleza</option>
                                                <option value="RO">Romana</option>
                                            @endif
                                        </select>
                                        @error('languages')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Taxa de livrare</label>
                                        <input type="number" max="100" value="{{ $website_config->delivery_fee }}"
                                            name="delivery_fee">
                                        @error('delivery_fee')
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
        $('#maintenance').niceSelect();
        $('#PaymentsMethod').select2();
        $('#currency').niceSelect();
        $('#languages').niceSelect()
    </script>
@endsection
