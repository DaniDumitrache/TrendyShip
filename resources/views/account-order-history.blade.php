@extends('layouts.body')
@section('content')
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include("layouts.headerAccount")
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="acorder_wrapper">
                        @foreach ($Orders as $Order)
                            <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                                <div class="prorder_img">
                                    <img loading="lazy" src="assets/images/tv.png" alt="product">
                                    <img loading="lazy" src="assets/images/tv.png" alt="product">
                                </div>
                                <div class="prorder_btn">
                                    <a href="/order/{{ str_replace('#', '', $Order->OrderId) }}">View Order</a>
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
                                    <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                                    <p class="text-color">Cancelled</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
