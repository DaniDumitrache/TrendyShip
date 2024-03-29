@extends('layouts.body')
@section('content')
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                @include('layouts.headerAccount')
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="acorder_wrapper">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($Orders as $Order)
                            @php
                                $i++;
                            @endphp
                            <style>
                                .quantity {
                                    display: flex;
                                    justify-content: center;
                                }
                            </style>
                            <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                                <div class="prorder_img">
                                    @foreach ($ProductsData as $product)
                                        <div style="display: flex; flex-direction: column;">
                                            <img loading="lazy" src="{{ route('ProductImage', $product->MainImage) }}"
                                                alt="product">
                                            <div class="quantity">
                                                x
                                                @php
                                                    foreach (json_decode($Order->products, true) as $item) {
                                                        if ($item['id'] == $product->id) {
                                                            echo $item['quantity'];
                                                        }
                                                    }
                                                @endphp
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="prorder_btn">
                                    <a href="{{ route('OrderDetalis', str_replace('#', '', $Order->OrderId)) }}">View
                                        Order</a>
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
                                    <h5></h5>
                                    <p></p>
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
                        @if ($i == 0)
                            <div class="alert alert-danger" role="alert">
                                Nu aveti nicio comanda plasata, puteti plasa una <a href="{{ route('cart') }}">aici</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
