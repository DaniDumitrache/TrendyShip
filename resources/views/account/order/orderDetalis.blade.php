@extends('layouts.body')
@section('content')
    <!-- account wrapper -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include("layouts.headerAccount")
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="order_detail_wrapper shadow_sm">
                        <h4 class="od_title">Urmareste livrarea comenzii nr. {{ $Order->OrderId }}</h4>
                        <!-- order details -->
                        {{-- <div class="orderdet_info d-flex align-items-center justify-content-between flex-wrap">
                            <div class="single_orderdet">
                                <h5>Sold By</h5>
                                <p class="text-color">RAFCART</p>
                            </div>
                            <div class="single_orderdet">
                                <h5>numar comanda</h5>
                                <p>{{ $Order->OrderId }}</p>
                            </div>
                            <div class="single_orderdet">
                                <h5>Data expedierii</h5>
                                <p>{{ $Order->created_at }}</p>
                            </div>

                        </div> --}}

                        <!-- shipping address process -->
                        <div class="mt-4 pt-2 track_status">
                            <h4 class="title_3 text-uppercase">{{ $Order->OrderId }}</h4>
                            <div class="track_path">
                                <div class="single_track">
                                    <h5 class="text_lg">01. Comanda plasata</h5>
                                    <p class="mb-0 text_md">{{ $Order->created_at }}</p>
                                </div>
                                <div class="single_track pending">
                                    <h5 class="text_lg">02. Produse predate curierului</h5>
                                    <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                                </div>
                                <div class="single_track pending">
                                    <h5 class="text_lg">03. Produse in depozitul curierului</h5>
                                    <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                                </div>
                                <div class="single_track pending">
                                    <h5 class="text_lg">04.Produse in curs de livrare</h5>
                                    <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                                </div>
                                <div class="single_track pending">
                                    <h5 class="text_lg">05. Produse livrate</h5>
                                    <p class="mb-0 text_md">30 january, 2021, 8:37 AM</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="shipping_process">

                            <div class="sprocess_cont">
                                <div class="sprosbar">
                                    <span class="sp_fill"></span>
                                </div>

                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot gray"></div>
                                    <p>Comanda plasata</p>
                                </div>
                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Produse predate curierului</p>
                                </div>
                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Produse in curs de livrare</p>
                                </div>
                                <div class="single_sproc_cont">
                                    <div class="sproc_cont_dot"></div>
                                    <p>Produse livrate</p>
                                </div>
                            </div>
                            <style>
                                .sprocess_tooltip{
                                    position: initial;
                                }
                            </style>
                            <div class="sprocess_tooltip shadow_sm">
                                <p>23 Jul 2021.18.56</p>
                                <p>Comanda Dvs Este In Curs De Livrare</p>
                            </div>
                            <div class="sprocess_tooltip shadow_sm">
                                <p>23 Jul 2021.18.56</p>
                                <p>Comanda Dvs Este In Curs De Livrare</p>
                            </div>
                            <div class="sprocess_tooltip shadow_sm">
                                <p>23 Jul 2021.18.56</p>
                                <p>Comanda Dvs Este In Curs De Livrare</p>
                            </div>
                            
                            <div class="sprocess_tooltip shadow_sm">
                                <p>23 Jul 2021.18.56</p>
                                <p>Comanda Dvs Este In Curs De Livrare</p>
                            </div>
                        </div> --}}

                        @foreach ($Products as $Product)
                            <!-- product details -->
                            <div class="order_prodetails d-flex align-items-center flex-wrap">
                                <div class="orderprod_img">
                                    <img loading="lazy" src="assets/images/headphone-3.png" alt="product">
                                </div>
                                <div class="single_orderdet pdname">
                                    <h5>{{ $Product->Title }}</h5>
                                    {{-- <p>No Warranty Available</p> --}}
                                </div>
                                <div class="single_orderdet w-xs-33 ms-md-auto ms-0 mt-3 mt-md-0">
                                    <h5>{{ $Product->price }} RON</h5>
                                </div>
                                {{-- <div class="single_orderdet w-xs-33 ms-auto mt-3 mt-md-0">
                                    <h5>Qty:1</h5>
                                </div> --}}
                                {{-- <div class="single_orderdet w-xs-33 ms-auto d-flex align-items-center d-md-block mt-3 mt-md-0">
                                                        <h5 class="text-color text-uppercase me-3 me-md-0 mb-0 mb-md-1"> <a
                                                                href="account-return-details.html">Return</a> </h5>
                                                        <p>Until 24Sep 2021</p>
                                                    </div> --}}
                            </div>
                        @endforeach

                    </div>

                    <div class="profile_info_wrap mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_prof_info shadow_sm">
                                    <div class="prof_info_title">
                                        <h4>Billing Address</h4>
                                    </div>
                                    <div class="prfo_info_cont">
                                        <p class="text-semibold">{{ Auth::user()->name }}</p>
                                        <p>{{ $Order->adress }}</p>
                                        <p>{{ $Order->County }}, {{ $Order->local }}</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single_prof_info shadow_sm mb-0">
                                    <div class="prof_info_title">
                                        <h4>Total Summary</h4>
                                    </div>
                                    <div class="prfo_info_cont">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0">Subtotal</p>
                                            <p class="text-semibold mb-0">{{ $Order->SubTotal }} RON</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class=" mb-0">Shipping Fee</p>
                                            <p class="text-semibold mb-0">{{ $Order->Delivery }} RON</p>
                                        </div>
                                        <hr class="my-2">
                                        <div class="d-flex justify-content-between">
                                            <p class="text-semibold mb-0">Total</p>
                                            <p class="text-semibold mb-0">{{ $Order->Total }} RON</p>
                                        </div>
                                        {{-- <div class="d-flex justify-content-between">
                                            <p>Paid by Cash on Delivery</p>
                                        </div> --}}
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
