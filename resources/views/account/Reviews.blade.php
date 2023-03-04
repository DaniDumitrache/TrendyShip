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
                                            <h4>Review-urile mele</h4>
                                        </div>

                                        <div class="prfo_info_cont">
                                            <div class="row">
                                                <h2>Nu ai niciun review</h2>
                                                <span>Adauga acum un review pentru a-ti share-ui parerea cu alti utilizatori</a></span>
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
