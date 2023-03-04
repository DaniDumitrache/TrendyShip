@extends('layouts.body')
@section('content')
    <!-- account -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include('layouts.headerAccount')
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="account_cont_wrap shadow_sm">
                        <div class="profile_info_wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title" style="border-bottom: 1px solid gray;">
                                            <h4>Adresele mele</h4>
                                            <a href="{{ route('AddAdress') }}">Adauga adresa</a>
                                        </div>

                                        <div class="prfo_info_cont">
                                            <div class="row">
                                                <style>
                                                    .single_prof_info {
                                                        margin-bottom: 15px;
                                                    }
                                                </style>
                                                @php $i=0; @endphp
                                                @foreach ($addresses as $address)
                                                    @php $i++; @endphp
                                                    <div class="col-lg-6">
                                                        <div class="single_prof_info shadow-lg"
                                                            style="border-radius: 10px; display:flex; flex-direction:column; justify-content: space-between;">
                                                            <div class="prfo_info_cont">
                                                                <p>{{ $address->full_name }} - {{ $address->phone_number }}
                                                                </p>
                                                                <p>{{ $address->address_line_1 }} - {{ $address->city }},
                                                                    {{ $address->county }}</p>
                                                            </div>
                                                            <div style="display:flex; justify-content: center;">
                                                                <a
                                                                    href="{{ route('EditAdress', $address->id) }}">Editează</a>
                                                                <a href="{{ route('DeleteAddress', $address->id) }}"
                                                                    style="margin-left: 10px;">sterge</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @if ($i == 0)
                                                    <div class="alert alert-info">
                                                        Nu ai adaugat nicio adresa pana acum.
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
