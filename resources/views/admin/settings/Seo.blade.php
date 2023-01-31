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
                        <h4 class="text_xl mb-3">Seo</h4>
                        <form action="{{ route('SeoSettings') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Titlu meta</label>
                                        <input type="text" name="meta_title" value="{{ $website_config->meta_title }}"
                                            placeholder="Titlu meta">
                                        @error('meta_title')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label>Cuvinte cheie meta</label>
                                        <input type="text" name="meta_keywords"
                                            value="{{ $website_config->meta_keywords }}" placeholder="Cuvinte cheie meta">
                                        @error('meta_keywords')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label>Descriere meta</label>
                                        <textarea style="max-height: 400px; min-height: 250px;" type="text" name="meta_description" rows="3" placeholder="Descriere meta">{{ $website_config->meta_description }}</textarea>
                                        @error('meta_description')
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
