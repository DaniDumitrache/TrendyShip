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
                        <form action="{{ route('CreateGroup') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="single_billing_inp">
                                        <label for="name">Nume grup</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Introduceti numele utilizatorului">
                                        @error('name')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <style>
                                    .box .box-body .list-group li {
                                        margin-top: 10px;
                                        border: 1px solid #E9E4E4;
                                    }

                                    .box {
                                        border: 1px solid #E9E4E4;
                                    }

                                    .list-group {
                                        border: 1px solid #E9E4E4;
                                        padding: 15px;
                                    }
                                </style>
                                <div class="col-lg-12 col-12 ">
                                    <label for="name">Permisiuni grup</label>
                                    <div class="box">
                                        <div class="box-body">
                                            <ul class="list-group" style="overflow-y: scroll; height: 250px;">
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminCustomers"
                                                                style="margin-right: 10px;">admin/customers
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminUsers"
                                                                style="margin-right: 10px;">admin/users
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminOrders"
                                                                style="margin-right: 10px;">admin/orders
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminGroup"
                                                                style="margin-right: 10px;">admin/group
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminCategory"
                                                                style="margin-right: 10px;">admin/Category
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <input type="checkbox" name="adminProducts"
                                                                style="margin-right: 10px;">admin/products
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
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
        $('#languages').niceSelect()


        var myDropzone = new Dropzone("div#my-dropzone", {
            url: "/file/post",
            // mai multe setari ...
        });
    </script>
@endsection
