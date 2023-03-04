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
                        <form action="{{ route('CreateProduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="name">Nume produs</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Introduceti numele produsului">
                                        @error('name')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="category">Categoria produsului</label>
                                        <select class="form-control" id="category" name="category">
                                            <option value="">Alege o categorie</option>
                                            <option value="1}">danid</option>
                                        </select>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label for="description">Descriere produs</label>
                                        <textarea style="min-height: 200px;" class="form-control" id="description" name="description"
                                            placeholder="Introduceti o descriere a produsului"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="price">Pret produs</label>
                                        <input type="number" class="form-control" id="price" name="price"
                                            placeholder="Introduceti pretul produsului">
                                        @error('price')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="stock">Stoc disponibil</label>
                                        <input type="number" class="form-control" id="stock" name="stock"
                                            placeholder="Introduceti numarul de produse disponibile in stoc">
                                        @error('stock')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            <label for="features">Caracteristici specifice</label>
                                            <textarea style="min-height: 200px;" class="form-control" id="features" name="features"
                                                placeholder="Introduceti caracteristici specifice ale produsului"></textarea>



                                        </div>
                                    </div> --}}


                                {{-- Upload Images Product --}}
                                <div class="row">
                                    <style>
                                        .filepond--credits {
                                            display: none !important;
                                        }

                                        .filepond--file-info {
                                            display: none !important;
                                        }

                                        .filepond--file-action-button {}

                                        .filepond--image-preview-overlay-success {
                                            display: none;
                                        }
                                    </style>
                                    <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            <label for="features">imaginea principala</label>
                                            <input type="file" name="MainImage" id="MainImage">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <label for="features">galerie produs</label>
                                            <input type="file" id="image1" name="image1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <label for="features" style="visibility:hidden;">.</label>
                                            <input type="file" id="image2" name="image2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image3" name="image3">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image4" name="image4">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image5" name="image5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image6" name="image6">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image7" name="image7">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_billing_inp">
                                            <input type="file" id="image8" name="image8">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_billing_inp">
                                            @error('ProductGlaery')
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
                                    <button type="submit" name="Back"
                                        class="default_btn rounded small">Inapoi</button>
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
        $('#languages').niceSelect();

        FilePond.registerPlugin(FilePondPluginImagePreview);

        // 
        FilePond.create(document.querySelector('input[id="MainImage"]'));
        FilePond.create(document.querySelector('input[id="image1"]'));
        FilePond.create(document.querySelector('input[id="image2"]'));
        FilePond.create(document.querySelector('input[id="image3"]'));
        FilePond.create(document.querySelector('input[id="image4"]'));
        FilePond.create(document.querySelector('input[id="image5"]'));
        FilePond.create(document.querySelector('input[id="image6"]'));
        FilePond.create(document.querySelector('input[id="image7"]'));
        FilePond.create(document.querySelector('input[id="image8"]'));

        FilePond.setOptions({
            server: {
                url: '/upload/image',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        });
    </script>
@endsection
