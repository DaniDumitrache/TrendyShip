@extends('layouts.body')
@section("content")
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
                                    <i class="lar la-id-card"></i>
                                    Manage My Account
                                </h4>
                            </a>
                            <a href="account-profile-info.html">Profile Information</a>
                            <a href="account-manage-address.html">Manage Address</a>
                            <a href="account-change-password.html">Change Password</a>
                        </div>
                        <div class="acprof_links">
                            <a href="account-order-history.html" class="active">
                                <h4 class="acprof_link_title">
                                    <i class="las la-gift"></i>
                                    My Order History
                                </h4>
                            </a>
                            <a href="account-return-order.html">My Returns</a>
                            <a href="account-order-cancel.html">My Cancellations</a>
                            <a href="account-my-reviews.html">My Reviews</a>
                        </div>
                        <div class="acprof_links">
                            <a href="account-payment-methods.html">
                                <h4 class="acprof_link_title">
                                    <i class="lar la-credit-card"></i>
                                    Payments Methods
                                </h4>
                            </a>
                            <a href="account-voucher.html">Voucher</a>
                        </div>
                        <div class="acprof_links">
                            <a href="wish-list.html">
                                <h4 class="ac_link_title">
                                    <i class="lar la-heart"></i>
                                    My Wishlist
                                </h4>
                            </a>
                        </div>
                        <div class="acprof_links border-0">
                            <a href="login.html">
                                <h4 class="acprof_link_title">
                                    <i class="las la-power-off"></i>
                                    Log Out
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- account content -->
            <div class="col-lg-9">
                <div class="acorder_wrapper">
                    <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                        <div class="prorder_img">
                            <img loading="lazy" src="assets/images/tv.png" alt="product">
                            <img loading="lazy" src="assets/images/tv.png" alt="product">
                        </div>
                        <div class="prorder_btn">
                            <a href="account-order-details.html">View Order</a>
                        </div>
                        <div class="prorder_txt prorder_odnumber">
                            <h5>Order Number</h5>
                            <p>23E34RT3</p>
                        </div>
                        <div class="prorder_txt prorder_purchased">
                            <h5>Purchased</h5>
                            <p>01 March 2021</p>
                        </div>
                        <div class="prorder_txt prorder_qnty d-none d-sm-block">
                            <h5>Quantity</h5>
                            <p>x3</p>
                        </div>
                        <div class="prorder_txt prorder_total">
                            <h5>Total</h5>
                            <p>$120</p>
                        </div>
                        <div class="prorder_txt prorder_status">
                            <h5 class="d-none d-md-block">Status</h5>
                            <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                            <p class="text-color">Cancelled</p>
                        </div>
                    </div>
                    <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                        <div class="prorder_img">
                            <img loading="lazy" src="assets/images/headphone-3.png" alt="product">
                            <img loading="lazy" src="assets/images/headphone-3.png" alt="product">
                        </div>
                        <div class="prorder_btn">
                            <a href="account-order-details.html">View Order</a>
                        </div>
                        <div class="prorder_txt prorder_odnumber">
                            <h5>Order Number</h5>
                            <p>23E34RT3</p>
                        </div>
                        <div class="prorder_txt prorder_purchased">
                            <h5>Purchased</h5>
                            <p>01 March 2021</p>
                        </div>
                        <div class="prorder_txt prorder_qnty d-none d-sm-block">
                            <h5>Quantity</h5>
                            <p>x3</p>
                        </div>
                        <div class="prorder_txt prorder_total">
                            <h5>Total</h5>
                            <p>$120</p>
                        </div>
                        <div class="prorder_txt prorder_status">
                            <h5 class="d-none d-md-block">Status</h5>
                            <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                            <p class="text-green">Delivered</p>
                        </div>
                    </div>
                    <div class="single_prof_recorder mt-0 mb-4 shadow_sm">
                        <div class="prorder_img">
                            <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                            <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                            <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                        </div>
                        <div class="prorder_btn">
                            <a href="account-order-details.html">View Order</a>
                        </div>
                        <div class="prorder_txt prorder_odnumber">
                            <h5>Order Number</h5>
                            <p>23E34RT3</p>
                        </div>
                        <div class="prorder_txt prorder_purchased">
                            <h5>Purchased</h5>
                            <p>01 March 2021</p>
                        </div>
                        <div class="prorder_txt prorder_qnty d-none d-sm-block">
                            <h5>Quantity</h5>
                            <p>x3</p>
                        </div>
                        <div class="prorder_txt prorder_total">
                            <h5>Total</h5>
                            <p>$120</p>
                        </div>
                        <div class="prorder_txt prorder_status">
                            <h5 class="d-none d-md-block">Status</h5>
                            <h5 class="d-block d-md-none"><span class="text_md me-2">Qty: x3</span> $120</h5>
                            <p class="text-color">Cancelled</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection