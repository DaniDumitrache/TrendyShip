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
                        <form action="{{ route('CreateUsers') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="category">utilizator</label>
                                        <select class="form-control" id="Users" name="Users">
                                            <option value="">Alege o categorie</option>
                                            {{-- initialize array Alladmin --}}
                                            @php $Alladmin = []; @endphp

                                            {{-- Get all admins in array --}}
                                            @foreach ($admins as $admin)
                                                @php array_push($Alladmin, $admin->email); @endphp
                                            @endforeach
                                            {{-- Get all users and check if users is admin or not --}}
                                            @foreach ($users as $user)
                                                @if (!in_array($user->email, $Alladmin))
                                                    <option value="{{ $user->email }}">{{ $user->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('Users')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="category">grup</label>
                                        <select class="form-control" id="group" name="group">
                                            <option value="">Alege o categorie</option>
                                            @foreach ($groups as $group)
                                                <option value="{{ $group->group }}">{{ $group->group }}</option>
                                            @endforeach
                                        </select>
                                        @error('group')
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


        var myDropzone = new Dropzone("div#my-dropzone", {
            url: "/file/post",
            // mai multe setari ...
        });
    </script>
@endsection
