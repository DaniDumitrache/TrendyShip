@extends('layouts.body')

@section('content')
    <!-- shopping cart -->
    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop_cart_wrap">
                        @empty(!$CartProducts)
                            @foreach ($CartProducts as $Product)
                                <div class="single_shop_cart d-flex align-items-center flex-wrap">
                                    <div class="cart_img mb-4 mb-md-0">
                                        <img loading="lazy" src="assets/images/headphone-4.png" alt="product">
                                    </div>
                                    <div class="cart_cont">
                                        <a href="product-view.html">
                                            <h5>{{ $Product->Title }}</h5>
                                        </a>
                                        {{-- <p class="size mb-0">Size: M</p> --}}
                                    </div>
                                    <div class="cart_qnty d-flex align-items-center ms-md-auto">
                                        <div class="cart_qnty_btn">
                                            <i class="las la-minus"></i>
                                        </div>
                                        <div class="cart_count">4</div>
                                        <div class="cart_qnty_btn">
                                            <i class="las la-plus"></i>
                                        </div>
                                    </div>
                                    <div class="cart_price ms-auto">
                                        <p>{{ $Product->price }} RON</p>
                                    </div>
                                    <div class="cart_remove ms-auto">
                                        <i class="icon-trash"></i>
                                    </div>
                                </div>
                            @endforeach
                        @endempty
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <div class="cart_summary">
                        <h4>Order Summary</h4>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="text-semibold">Subtotal</p>
                            <p class="text-semibold">{{ $OrderData['SubTotal'] }} RON</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p>Livrare</p>
                            <p>
                                @if ($OrderData['SubTotal'] >= 200)
                                    Gratuita
                                @else
                                    {{ $OrderData['Delivery'] }} RON
                                @endif
                            </p>
                        </div>
                        <div class="cart_sum_total d-flex justify-content-between">
                            <p>Total</p>
                            <p>{{ $OrderData['Total'] }} RON</p>
                        </div>
                        <div class="cart_sum_coupon">
                            <input type="text" placeholder="Enter coupon">
                            <button>apply</button>
                        </div>
                        <div class="cart_sum_pros">
                            <button>Proccees to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
