@extends('layouts.body')

@section('content')
    <!-- shopping cart -->

    <div class="cart_area section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop_cart_wrap">
                        @empty(session('cart'))
                            <div class="alert alert-danger" role="alert">
                                Cosul Tau De Cumparaturi Este Gol
                            </div>
                        @endempty
                        @foreach ($CartProducts as $Product)
                            @if ($Product->stock <= 0)
                                <div class="alert alert-danger" role="alert">
                                    Nu avem in stoc unul sau mai multe dintre produsele pe care le aveti in cosul de
                                    cumparaturi, ne pare rau!
                                </div>
                            @endif
                            <div class="single_shop_cart d-flex align-items-center flex-wrap">
                                <div class="cart_img mb-4 mb-md-0">
                                    <img loading="lazy" src="assets/images/headphone-4.png" alt="product">
                                </div>
                                <style>
                                    @media (max-width: 777px) {
                                        .title {
                                            text-align: center
                                        }

                                        .stock-zero {
                                            display: flex;
                                            width: 100%;
                                            justify-content: center
                                        }
                                    }
                                </style>
                                <div class="cart_cont">
                                    <a
                                        href="@php echo implode('-', explode(' ', $Product->Title)).'/'. $Product->id @endphp">
                                        <h5 class="title">{{ $Product->Title }}</h5>
                                    </a>
                                    {{-- <p class="size mb-0">Size: M</p> --}}
                                </div>
                                @if ($Product->stock >= 1)
                                    <div class="cart_qnty d-flex align-items-center ms-md-auto">
                                        <a href="{{ route('RemoveQuantity', $Product->id) }}">
                                            <div class="cart_qnty_btn">
                                                <i class="bi bi-dash"></i>
                                            </div>
                                        </a>
                                        <div class="cart_count">@php
                                            foreach (session('cart') as $item) {
                                                if ($item['id'] == $Product->id) {
                                                    echo $item['quantity'];
                                                }
                                            }
                                        @endphp</div>
                                        <a href="{{ route('AddQuantity', $Product->id) }}">
                                            <div class="cart_qnty_btn">
                                                <i class="bi bi-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="cart_price ms-auto">
                                        <p>{{ $Product->price }} RON</p>
                                    </div>
                                    <div></div>

                                    <div class="cart_remove ms-auto" style="margin-left: 10px;">
                                        <a href="{{ route('RemoveFromCart', $Product->id) }}">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                @else
                                    <div class="cart_price stock-zero">
                                        <a href="/MoveToFavorite/{{ $Product->id }}">Muta in Favorite</a>
                                        <a href="/RemoveToCart/{{ $Product->id }}" style="margin-left: 10px">sterge</a>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <div class="cart_summary">
                        <h4>Sumar comanda</h4>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p class="text-semibold">Cost produse</p>
                            <p class="text-semibold">{{ $OrderData['ProductCost'] }} RON</p>
                        </div>
                        <div class="cartsum_text d-flex justify-content-between">
                            <p>Cost livrare:</p>
                            <p>
                                @if ($OrderData['ProductCost'] >= 200)
                                    Gratuita
                                @else
                                    {{ $OrderData['DeliveryCost'] }} RON
                                @endif
                            </p>
                        </div>
                        @if (session('cupon'))
                            <div class="cartsum_text d-flex justify-content-between">
                                <p>cupon de reducere:</p>
                                <p
                                    style="    
                            padding: 1px 10px;
                            background: #ED0020;
                            border-radius: 5px 0 5px 0;
                            color: #fff;
                            font-size: 15px;
                            font-weight: 500;
                            z-index: 2;">
                                    -{{ $Cupon }}%</p>
                            </div>
                        @endif
                        <div class="cart_sum_total d-flex justify-content-between">
                            <p>Total</p>
                            <p>{{ $OrderData['Total'] }} RON</p>
                        </div>
                        <form action="/PaymentCupon" method="POST">
                            @csrf
                            <div class="cart_sum_coupon">
                                <input type="text" class="@error('Cupon') is-invalid @enderror" name="Cupon"
                                    placeholder="Enter coupon">
                                <button type="submit">aplica</button>
                            </div>
                            @error('Cupon')
                                <span style="width:100%; display:block;" class="invalid-feedback">
                                    {{ $message }}
                                </span>
                            @enderror
                        </form>

                        <div class="cart_sum_pros">
                            <a href="{{ route('Checkout') }}"><button>Proccees to checkout</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
