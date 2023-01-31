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
                        <form action="{{ route('EditUsers', $user->email) }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="single_billing_inp">
                                        <label for="category">utilizator</label>
                                        <select disabled class="form-control" id="User" name="User">
                                            <option value="{{ $user->email }}">{{ $user->name }}</option>
                                        </select>
                                        @error('User')
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
                                            <option value="{{ $admin->group }}">{{ $admin->group }}</option>
                                            @foreach ($groups as $group)
                                                @if ($admin->group != $group->group)
                                                    <option value="{{ $group->group }}">{{ $group->group }}</option>
                                                @endif
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
                                    @if (Auth::user()->email != $user->email)
                                        <button type="submit" name="asss"
                                            class="default_btn rounded small">Salveaza</button>
                                    @endif
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
