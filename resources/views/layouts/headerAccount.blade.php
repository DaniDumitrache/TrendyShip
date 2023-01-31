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
                                <a href="{{ route('account') }}" class="active">
                                    <h4 class="acprof_link_title">
                                        <i class="bi bi-house-door"></i>
                                        Contul meu
                                    </h4>
                                </a>
                                <a href="{{ route('order') }}">Comenzile mele</a>
                                <a href="">{{ config('app.name') }} <span class="text-color"
                                        style="font-size: 18px">Premium</span></a>
                                <a href="{{ route('favorite') }}">Favorite</a>
                                <a href="">Review-urile mele</a>
                                <a href="{{ route('ManageAdress') }}">Date personale</a>
                                <a href="">Setări siguranță</a>
                                <a href="">Abonările mele</a>
                            </div>
                            @if ($admin)
                            @empty(!$GroupPermission)
                                <div class="acprof_links">
                                    <a class="active">
                                        <h4 class="acprof_link_title">
                                            <i class="bi bi-award"></i>
                                            (admin)
                                        </h4>
                                    </a>
                                    @foreach (json_decode($GroupPermission->permission, true) as $permission)
                                        @if (isset($permission['dashboard'][0]) && $permission['dashboard'][0] == 'true')
                                            <a href="">dashboard</a>
                                        @endif
                                        @if (isset($permission['customers'][0]) && $permission['customers'][0] == 'true')
                                            <a href="{{ route('admin/customers') }}">clientii</a>
                                        @endif
                                        @if (isset($permission['users'][0]) && $permission['users'][0] == 'true')
                                            <a href="{{ route('admin/users') }}">utilizatori</a>
                                        @endif
                                        @if (isset($permission['group'][0]) && $permission['group'][0] == 'true')
                                            <a href="{{ route('admin/group') }}">Grupuri</a>
                                        @endif
                                        @if (isset($permission['Category'][0]) && $permission['Category'][0] == 'true')
                                            <a href="{{ route('admin/categories') }}">categorii</a>
                                        @endif
                                        @if (isset($permission['products'][0]) && $permission['products'][0] == 'true')
                                            <a href="{{ route('admin/products') }}">Produse</a>
                                        @endif
                                        @if (isset($permission['settings'][0]) && $permission['settings'][0] == 'true')
                                            <a href="{{ route('settings/ManageSite') }}">setari</a>
                                        @endif
                                    @endforeach
                                </div>
                            @endempty
                        @endif
                        {{-- <div class="acprof_links">
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
                            </div> --}}
                        {{-- <form action="{{ route('logout') }}">
                                <div class="acprof_links border-0">
                                    <h4 class="acprof_link_title">
                                        <button type="submit"
                                            style="background-color: transparent; border:none; font-size: 20px;"><i
                                                class="las la-power-off"></i>
                                            Log Out</button>
                                    </h4>
                                </div>
                            </form> --}}
                    </div>
                </div>
            </div>
