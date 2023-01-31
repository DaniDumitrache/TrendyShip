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

                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>email</th>
                                                <th>group</th>
                                                <th>actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user['email'] }}</td>
                                                    <td>{{ $user['group'] }}</td>
                                                    @if (Auth::user()->email != $user['email'])
                                                        <td>
                                                            <a class="btn btn-success"
                                                                href="{{ route('admin/users/edit', $user['user_id']) }}">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <a class="btn btn-success"
                                                                href="{{ route('admin/users/edit', $user['user_id']) }}">
                                                                <i class="bi bi-x-lg"></i>
                                                            </a>
                                                        </td>
                                                    @else
                                                        <td></td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
