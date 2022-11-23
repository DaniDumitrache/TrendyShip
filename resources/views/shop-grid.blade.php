@extends('layouts.body')

@section('content')
    <!-- shop grid view -->
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
                                <div class="view_icon active"><i class="icon-grid"></i></div>
                            </a>
                            <a href="shop-list.html">
                                <div class="view_icon"><i class="las la-list-ul"></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="shop_products">
                        <div class="row gy-4">
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/laptop-3.png"
                                            alt="product">
                                        <span class="tag">Hot</span>
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>HP Pavilion 15</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/shoes-5.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>Men Casual Shoes</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/headphone-3.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>COWIN E7 Active</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/phone-1.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>Xiaomi Note 7 Pro</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/phone-2.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>iPhone 11 Pro</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/laptop-2.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>HP Omen 13</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/shoes-3.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>Women high Shoes</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/headphone-2.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>Bose Headphone</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="single_new_arrive">
                                    <div class="sna_img">
                                        <img loading="lazy" class="prd_img" src="assets/images/iphone-xr.png"
                                            alt="product">
                                        <div class="prodcut_hovcont">
                                            <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                                                <i class="icon-search-left"></i>
                                            </a>
                                            <a href="#" class="icon" tabindex="0">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sna_content">
                                        <a href="product-view.html">
                                            <h4>iPhone 12 Pro XR</h4>
                                        </a>
                                        <div class="ratprice">
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
                                        <div class="product_adcart">
                                            <button class="default_btn">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination_wrp d-flex align-items-center justify-content-center mt-4">
                            <div class="single_paginat active">1</div>
                            <div class="single_paginat">2</div>
                            <div class="single_paginat">3</div>
                            <div class="single_paginat">4</div>
                            <div class="single_paginat"><i class="las la-long-arrow-alt-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-md-0">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_logo">
                                <img loading="lazy" src="assets/images/svg/logo.svg" alt="easy shop">
                            </div>
                            <div class="footet_text">
                                <p>Lorem ipsum, or lipsum as it is sometimes kno
                                    wn, is dummy text used in laying out print, gra
                                    phic or web designs the passage.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="footer_newslet">
                                <h4>Newsletter</h4>
                                <form class="footernews_form">
                                    <input type="text" placeholder="Your email address">
                                    <button type="submit" class="default_btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-md-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">My Account</h4>
                                <a href="account-order-history.html">Orders</a>
                                <a href="wish-list.html">Wishlist</a>
                                <a href="track-order.html">Track Order</a>
                                <a href="#">Manage Account</a>
                                <a href="return-order.html">Return Order</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="footer_menu">
                                <h4 class="footer_title">Information</h4>
                                <a href="about-us.html">About Us</a>
                                <a href="return-policy.html">Return Policy</a>
                                <a href="terms-condition.html">Terms & condition</a>
                                <a href="privacy-policy.html">Privacy Policy</a>
                                <a href="faq.html">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_download">
                        <div class="row">
                            <div class="col-lg-6 col-lg-12">
                                <h4 class="footer_title">Contact</h4>
                                <div class="footer_contact">
                                    <p>
                                        <span class="icn"><i class="las la-map-marker-alt"></i></span>

                                        7895 Dr New Albuquerue, NM 19800, <br> United
                                        States Of America
                                    </p>
                                    <p class="phn">
                                        <span class="icn"><i class="las la-phone"></i></span>
                                        +566 477 256, +566 254 575
                                    </p>
                                    <p class="eml">
                                        <span class="icn"><i class="lar la-envelope"></i></span>
                                        info@domain.com
                                    </p>
                                </div>
                            </div>
                            <div class="footer_social col-lg-6 col-lg-12">
                                <div class="footer_icon d-flex">
                                    <a href="#" class="facebook"><i class="lab la-facebook-f"></i></a>
                                    <a href="#" class="twitter"><i class="lab la-twitter"></i></a>
                                    <a href="#" class="instagram"><i class="lab la-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- copyright -->
    <div class="copyright_wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="copyright_text">© RAFCART - All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <div class="payment_method">
                        <img loading="lazy" src="assets/images/payment-method.png" alt="payment method">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                            <input type="radio" hidden name="size" class="size_inp" id="size-xs-2">
                                            <label for="size-xs">XS</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp" id="size-s-2">
                                            <label for="size-s">S</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp" id="size-m-2"
                                                checked>
                                            <label for="size-m">M</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp" id="size-l-2">
                                            <label for="size-l">L</label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="size" class="size_inp" id="size-xl-2">
                                            <label for="size-xl">XL</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="size_selector color_selector">
                                    <h5>Color:</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="single_size_opt">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-purple-2">
                                            <label for="color-purple" class="bg-color" data-bs-toggle="tooltip"
                                                title="Rose Red"></label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-red-2">
                                            <label for="color-red" class="bg-white" data-bs-toggle="tooltip"
                                                title="White"></label>
                                        </div>
                                        <div class="single_size_opt ms-2">
                                            <input type="radio" hidden name="color" class="size_inp"
                                                id="color-green-2" checked>
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
@endsection
