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
                        <form action="{{ route('GoogleAdWordsSettings') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="api_key">Cheie API Google AdWords:</label>
                                        <input type="text" id="api_key"
                                            value="{{ $website_config->google_adwords_api_key }}" name="api_key">
                                        @error('api_key')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="product_category">Selectati categoria produselor:</label>
                                        <select id="product_category" name="product_category">
                                            <option value="">{{ $website_config->product_category }}</option>
                                            <option value="category1">Category 1</option>
                                            <option value="category2">Category 2</option>
                                            <option value="category3">Category 3</option>
                                        </select>
                                        @error('product_category')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="search_term">Cautati termen:</label>
                                        <input type="text" id="search_term" name="search_term"
                                            value="{{ $website_config->search_term }}">
                                        @error('search_term')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="budget">Buget:</label>
                                        <input type="number" id="budget" name="budget"
                                            value="{{ $website_config->budget }}">
                                        @error('budget')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="campaign_duration">Durata campaniei:</label>
                                        <input type="number" id="campaign_duration" name="campaign_duration"
                                            value="{{ $website_config->campaign_duration }}">
                                        @error('campaign_duration')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 acprof_subbtn">
                                    <button type="submit" name="asss"
                                        class="default_btn rounded small">Salveaza</button>
                                    <button type="submit" name="Back" class="default_btn rounded small">Trimite la
                                        Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#product_category').niceSelect();
    </script>
@endsection
