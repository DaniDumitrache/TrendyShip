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
                                            <h4>Garanțiile mele</h4>
                                            <span>0 produse</span>
                                        </div>

                                        <div class="prfo_info_cont">
                                            <div class="row">
                                                <h2>Nu ai niciun produs cumparat</h2>
                                                <span>În această zonă vei putea verifica când expiră garanția standard a
                                                    produselor cumpărate de pe eMAG.ro de-a lungul timpului.</span>
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
