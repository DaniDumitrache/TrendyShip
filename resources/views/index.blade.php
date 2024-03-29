    @extends('layouts.body')

    @section('content')
        <!-- hero area -->
        <div class="banner_slider">
            @php $i = 0; @endphp
            @foreach (json_decode($website_config->homepage_slider, true)['sliders'] as $slider)
                <div id="banner-{{ $i }}" class="hero_area bg_2" {{-- style="background-image: url('assets/images/banner/banner-1.jpg')" --}}>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero_content">
                                    <h1>{{ $slider['title'] }}</h1>
                                    <p>{{ $slider['description'] }}</p>
                                    <div class="hero_btn">
                                        <a class="default_btn rounded" href="{{ $slider['url'] }}">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                setInterval(() => {
                                    $('#slick-slide0{{ $i }}').css('background-image',
                                        `url('{{ asset('assets/images/banner/') . '/' . $slider['banner'] }}`
                                    );
                                }, 1000);
                            })
                        </script>
                    </div>
                </div>
                @php $i++ @endphp
            @endforeach
        </div>

        <!-- features area -->
        <section class="features_area  section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row justify-content-center gx-2 gx-md-4">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div
                                    class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                    <div class="feature_icon">
                                        <img loading="lazy" src="assets/images/svg/delivery-van.svg" alt="icon">

                                    </div>
                                    <div class="feature_content">
                                        <h4>Transport Gratuit</h4>
                                        <p>La comenzile care trec de 200 RON</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <div
                                    class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                    <div class="feature_icon">
                                        <img loading="lazy" src="assets/images/svg/money-back.svg" alt="icon">
                                    </div>
                                    <div class="feature_content">
                                        <h4>bani inapoi</h4>
                                        <p>bani inapoi in 30 de zile</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div
                                    class="single_feature d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                    <div class="feature_icon">
                                        <img loading="lazy" src="assets/images/svg/service-hours.svg" alt="icon">
                                    </div>
                                    <div class="feature_content">
                                        <h4>24/7 Support</h4>
                                        <p>Clienti support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <!-- top ranking -->
        <section class="top_ranking section_padding_b">
            <div class="container">
                <h2 class="section_title_2 mb-0">Top Produse</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-6">
                        <h4 class="single_topr_title">Laptop</h4>
                        <div class="single_top_ranking">
                            <div class="topr_img">
                                <a href="product-view.html">
                                    <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                                </a>
                                <span class="tag">1</span>
                            </div>
                            <div class="topr_content">
                                <a href="product-view.html">
                                    <h4>Dell inspire 14</h4>
                                </a>
                                <div class="price">
                                    <span class="org_price">$45.00</span>
                                    <span class="prev_price">$55.45</span>
                                </div>
                                <div class="rating">
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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
        <?php $i = 0; ?>
        @foreach ($NewProducts as $product)
            @empty(!$product)
                <?php $i++; ?>
                @if ($i == 1)
                @empty(!$product->categoryes)
                    <!-- new arrive -->
                    <section class="new_arrive section_padding_b">
                        <div class="container">
                            <div class="d-flex align-items-start justify-content-between">
                                <h2 class="section_title_2">Produse Noi</h2>
                                <div class="seemore_2 pt-2">
                                    <a href="{{ route('NewProducts') }}">See More <span><i
                                                class="las la-angle-right"></i></span></a>
                                </div>
                            </div>
                            <div class="row gy-4">
                                @foreach ($NewProducts as $product)
                                    @livewire('App\Http\Livewire\Product', ['ProductData' => $product])
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endempty
            @endif
        @endempty
    @endforeach

    <?php $c = 0; ?>
    @foreach ($NewProducts as $product)
        @if ($product->Discount >= 1)
        @empty(!$product)
            <?php $c++; ?>
            @if ($c == 1)
                <!-- new arrive -->
                <section class="new_arrive section_padding_b">
                    <div class="container">
                        <div class="d-flex align-items-start justify-content-between">
                            <h2 class="section_title_2">Promotii</h2>
                            <div class="seemore_2 pt-2">
                                <a href="{{ route('NewProducts') }}">See More <span><i
                                            class="las la-angle-right"></i></span></a>
                            </div>
                        </div>
                        <div class="row gy-4">
                            @foreach ($NewProducts as $product)
                                @if ($product->Discount >= 1)
                                    @livewire('App\Http\Livewire\Product', ['ProductData' => $product])
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
        @endempty
    @endif
@endforeach

<?php $sasf = []; ?>
@foreach ($categoryes as $category)
    @foreach ($CategoryesProducts as $product)
        @empty(!$product->categoryes)
            @if ($product->categoryes == $category->name)
                @if (!in_array($category->name, $sasf))
                    <?php array_push($sasf, $category->name); ?>
                    <section class="new_arrive section_padding_b">
                        <div class="container">
                            <div class="d-flex align-items-start justify-content-between">
                                <h2 class="section_title_2">{{ $category->name }}</h2>
                                <div class="seemore_2 pt-2">
                                    <a href="/search/{{ $category->name }}/%">See More <span><i
                                                class="las la-angle-right"></i></span></a>
                                </div>
                            </div>
                            <div class="row gy-4">
                                @foreach ($CategoryesProducts as $product)
                                    @if ($product->categoryes == $category->name)
                                        @livewire('App\Http\Livewire\Product', ['ProductData' => $product])
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @endif
        @endempty
    @endforeach
@endforeach

<!-- product quick view -->
<div class="product_quickview">
    <div class="prodquick_wrap position-relative">
        <div class="close_quickview">
            <i class="las la-times"></i>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product_view_slider">
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-1.png" alt="product">
                    </div>
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-2.png" alt="product">
                    </div>
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-3.png" alt="product">
                    </div>
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-4.png" alt="product">
                    </div>
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-5.png" alt="product">
                    </div>
                    <div class="single_viewslider">
                        <img loading="lazy" src="assets/images/slider-1.png" alt="product">
                    </div>
                </div>
                <div class="product_viewslid_nav">
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-1.png" alt="product">
                    </div>
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-2.png" alt="product">
                    </div>
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-3.png" alt="product">
                    </div>
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-4.png" alt="product">
                    </div>
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-5.png" alt="product">
                    </div>
                    <div class="single_viewslid_nav">
                        <img loading="lazy" src="assets/images/slider-1.png" alt="product">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product_info_wrapper">
                    <div class="product_base_info">
                        <h1>MEN'S ADIDAS COURTSMASH</h1>
                        <div class="rating">
                            <div class="d-flex align-items-center">
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <p class="rating_count">50 Reviews</p>
                            </div>
                        </div>
                        <div class="product_other_info">
                            <p><span class="text-semibold">Availability:</span><span class="text-green">In
                                    Stock</span></p>
                            <p><span class="text-semibold">Brand:</span>Bata</p>
                            <p><span class="text-semibold">Category:</span>Clothing</p>
                            <p><span class="text-semibold">SKU:</span>BE45VGRT</p>
                        </div>
                        <div class="price mt-3 mb-3 d-flex align-items-center">
                            <span class="prev_price ms-0">$5000.00</span>
                            <span class="org_price ms-2">$4500.00</span>
                            <div class="disc_tag ms-3">-30%</div>
                        </div>
                        <div class="pd_dtails">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim exercitationem
                                quaerat....
                            </p>
                        </div>
                        <div class="shop_filter border-bottom-0 pb-0">
                            <div class="size_selector mb-3">
                                <h5>Size</h5>
                                <div class="d-flex align-items-center">
                                    <div class="single_size_opt">
                                        <input type="radio" hidden name="size" class="size_inp"
                                            id="size-xs">
                                        <label for="size-xs">XS</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp"
                                            id="size-s">
                                        <label for="size-s">S</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp"
                                            id="size-m" checked>
                                        <label for="size-m">M</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp"
                                            id="size-l">
                                        <label for="size-l">L</label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="size" class="size_inp"
                                            id="size-xl">
                                        <label for="size-xl">XL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="size_selector color_selector">
                                <h5>Color:</h5>
                                <div class="d-flex align-items-center">
                                    <div class="single_size_opt">
                                        <input type="radio" hidden name="color" class="size_inp"
                                            id="color-purple">
                                        <label for="color-purple" class="bg-color" data-bs-toggle="tooltip"
                                            title="Rose Red"></label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="color" class="size_inp"
                                            id="color-red">
                                        <label for="color-red" class="bg-white" data-bs-toggle="tooltip"
                                            title="White"></label>
                                    </div>
                                    <div class="single_size_opt ms-2">
                                        <input type="radio" hidden name="color" class="size_inp"
                                            id="color-green" checked>
                                        <label for="color-green" class="bg-dark" data-bs-toggle="tooltip"
                                            title="Black"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart_qnty ms-md-auto">
                            <p>Quantity</p>
                            <div class="d-flex align-items-center">
                                <div class="cart_qnty_btn">
                                    <i class="las la-minus"></i>
                                </div>
                                <div class="cart_count">4</div>
                                <div class="cart_qnty_btn">
                                    <i class="las la-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_buttons">
                        <a href="#" class="default_btn me-sm-3 me-2 px-2 px-lg-4"><i
                                class="icon-cart me-2"></i> Add to Cart</a>
                        <a href="#" class="default_btn second px-3 px-ms-4"><i class="icon-heart me-2"></i>
                            Wishlist</a>
                    </div>
                    <div class="share_icons footer_icon d-flex">
                        <a href="#"><i class="lab la-facebook-f"></i></a>
                        <a href="#"><i class="lab la-twitter"></i></a>
                        <a href="#"><i class="lab la-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <section class="download_wrap section_padding_b">
    <div class="container" bis_skin_checked="1">
        <div class="download_bg" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="download_left" bis_skin_checked="1">
                        <img loading="lazy" src="assets/images/mobile-view.png" class="w-100">
                    </div>
                </div>
                <div class="col-lg-5 px-5 px-lg-0" bis_skin_checked="1">
                    <div class="download_cont" bis_skin_checked="1">
                        <h2 class="title_2 text-capitalize mb-3">Download RAFCART App Now!</h2>
                        <p class="mb-4">Shopping fastly and easily more with our app. Get a link to <br class="d-none d-xl-block"> download
                            the app on your
                            phone</p>
                        <form action="#" class="subscribe_form">
                            <input type="text" placeholder="Email Address">
                            <button type="submit">Subscribe</button>
                        </form>
                        <div class="download_links" bis_skin_checked="1">
                            <a href="#" class="me-3">
                                <img loading="lazy" src="assets/images/download/download-1.png" alt="download">
                            </a>
                            <a href="#">
                                <img loading="lazy" src="assets/images/download/download-2.png" alt="download">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $('.breadcrumbs').remove();
</script>
@endsection
