@extends('layouts.body')
@section("content")
<!-- hero area -->
<div class="banner_slider">
    <div class="hero_area" style="background-image: url('assets/images/banner-1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero_content">
                        <h1>Best Collection For Home Decoration </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                            id
                            integer neque, vel accumsan dolor diam.</p>
                        <div class="hero_btn">
                            <a class="default_btn small rounded" href="shop-grid.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero_area bg_2" style="background-image: url('assets/images/banner-2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero_content">
                        <h1>Best Collection For Home Decoration</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                            id
                            integer neque, vel accumsan dolor diam.</p>
                        <div class="hero_btn">
                            <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero_area bg_2" style="background-image: url('assets/images/banner-3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero_content">
                        <h1>Best Collection For Home Decoration</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate rhoncus pellentesque
                            id
                            integer neque, vel accumsan dolor diam.</p>
                        <div class="hero_btn">
                            <a class="default_btn rounded" href="shop-grid.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <h4>Free shipping</h4>
                                <p>Orders over $200</p>
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
                                <h4>Money Returns</h4>
                                <p>30 Days money return</p>
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
                                <p>Customer support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- offer deal -->
<div class="offer_wrp section_padding_b">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="single_offercard">
                    <div class="offertext">
                        <h3 class="offer_pers">30% offer</h3>
                        <h4>Free Shipping</h4>
                        <p>Attractive Natural Furniture</p>
                        <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                    </div>
                    <div class="offerimg">
                        <img loading="lazy" src="assets/images/sofa-1.png" alt="product">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3 mt-sm-0">
                <div class="single_offercard bg_2">
                    <div class="offertext">
                        <h3 class="offer_pers">50% offer</h3>
                        <h4>Flash Sale</h4>
                        <p>Attractive Natural Furniture</p>
                        <a href="shop-grid.html" class="default_btn rounded xs_btn">Shop Now</a>
                    </div>
                    <div class="offerimg">
                        <img loading="lazy" src="assets/images/sofa-2.png" alt="product">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- categories -->
<div class="shop_bycat section_padding_b">
    <div class="container">
        <h2 class="section_title_3">Shop by category</h2>
        <div class="row gx-2 gy-2">
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-1.jpg);">
                    <div class="shopcat_cont">
                        <h4>Bedroom</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-2.jpg);">
                    <div class="shopcat_cont">
                        <h4>Mattresses</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-3.jpg);">
                    <div class="shopcat_cont">
                        <h4>Office</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-4.jpg);">
                    <div class="shopcat_cont">
                        <h4>Outdoor</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-5.jpg);">
                    <div class="shopcat_cont">
                        <h4>Lounges & Sofas</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-6">
                <a href="#" class="single_shopbycat bg_1" style="background-image: url(assets/images/category-6.jpg);">
                    <div class="shopcat_cont">
                        <h4>Living & Dining</h4>
                        <div class="icon">
                            <i class="las la-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- top new arrival -->
<div class="top_arrival_wrp section_padding_b">
    <div class="container">
        <h2 class="section_title_3">Top new arrival</h2>
        <div class="product_slider_2">
            <div class="single_toparrival">
                <div class="topariv_img">
                    <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                    <div class="persof">25%</div>
                    <div class="adto_wish">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="prod_soh">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="qk_view open_quickview">
                            <span><i class="las la-eye"></i></span>
                            Quick View
                        </div>
                    </div>
                </div>
                <div class="topariv_cont">
                    <a href="product-view.html">
                        <h4>GUYER Chair</h4>
                    </a>
                    <p>Queen Headboard</p>
                    <div class="price mb-1">
                        <span class="org_price">$45.00</span>
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
                            <p class="rating_count mb-0">(150)</p>
                        </div>
                    </div>
                </div>
                <div class="full_atc_btn">
                    <button>
                        <span class="me-1"><i class="icon-cart"></i></span>
                        add to cart
                    </button>
                </div>
            </div>
            <div class="single_toparrival">
                <div class="topariv_img">
                    <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                    <div class="adto_wish">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="prod_soh">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="qk_view open_quickview">
                            <span><i class="las la-eye"></i></span>
                            Quick View
                        </div>
                    </div>
                </div>
                <div class="topariv_cont">
                    <a href="product-view.html">
                        <h4>MADELINE sofa</h4>
                    </a>
                    <p>Fabric Sofa Bed</p>
                    <div class="price mb-1">
                        <span class="org_price">$120.00</span>
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
                            <p class="rating_count mb-0">(150)</p>
                        </div>
                    </div>
                </div>
                <div class="full_atc_btn">
                    <button>
                        <span class="me-1"><i class="icon-cart"></i></span>
                        add to cart
                    </button>
                </div>
            </div>
            <div class="single_toparrival">
                <div class="topariv_img">
                    <img loading="lazy" src="assets/images/product8.jpg" alt="product">
                    <div class="persof bg-danger">HOT</div>
                    <div class="adto_wish">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="prod_soh">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="qk_view open_quickview">
                            <span><i class="las la-eye"></i></span>
                            Quick View
                        </div>
                    </div>
                </div>
                <div class="topariv_cont">
                    <a href="product-view.html">
                        <h4>BIANCO Chair</h4>
                    </a>
                    <p>Fabric Accent Chair</p>
                    <div class="price mb-1">
                        <span class="org_price">$45.00</span>
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
                            <p class="rating_count mb-0">(150)</p>
                        </div>
                    </div>
                </div>
                <div class="full_atc_btn">
                    <button>
                        <span class="me-1"><i class="icon-cart"></i></span>
                        add to cart
                    </button>
                </div>
            </div>
            <div class="single_toparrival">
                <div class="topariv_img">
                    <img loading="lazy" src="assets/images/product10.jpg" alt="product">
                    <div class="adto_wish">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="prod_soh">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="qk_view open_quickview">
                            <span><i class="las la-eye"></i></span>
                            Quick View
                        </div>
                    </div>
                </div>
                <div class="topariv_cont">
                    <a href="product-view.html">
                        <h4>PELAGIA Lounge</h4>
                    </a>
                    <p>Outdoor Modular
                    </p>
                    <div class="price mb-1">
                        <span class="org_price">$45.00</span>
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
                            <p class="rating_count mb-0">(150)</p>
                        </div>
                    </div>
                </div>
                <div class="full_atc_btn">
                    <button>
                        <span class="me-1"><i class="icon-cart"></i></span>
                        add to cart
                    </button>
                </div>
            </div>
            <div class="single_toparrival">
                <div class="topariv_img">
                    <img loading="lazy" src="assets/images/product12.jpg" alt="product">
                    <div class="persof bg-warning">50%</div>
                    <div class="adto_wish">
                        <i class="icon-heart"></i>
                    </div>
                    <div class="prod_soh">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="qk_view open_quickview">
                            <span><i class="las la-eye"></i></span>
                            Quick View
                        </div>
                    </div>
                </div>
                <div class="topariv_cont">
                    <a href="product-view.html">
                        <h4>Black ARCHIE</h4>
                    </a>
                    <p>Black Bedside
                    </p>
                    <div class="price mb-1">
                        <span class="org_price">$400.00</span>
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
                            <p class="rating_count mb-0">(150)</p>
                        </div>
                    </div>
                </div>
                <div class="full_atc_btn">
                    <button>
                        <span class="me-1"><i class="icon-cart"></i></span>
                        add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ad banner -->
<div class="offer_banner_area section_padding_b">
    <div class="container">
        <a href="#">
            <picture>
                <source media="(min-width: 768px)" srcset="assets/images/offer-2.jpg">
                <img loading="lazy" src="assets/images/offer-mobile.jpg" alt="ad">
            </picture>
        </a>
    </div>
</div>

<!--  recomended for you  -->
<div class="recfor_you section_padding_b">
    <div class="container">
        <h2 class="section_title_3">Recomended for you</h2>
        <div class="row gy-4">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product2.jpg" alt="product">
                        <div class="persof bg-warning">50%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>PELAGIA Lounge</h4>
                        </a>
                        <p>Outdoor Modular Lounge</p>
                        <div class="price mb-1">
                            <span class="org_price">$449.00</span>
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
                                <p class="rating_count mb-0">(50)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product3.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>AVERY bed</h4>
                        </a>
                        <p>Queen Bed</p>
                        <div class="price mb-1">
                            <span class="org_price">$549.00</span>
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
                                <p class="rating_count mb-0">(52)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product4.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>white bed</h4>
                        </a>
                        <p>king Bed</p>
                        <div class="price mb-1">
                            <span class="org_price">$549.00</span>
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
                                <p class="rating_count mb-0">(52)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product9.jpg" alt="product">
                        <div class="persof">25%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>GUYER Chair</h4>
                        </a>
                        <p>Queen Headboard</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
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
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product1.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>MADELINE sofa</h4>
                        </a>
                        <p>Fabric Sofa Bed</p>
                        <div class="price mb-1">
                            <span class="org_price">$120.00</span>
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
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product8.jpg" alt="product">
                        <div class="persof bg-danger">HOT</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>BIANCO Chair</h4>
                        </a>
                        <p>Fabric Accent Chair</p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
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
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product10.jpg" alt="product">
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>PELAGIA Lounge</h4>
                        </a>
                        <p>Outdoor Modular Lounge
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$45.00</span>
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
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single_toparrival">
                    <div class="topariv_img">
                        <img loading="lazy" src="assets/images/product12.jpg" alt="product">
                        <div class="persof bg-warning">50%</div>
                        <div class="adto_wish">
                            <i class="icon-heart"></i>
                        </div>
                        <div class="prod_soh">
                            <div class="adto_wish">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="qk_view open_quickview">
                                <span><i class="las la-eye"></i></span>
                                Quick View
                            </div>
                        </div>
                    </div>
                    <div class="topariv_cont">
                        <a href="product-view.html">
                            <h4>Black ARCHIE</h4>
                        </a>
                        <p>Black Bedside
                        </p>
                        <div class="price mb-1">
                            <span class="org_price">$400.00</span>
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
                                <p class="rating_count mb-0">(150)</p>
                            </div>
                        </div>
                    </div>
                    <div class="full_atc_btn">
                        <button>
                            <span class="me-1"><i class="icon-cart"></i></span>
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection