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
                                            <h4>Retururile mele</h4>
                                            <a href="">Adauga cerere noua de retur</a>
                                        </div>

                                        <div class="prfo_info_cont">
                                            <div class="row">
                                                <h2>Momentan nu ai cereri de retur</h2>
                                                <span>In cazul in care, indiferent de motiv, esti nemultumit de produsul primit, la eMAG poti returna produsul foarte simplu si usor completand <a href="">formularul de retur</a></span>
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
