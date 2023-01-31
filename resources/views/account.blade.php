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
                                        <div class="prof_info_title">
                                            <h4>Datele contului</h4>
                                            <a href="{{ route('ManageProfile') }}">Editează</a>
                                        </div>
                                        <div class="prfo_info_cont" style="display: flex;">
                                            <div>
                                                <a href="account.html" style="margin-right: 50px;">
                                                    <img loading="lazy" src="assets/images/avatar-2.png" alt="user">
                                                </a>
                                            </div>
                                            <style>
                                                .AccountDetalis p {
                                                    margin-bottom: 10px;
                                                }
                                            </style>
                                            <div style="font-size: 19px; font-weight:bold;" class="AccountDetalis">
                                                <p>Nume: {{ $Customer->name }}</p>
                                                <p>Email: {{ $Customer->email }}</p>
                                                <p>Telefon: {{ $Customer->Phone }}</p>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="prof_recent_order">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="prof_info_title">
                                        <h4>Activitatea mea</h4>
                                    </div>
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prfo_info_cont">
                                            <p>{{ $TotalOrders }} comenzi plasate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="prof_info_title">
                                        <h4></h4>
                                    </div>
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prfo_info_cont">
                                            <p>
                                                @empty(!session('favorite'))
                                                    @php echo count(session('favorite')) @endphp
                                                @else
                                                    0
                                                @endempty produse favorite
                                            </p>
                                            {{-- <p>2 review-uri adaugate</p> --}}
                                            <p>
                                                @empty(!session('cart'))
                                                    @php echo count(session('cart')) @endphp
                                                @else
                                                    0
                                                @endempty produse in cosul de cumparaturi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="prof_info_title">
                                        <h4></h4>
                                    </div>
                                    <div class="single_prof_info shadow_sm">
                                        <div class="prof_info_title">
                                            <h4>Adresele mele</h4>
                                            <a href="{{ route('ManageAdress') }}">Edit</a>
                                        </div>
                                        <div class="prfo_info_cont">
                                            <p>{{ auth()->user()->County }},{{ auth()->user()->Local }}</p>
                                            <p>{{ auth()->user()->adress }}</p>
                                            <p>{{ auth()->user()->Phone }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="prof_recent_order">
                            <h4>Comenzi Recente</h4>
                            @foreach ($RecentOrders as $Order)
                                <div class="single_prof_recorder">
                                    <div class="prorder_img">
                                        <img loading="lazy" src="assets/images/tv.png" alt="product">
                                        <img loading="lazy" src="assets/images/tv.png" alt="product">
                                    </div>
                                    <div class="prorder_btn">
                                        <a href="account-order-details.html">View Order</a>
                                    </div>
                                    <div class="prorder_txt prorder_odnumber">
                                        <h5>Order Number</h5>
                                        <p>{{ $Order->OrderId }}</p>
                                    </div>
                                    <div class="prorder_txt prorder_purchased">
                                        <h5>Purchased</h5>
                                        <p>{{ $Order->created_at }}</p>
                                    </div>
                                    <div class="prorder_txt prorder_qnty d-none d-sm-block">
                                        <h5>Quantity</h5>
                                        <p>x3</p>
                                    </div>
                                    <div class="prorder_txt prorder_total">
                                        <h5>Total</h5>
                                        <p>{{ $Order->Total }} RON</p>
                                    </div>
                                    <div class="prorder_txt prorder_status">
                                        <h5 class="d-none d-md-block">Status</h5>
                                        <h5 class="d-block d-md-none"><span
                                                class="me-2 d-inline-block d-sm-none font-normal text_xs">x3</span> $120
                                        </h5>
                                        <p class="text-color">Cancelled</p>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="single_prof_recorder">
                                <div class="prorder_img">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                </div>
                                <div class="prorder_btn">
                                    <a href="account-order-details.html">View Order</a>
                                </div>
                                <div class="prorder_txt prorder_odnumber">
                                    <h5>Order Number</h5>
                                    <p>23E34RT3</p>
                                </div>
                                <div class="prorder_txt prorder_purchased">
                                    <h5>Purchased</h5>
                                    <p>01 March 2021</p>
                                </div>
                                <div class="prorder_txt prorder_qnty d-none d-sm-block">
                                    <h5>Quantity</h5>
                                    <p>x3</p>
                                </div>
                                <div class="prorder_txt prorder_total">
                                    <h5>Total</h5>
                                    <p>$120</p>
                                </div>
                                <div class="prorder_txt prorder_status">
                                    <h5 class="d-none d-md-block">Status</h5>
                                    <h5 class="d-block d-md-none"><span
                                            class="me-2 d-inline-block d-sm-none font-normal text_xs">x3</span> $120</h5>
                                    <p class="text-green">Delivered</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
