@extends('layouts.body')
@section('content')
    <!-- account -->
    <div class="my_account_wrap section_padding_b">
        <div class="container">
            <div class="row">
                <!--  account sidebar  -->
                <div class="col-lg-3">
                    <div class="account_sidebar">
                        <div class="account_profile position-relative shadow_sm">
                            <div class="acprof_img">
                                <a href="account.html">
                                    <img loading="lazy" src="assets/images/avatar-2.png" alt="user">
                                </a>
                            </div>
                            <div class="acprof_cont">
                                <p>Hello,</p>
                                <h4>Russell Ahmed</h4>
                            </div>
                            <div class="profile_hambarg d-lg-none d-block">
                                <i class="las la-bars"></i>
                            </div>
                        </div>
                        <div class="acprof_wrap shadow_sm">
                            <div class="acprof_links">
                                <a href="account.html">
                                    <h4 class="acprof_link_title">
                                        <i class="lar la-id-card"></i> Manage My Account
                                    </h4>
                                </a>
                                <a href="account-profile-info.html">Profile Information</a>
                                <a href="account-manage-address.html">Manage Address</a>
                                <a href="account-change-password.html">Change Password</a>
                            </div>
                            <div class="acprof_links">
                                <a href="account-order-history.html">
                                    <h4 class="acprof_link_title">
                                        <i class="las la-gift"></i> My Order History
                                    </h4>
                                </a>
                                <a href="account-return-order.html">My Returns</a>
                                <a href="account-order-cancel.html">My Cancellations</a>
                                <a href="account-my-reviews.html">My Reviews</a>
                            </div>
                            <div class="acprof_links">
                                <a href="account-payment-methods.html">
                                    <h4 class="acprof_link_title">
                                        <i class="lar la-credit-card"></i> Payments Methods
                                    </h4>
                                </a>
                                <a href="account-voucher.html">Voucher</a>
                            </div>
                            <div class="acprof_links">
                                <a href="wish-list.html" class="active">
                                    <h4 class="ac_link_title">
                                        <i class="lar la-heart"></i> My Wishlist
                                    </h4>
                                </a>
                            </div>
                            <div class="acprof_links border-0">
                                <a href="login.html">
                                    <h4 class="acprof_link_title">
                                        <i class="las la-power-off"></i> Log Out
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account content -->
                <div class="col-lg-9">
                    <div class="shop_cart_wrap wishlist">
                        <div class="single_shop_cart d-flex align-items-center flex-wrap mt-0">
                            <div class="cart_img mb-4 mb-md-0">
                                <img loading="lazy" src="assets/images/bag.png" alt="product">
                            </div>
                            <div class="cart_cont">
                                <a href="product-view.html">
                                    <h5>Casual USB Charging Laptop Backpacks</h5>
                                </a>
                                <p class="instock mb-0">Availability: <span>In Stock</span></p>
                            </div>

                            <div class="cart_price ms-md-auto ms-0">
                                <p>$45.00</p>
                            </div>
                            <div class="wish_cart_btn ms-md-auto ms-0 mt-3 mt-md-0">
                                <button class="list_product_btn"><span class="icon"><i class="icon-cart"></i></span> Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="cart_remove ms-auto align-self-end align-self-md-center">
                                <i class="icon-trash"></i>
                            </div>
                        </div>
                        <div class="single_shop_cart d-flex align-items-center flex-wrap">
                            <div class="cart_img mb-4 mb-md-0">
                                <img loading="lazy" src="assets/images/keyboard.png" alt="product">
                            </div>
                            <div class="cart_cont">
                                <a href="product-view.html">
                                    <h5>HV-KB585GCM Wireless Keyboard & Mouse </h5>
                                </a>
                                <p class="instock mb-0">Availability: <span class="outstock">Out of Stock</span></p>
                            </div>

                            <div class="cart_price ms-md-auto ms-0">
                                <p>$95.00</p>
                            </div>
                            <div class="wish_cart_btn ms-md-auto ms-0 mt-3 mt-md-0">
                                <button class="list_product_btn disable"><span class="icon"><i
                                            class="icon-cart"></i></span>
                                    Add to Cart</button>
                            </div>
                            <div class="cart_remove ms-auto align-self-end align-self-md-center">
                                <i class="icon-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection