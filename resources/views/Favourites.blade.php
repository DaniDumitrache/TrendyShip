@extends('layouts.body')
@section('content')
    <!-- account -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">

                <!-- account content -->
                <div class="col-lg-9" style="height: 50vh;">
                    @empty(session('favorite'))
                        <style>
                            .FavoriteEmpty {
                                display: flex;
                                flex-direction: column;
                                gap: 10px;
                                justify-content: center;
                                width: 100%;
                                height: 100%;
                                text-align: center;
                            }
                        </style>
                        <div class="FavoriteEmpty">
                            <h2>
                                Hmm, niciun produs in lista ta.<br>
                                Uite niste recomandari care te-ar putea inspira.
                            </h2>
                            <span>
                                Adauga acum la Favorite si fa-ti liste dupa preferinte.

                                Le poti share-ui oricand cu prietenii si poti salva la Favorite produsele din cos ca sa le
                                cumperi
                                mai tarziu.
                            </span>
                            <a style="text-align: center;" class="default_btn" href="/">Vezi produse</a>
                        </div>
                    @endempty
                    <div class="shop_cart_wrap wishlist">
                        @foreach ($FavoriteProducts as $product)
                            <div class="single_shop_cart d-flex align-items-center flex-wrap mt-0">
                                <div class="cart_img mb-4 mb-md-0">
                                    <img loading="lazy" src="{{ route('ProductImage', $product->MainImage) }}"
                                        alt="product">
                                </div>
                                <div class="cart_cont">
                                    <a href="product-view.html">
                                        <h5>{{ $product->Title }}</h5>
                                    </a>
                                    @if ($product->stock >= 1)
                                        <p class="instock mb-0">Availability: <span>In Stock</span></p>
                                    @else
                                        <p class="instock mb-0">Availability: <span>0 Products in Stock</span></p>
                                    @endif
                                </div>

                                <div class="cart_price ms-md-auto ms-0">
                                    <p>{{ $product->price }} RON</p>
                                </div>
                                <div class="wish_cart_btn ms-md-auto ms-0 mt-3 mt-md-0">
                                    <a href="{{ route('AddToCart', $product->id) }}">
                                        <button class="list_product_btn"><span class="icon"><i
                                                    class="icon-cart"></i></span>
                                            Add
                                            to
                                            Cart</button>
                                    </a>
                                </div>
                                <div class="cart_remove ms-auto align-self-end align-self-md-center">
                                    <a href="{{ route('RemoveFromFavorite', $product->id) }}">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
