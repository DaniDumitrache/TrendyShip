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
                        <h4 class="text_xl mb-3">Stripe Config</h4>
                        <form action="{{ route('StripeSettings') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cheia publica Stripe</label>
                                        <input type="password" name="stripe_public_key"
                                            value="{{ $website_config->stripe_public_key }}">
                                        @error('stripe_public_key')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cheia secreta Stripe</label>
                                        <input type="password" name="stripe_secret_key"
                                            value="{{ $website_config->stripe_secret_key }}">
                                        @error('stripe_secret_key')
                                            {{-- <span class="invalid-feedback"> --}}
                                            {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>ID-ul contului Stripe</label>
                                        <input type="password" name="stripe_account_id"
                                            value="{{ $website_config->stripe_account_id }}">
                                        @error('stripe_account_id')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Adresa webhook-ului</label>
                                        <input type="password" name="webhook_url"
                                            value="{{ $website_config->webhook_url }}">
                                        @error('webhook_url')
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
