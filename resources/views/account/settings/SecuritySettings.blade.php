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
                                            <h4>Setări siguranță</h4>
                                        </div>
                                        <style>
                                            .prfo_info_cont ul li {
                                                display: flex;
                                                justify-content: space-between;
                                                border-bottom: 1px dotted gray;
                                                padding: 20px 0px;
                                            }

                                            .prfo_info_cont ul li .info {
                                                display: flex;
                                                align-items: center;
                                                gap: 20px;
                                            }


                                            .prfo_info_cont ul li .info i {
                                                font-size: 40px;
                                                color: #fd3d57;
                                            }

                                            .prfo_info_cont ul li .info div h2 {
                                                font-size: 16px;
                                            }

                                            .prfo_info_cont ul li .info div {
                                                max-width: 70%;
                                            }

                                            .prfo_info_cont ul li .info div span {
                                                font-size: 14px;
                                            }

                                            .prfo_info_cont ul li .action {
                                                display: flex;
                                                align-items: center;
                                            }
                                        </style>
                                        <form action="{{ route('ActionSafeSetings') }}" method="POST">
                                            @csrf
                                            <div class="prfo_info_cont">
                                                <ul>
                                                    <li>
                                                        <div class="info">
                                                            <i class="bi bi-at"></i>
                                                            <div>
                                                                <h2>Adresa de e-mail</h2>
                                                                <span class="text-gray">Adresa de email
                                                                    actuală a contului tău este
                                                                    {{ Auth::user()->email }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="default_btn" value="1"
                                                                name="Email">modifică</button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="info">
                                                            <i class="bi bi-lock-fill"></i>
                                                            <div>
                                                                <h2>Parola</h2>
                                                                <span class="text-gray">Este o idee bună să folosești o
                                                                    parolă
                                                                    puternică pe care nu o mai folosești și în altă
                                                                    parte</span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="default_btn" value="1"
                                                                name="Password">modifică</button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="info">
                                                            <i class="bi bi-shield-fill-check"></i>
                                                            <div>
                                                                <h2>Autentificare multi-factor</h2>
                                                                <span class="text-gray">Adaugă o protecție suplimentară
                                                                    contului
                                                                    tău {{ $website_config->site_name }} folosind un cod de
                                                                    autentificare primit prin SMS.
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <button class="default_btn" value="1"
                                                                name="MultiFactorAuthentication">modifică</button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="info">
                                                            <i class="bi bi-pc-display"></i>
                                                            <div>
                                                                <h2>Dispozitivele mele</h2>
                                                                <span class="text-gray">Ești autentificat in contul tău
                                                                    {{ $website_config->site_name }}
                                                                    pe
                                                                    următoarele dispozitive
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="action">

                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
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
