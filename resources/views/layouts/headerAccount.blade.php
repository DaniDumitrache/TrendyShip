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
                                <p>salut,</p>
                                <h4></h4>
                            </div>
                            <div class="profile_hambarg d-lg-none d-block">
                                <i class="las la-bars"></i>
                            </div>
                        </div>
                        <div class="acprof_wrap shadow_sm">
                            <div class="acprof_links">
                                <a href="account.html" class="active">
                                    <h4 class="acprof_link_title">
                                        <i class="lar la-id-card"></i>
                                        Manage My Account
                                    </h4>
                                </a>
                                <a href="account-profile-info.html">Comenzile mele</a>
                                <a href="account-manage-address.html">Modifica Adresa</a>
                                <a href="account-change-password.html">Modifica parola</a>
                            </div>
                            <div class="acprof_links">
                                <a href="account-order-history.html">
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
                                        <i class="las la-credit-card"></i>
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
                            <form action="{{ route('logout') }}">
                                <div class="acprof_links border-0">
                                    <h4 class="acprof_link_title">
                                        <button type="submit"
                                            style="background-color: transparent; border:none; font-size: 20px;"><i
                                                class="las la-power-off"></i>
                                            Log Out</button>
                                    </h4>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
