@extends('layouts.body')

@section('content')
    <!-- shop list view -->
    <div class="shop_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 position-relative">
                    <div class="filter_box py-3 px-3 shadow_sm">
                        <div class="close_filter d-block d-lg-none"><i class="las la-times"></i></div>
                        <div class="shop_filter d-block d-sm-none">
                            <h4 class="filter_title">Sort by</h4>
                            <div class="sorting_filter mb-2">
                                <select class="nice_select">
                                    <option value="">Default sorting</option>
                                    <option value="">Price low-high</option>
                                    <option value="">Price high-low</option>
                                </select>
                            </div>
                        </div>

                        <div class="shop_filter">
                            <h4 class="filter_title">Categories</h4>
                            <div class="filter_list">
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="cat-women" checked>
                                    <label for="cat-women">Women</label>
                                    <p class="mb-0 ms-auto">(16)</p>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="cat-men">
                                    <label for="cat-men">Men</label>
                                    <p class="mb-0 ms-auto">(9)</p>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="cat-shoes">
                                    <label for="cat-shoes">Shoes</label>
                                    <p class="mb-0 ms-auto">(19)</p>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="cat-computer">
                                    <label for="cat-computer">Computer</label>
                                    <p class="mb-0 ms-auto">(35)</p>
                                </div>
                            </div>
                        </div>
                        <div class="shop_filter">
                            <h4 class="filter_title">Brands</h4>
                            <div class="filter_list">
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="bnd-adidas" checked>
                                    <label for="bnd-adidas">Adidas</label>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="bnd-nike">
                                    <label for="bnd-nike">Nike</label>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="bnd-easy">
                                    <label for="bnd-easy">Easy</label>
                                </div>
                                <div class="custom_check d-flex align-items-center">
                                    <input type="checkbox" class="check_inp" hidden id="bnd-arong">
                                    <label for="bnd-arong">Arong</label>
                                </div>
                            </div>
                        </div>
                        <div class="shop_filter">
                            <h4 class="filter_title">Price</h4>
                            <div class="price-range-slider">
                                <div id="slider-range" class="range-bar"></div>
                                <p class="range-value">
                                    <input type="text" id="amount" readonly>
                                </p>
                            </div>
                        </div>
                        <div class="shop_filter">
                            <h4 class="filter_title">Size</h4>
                            <div class="size_selector d-flex">
                                <div class="single_size_opt">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-xs">
                                    <label for="size-xs">XS</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-s">
                                    <label for="size-s">S</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-m" checked>
                                    <label for="size-m">M</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-l">
                                    <label for="size-l">L</label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="size" class="size_inp" id="size-xl">
                                    <label for="size-xl">XL</label>
                                </div>
                            </div>
                        </div>
                        <div class="shop_filter border-bottom-0 pb-0 mb-0">
                            <h4 class="filter_title">Color</h4>
                            <div class="size_selector color_selector d-flex align-items-center">
                                <div class="single_size_opt">
                                    <input type="radio" hidden name="color" class="size_inp" id="color-purple">
                                    <label for="color-purple" class="bg-color" data-bs-toggle="tooltip"
                                        title="Rose Red"></label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="color" class="size_inp" id="color-red">
                                    <label for="color-red" class="bg-white" data-bs-toggle="tooltip"
                                        title="White"></label>
                                </div>
                                <div class="single_size_opt ms-2">
                                    <input type="radio" hidden name="color" class="size_inp" id="color-green"
                                        checked>
                                    <label for="color-green" class="bg-dark" data-bs-toggle="tooltip"
                                        title="Black"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="d-flex align-items-center">
                        <div class="d-block d-lg-none">
                            <button class="default_btn py-2 me-3 rounded" id="mobile_filter_btn">Filter</button>
                        </div>
                        <div class="sorting_filter d-none d-sm-block">
                            <select class="nice_select">
                                <option value="">Default sorting</option>
                                <option value="">Price low-high</option>
                                <option value="">Price high-low</option>
                            </select>
                        </div>
                        <div class="view_filter d-flex align-items-center ms-auto">
                            <a href="shop-grid.html">
                                <div class="view_icon"><i class="icon-grid"></i></div>
                            </a>
                            <a href="shop-list.html">
                                <div class="view_icon active"><i class="las la-list-ul"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="shop_products">
                        <div class="list_view_products">

                            @foreach ($products as $product)
                                <div class="single_list_product">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="list_product_img">
                                                <div class="lp_img">
                                                    <a href="product-view.html">
                                                        <img loading="lazy"
                                                            src="{{ route('ProductImage', $product->MainImage) }}"
                                                            alt="product">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product_content">
                                                <a href="product-view.html">
                                                    <h5>{{ $product->Title }}</h5>
                                                </a>
                                                <div class="ratprice">
                                                    <div class="price">
                                                        <span
                                                            class="org_price">{{ $product->price * ($product->Discount / 100) }} RON</span>
                                                        <span class="prev_price">{{ $product->price }} RON</span>
                                                    </div>
                                                    {{-- <div class="rating">
                                                        <div class="d-flex align-items-center justify-content-start">
                                                            <div class="rating_star">
                                                                <span><i class="las la-star"></i></span>
                                                                <span><i class="las la-star"></i></span>
                                                                <span><i class="las la-star"></i></span>
                                                                <span><i class="las la-star"></i></span>
                                                                <span><i class="las la-star"></i></span>
                                                            </div>
                                                            <p class="rating_count">(150)</p>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <p class="product_list_desc">{{ $product->description }}</p>
                                                <div class="product_list_btns">
                                                    <a href="{{ route('AddToCart', $product->id) }}"
                                                        class="list_product_btn">
                                                        <button class="list_product_btn"><span class="icon"><i
                                                                    class="icon-cart"></i></span> Add to Cart</button></a>
                                                    <a href="{{route('AddToFavorite',$product->id) }}" class="list_product_btn">
                                                        <button class="list_product_btn"><span class="icon"><i
                                                                    class="icon-cart"></i></span> Wishlist</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @if (count($products) < 1)
                                <span>ne pare rau dar nu am gasit niciun produs din categorie cu numele asta</span>
                            @endif


                        </div>
                    </div>
                    {{-- <div class="pagination_wrp d-flex align-items-center justify-content-center">
                        <div class="single_paginat active">1</div>
                        <div class="single_paginat">2</div>
                        <div class="single_paginat">3</div>
                        <div class="single_paginat">4</div>
                        <div class="single_paginat"><i class="las la-long-arrow-alt-right"></i></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
