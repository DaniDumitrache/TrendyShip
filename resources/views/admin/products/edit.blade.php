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
                                        <label for="name">Nume produs</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Introduceti numele produsului">
                                        @error('NewPassword')
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
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="price">Pret produs</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                            placeholder="Introduceti pretul produsului">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="stock">Stoc disponibil</label>
                                        <input type="text" class="form-control" id="stock" name="stock"
                                            placeholder="Introduceti numarul de produse disponibile in stoc">
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label for="features">Caracteristici specifice</label>
                                        <textarea style="min-height: 200px;" class="form-control" id="features" name="features"
                                            placeholder="Introduceti caracteristici specifice ale produsului"></textarea>
                                        @error('NewPassword')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div action="{{ route('ChangePassword') }}" class="dropzone" method="POST">
                                    <label for="price">PImagine produs</label>
                                    <div id="my-dropzone"></div>
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
