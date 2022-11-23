<!-- top header -->
<header class="home-2 d-none d-lg-block">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="logo">
                <a href="index-1.html">
                    <img loading="lazy" src="assets/images/svg/logo.svg" alt="logo">
                </a>
            </div>

            <ul class="nav_bar flex-grow-1">
                <li class="withsubs">
                    <a href="index-1.html">Acasa <span><i class="las la-angle-down"></i></span></a>
                    {{-- <ul class="subnav">
                        <li><a href="index-1.html">Home page 1 </a></li>
                        <li><a href="index-2.html">Home page 2</a></li>
                        <li><a href="index-3.html">Home page 3</a></li>
                    </ul> --}}
                </li>
                <li><a href="contact-us.html">contact</a></li>
                <li class="tophead_items ms-auto">

                    {{-- <div class="me-3">
                        <a class="text-semibold me-0" href="login.html">login</a><span class="text_xs">/</span><a
                            class="text-semibold" href="register.html">Register</a>
                    </div> --}}

                  @if(!Auth::check())
                  <div class="ac_join">
                    <div class="account_btn d-flex justify-content-between">
                        <a href="{{ route('login') }}" class="default_btn">Join</a>
                        <a href="{{ route('register') }}" class="default_btn second">Sing in</a>
                    </div>
                </div>
                  @endif
                </li>
            </ul>

        </div>
    </div>
</header>

<!-- navbar -->
<nav class="home-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index-2.html" class="mobile_logo d-block d-lg-none">
                <img loading="lazy" src="assets/images/svg/logo-white.svg" alt="logo">
            </a>
            <div class="all_category otherpage d-none d-lg-block">
                <div class="bars text-white d-flex align-items-center justify-content-center">
                    <span class="icon">
                        <i class="las la-bars"></i>
                    </span>
                    <span class="icon_text">All categories</span>
                </div>
                <div class="sub_categories_wrp">
                    <div class="sub_categories">
                        <h5 class="d-block position-relative d-lg-none subcats_title">
                            All categories
                        </h5>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="las la-shoe-prints"></i>
                            </span>
                            <span class="txt">Shoes</span>
                        </a>

                        <div class="singlecats withsub">
                            <span class="img_wrp">
                                <i class="las la-male"></i>
                            </span>
                            <span class="txt">Men</span>
                            <span class="wsicon"><i class="las la-angle-right"></i></span>
                            <div class="mega_menu">
                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Hot sale</h4>
                                        <div class="mega_categories">
                                            <a href="#">Hoodies $ Sweatshirts</a>
                                            <a href="#">T-Shirt</a>
                                            <a href="#">Men’s Sets</a>
                                            <a href="#">Jacket</a>
                                            <a href="#">Shoes</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Bottoms</h4>
                                        <div class="mega_categories">
                                            <a href="#">Casual Pants</a>
                                            <a href="#">Men’s Sleep & Lounge</a>
                                            <a href="#">Jeans</a>
                                            <a href="#">Shorts</a>
                                            <a href="#">Towel</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Outerwear $ Jackets</h4>
                                        <div class="mega_categories">
                                            <a href="#">Jacket</a>
                                            <a href="#">Sweaters</a>
                                            <a href="#">Casual Faux Leather</a>
                                            <a href="#">Parks</a>
                                            <a href="#">Jeans</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Underwear & Loun</h4>
                                        <div class="mega_categories">
                                            <a href="#">Boxes</a>
                                            <a href="#">Berifs</a>
                                            <a href="#">Long Johns</a>
                                            <a href="#">Men’s Sleep & Lounge</a>
                                            <a href="#">Parks</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Accessories</h4>
                                        <div class="mega_categories">
                                            <a href="#">Scarves</a>
                                            <a href="#">Skullies & Beanies</a>
                                            <a href="#">Casual Faux Leather</a>
                                            <a href="#">Prescription Glasses</a>
                                            <a href="#">Belt</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Novelty & Special</h4>
                                        <div class="mega_categories">
                                            <a href="#">Cosplay Costumes</a>
                                            <a href="#">Stage & Dance Wear</a>
                                            <a href="#">Exotic Apparel</a>
                                            <a href="#">Scarves</a>
                                            <a href="#">Men’s Sets</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_mega_menu brnd">
                                    <div class="mega_brands">
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="las la-female"></i>
                            </span>
                            <span class="txt">Women</span>
                        </a>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="las la-plug"></i>
                            </span>
                            <span class="txt">Electronisc</span>
                        </a>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="las la-headphones"></i>
                            </span>
                            <span class="txt">Headphones</span>
                        </a>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="icon-watch"></i>
                            </span>
                            <span class="txt">Watches</span>
                        </a>
                        <div class="singlecats withsub">
                            <span class="img_wrp">
                                <i class="las la-desktop"></i>
                            </span>
                            <span class="txt">Computer</span>
                            <span class="wsicon"><i class="las la-angle-right"></i></span>
                            <div class="mega_menu">
                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Macbook</h4>
                                        <div class="mega_categories">
                                            <a href="#">Mackbook m1</a>
                                            <a href="#">Mackbook pro</a>
                                            <a href="#">Mackbook air</a>
                                            <a href="#">Mackbook 2015</a>
                                            <a href="#">Mackbook 2020</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Laptop</h4>
                                        <div class="mega_categories">
                                            <a href="#">Razer</a>
                                            <a href="#">Hp Laptop</a>
                                            <a href="#">Dell Notebook</a>
                                            <a href="#">Asus</a>
                                            <a href="#">Lenovo</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Dasktop</h4>
                                        <div class="mega_categories">
                                            <a href="#">Brand Dasktop</a>
                                            <a href="#">All in one pc</a>
                                            <a href="#">Mini PC</a>
                                            <a href="#">Customize PC</a>
                                            <a href="#">Dasktop Accessories</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Monitor</h4>
                                        <div class="mega_categories">
                                            <a href="#">Samsung</a>
                                            <a href="#">Philips</a>
                                            <a href="#">LG</a>
                                            <a href="#">HP</a>
                                            <a href="#">Xiaomi</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="single_mega_menu">
                                    <div class="mega_menu_wrap">
                                        <h4>Accessories</h4>
                                        <div class="mega_categories">
                                            <a href="#">Dasktop Ram</a>
                                            <a href="#">Motherboard</a>
                                            <a href="#">SSD Card</a>
                                            <a href="#">Hard disk</a>
                                            <a href="#">Processor</a>
                                        </div>
                                    </div>
                                    <div class="mega_menu_wrap">
                                        <h4>Gaming</h4>
                                        <div class="mega_categories">
                                            <a href="#">Gaming console</a>
                                            <a href="#">Gaming Chair</a>
                                            <a href="#">Gaming Desk</a>
                                            <a href="#">Gaming Controller</a>
                                            <a href="#">Keyboard</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_mega_menu brnd">
                                    <div class="mega_brands">
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                                        </a>
                                        <a href="#" class="mega_brnd_img">
                                            <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="singlecats">
                            <span class="img_wrp">
                                <i class="las la-mobile"></i>
                            </span>
                            <span class="txt">Mobile</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="search_wrap d-none d-lg-block">
                <div class="search d-flex">
                    <div class="search_category">
                        <select class="nice_select">
                            <option value="">All category</option>
                            <option value="">Men</option>
                        </select>
                    </div>
                    <div class="search_input">
                        <input type="text" placeholder="Search product..." id="show_suggest">
                    </div>
                    <div class="search_subimt">
                        <button>
                            <span class="d-none d-sm-inline-block">Search</span>
                            <span class="d-sm-none d-inline-block"><i class="icon-search-left"></i></span>
                        </button>
                    </div>
                </div>
                <div class="search_suggest shadow-sm">
                    <div class="search_result_product">
                        <a href="" class="single_sresult_product">
                            <div class="sresult_img">
                                <img loading="lazy" src="assets/images/laptop-2.png" alt="product">
                            </div>
                            <div class="sresult_content">
                                <h4>HP Pavilion 15</h4>
                                <div class="price">
                                    <span class="org_price">$45.00</span>
                                </div>
                            </div>
                        </a>
                        <a href="" class="single_sresult_product">
                            <div class="sresult_img">
                                <img loading="lazy" src="assets/images/laptop-1.png" alt="product">
                            </div>
                            <div class="sresult_content">
                                <h4>HP Pavilion 15</h4>
                                <div class="price">
                                    <span class="org_price">$45.00</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="header_icon d-flex align-items-center">
                <a href="wish-list.html" class="icon_wrp text-center wishlist ms-0">
                    <span class="icon">
                        <i class="icon-heart"></i>
                    </span>
                    <span class="icon_text">Wish List</span>
                    <span class="pops">6</span>
                </a>
                <div class="shopcart">
                    <a href="shopping-cart.html" class="icon_wrp text-center d-none d-lg-block">
                        <span class="icon">
                            <i class="icon-cart"></i>
                        </span>
                        <span class="icon_text">Cart</span>
                        <span class="pops">@if(!empty(session('cart'))) {{count(session('cart'))}} @else 0 @endif</span>
                    </a>
                </div>
                @if (Auth::check())
                    <div class="position-relative myacwrap">
                        <a href="javascript:void(0)" class="icon_wrp text-center myacc">
                            <span class="icon">
                                <i class="icon-user-line"></i>
                            </span>
                            <span class="icon_text">Account</span>
                        </a>

                        <div class="myacc_cont">
                            <div class="ac_links">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="account.html" class="myac">
                                        <i class="lar la-id-card"></i>
                                        My Account
                                    </a>
                                    <a href="account-order-history.html">
                                        <i class="las la-gift"></i>
                                        My Order
                                    </a>
                                    <a href="wish-list.html">
                                        <i class="lar la-heart"></i>
                                        My Wishlist
                                    </a>
                                    <a href="shopping-cart.html">
                                        <i class="icon-cart"></i>
                                        My Cart
                                    </a>
                                    <a>
                                        <button
                                            style="border: none; background-color:transparent; margin:0px; padding:0px;"
                                            type="submit">
                                            <i class="las la-power-off"></i>
                                            Log out
                                        </button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</nav>

<!-- mobile bottom bar -->
<div class="mobile_bottombar d-block d-lg-none">
    <div class="header_icon">
        <a href="javascript:void(0)" class="icon_wrp text-center open_menu">
            <span class="icon">
                <i class="las la-bars"></i>
            </span>
            <span class="icon_text">Menu</span>
        </a>
        <a href="javascript:void(0)" class="icon_wrp text-center open_category">
            <span class="icon">
                <i class="icon-list-ul"></i>
            </span>
            <span class="icon_text">Categories</span>
        </a>
        <a href="javascript:void(0)" class="icon_wrp text-center" id="src_icon">
            <span class="icon">
                <i class="icon-search-left"></i>
            </span>
            <span class="icon_text">Search</span>
        </a>
        <a href="javascript:void(0)" class="icon_wrp crt text-center" id="openCart">
            <span class="icon">
                <i class="icon-cart"></i>
            </span>
            <span class="icon_text">Cart</span>
            <span class="pops">8</span>
        </a>
    </div>
</div>

<!-- mobile menu -->
<div class="mobile_menwrap d-lg-none" id="mobile_menwrap">
    <div class="mobile_menu_2">
        <h5 class="mobile_title">
            Menu
            <span class="sidebarclose" id="menuclose">
                <i class="las la-times"></i>
            </span>
        </h5>
        <ul>
            <li class="withsub">
                <a href="javascript:void(0)">
                    Home
                </a>
                <div class="submn">
                    <a href="index-1.html">Home 1</a>
                    <a href="index-2.html">Home 2</a>
                    <a href="index-3.html">Home 3</a>
                </div>
            </li>

            <li class="withsub">
                <a href="javascript:void(0)">
                    Shop
                </a>
                <div class="submn">
                    <a href="shop-list.html">List View</a>
                    <a href="shop-grid.html">Grid View</a>
                    <a href="shop-grid-2.html">Grid View 2</a>
                    <a href="wish-list.html">Wishlist</a>
                    <a href="shopping-cart.html">Shopping cart</a>
                    <a href="product-view.html">Product view</a>
                </div>
            </li>
            <li class="withsub">
                <a href="javascript:void(0)">
                    My Account
                </a>
                <div class="submn">
                    <a href="account.html">My account</a>
                    <a href="login.html">Login</a>
                    <a href="register.html">Register</a>
                    <a href="forgot-password.html">Forgot password</a>
                </div>
            </li>
            <li class="withsub">
                <a href="javascript:void(0)">
                    Other pages
                </a>
                <div class="submn">
                    <a href="about-us.html">about us</a>
                    <a href="contact-us.html">Contact us</a>
                    <a href="track-order.html">Track order</a>
                    <a href="faq.html">FAQ</a>
                    <a href="404.html">404</a>
                    <a href="checkout.html">Checkout</a>
                    <a href="payment.html">Payment</a>
                    <a href="order-completed.html">Order complete</a>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--  mobile cart -->


<!-- mobile searchbar -->
<div class="mobile_search_bar">
    <div class="mobile_search_text">
        <p>What you are looking for?</p>
        <span class="close_mbsearch" id="close_mbsearch">
            <i class="las la-times"></i>
        </span>
    </div>
    <form>
        <input type="text" placeholder="search products...">
        <button>
            <i class="icon-search-left"></i>
        </button>
    </form>

    <div class="search_result_product">
        <a href="product-view.html" class="single_sresult_product">
            <div class="sresult_img">
                <img loading="lazy" src="assets/images/laptop-2.png" alt="product">
            </div>
            <div class="sresult_content">
                <h4>HP Pavilion 15</h4>
                <div class="price">
                    <span class="org_price">$45.00</span>
                    <span class="prev_price">$55.45</span>
                </div>
            </div>
        </a>
        <a href="product-view.html" class="single_sresult_product">
            <div class="sresult_img">
                <img loading="lazy" src="assets/images/phone-1.png" alt="product">
            </div>
            <div class="sresult_content">
                <h4>Xiaomi Note 7 Pro</h4>
                <div class="price">
                    <span class="org_price">$45.00</span>
                    <span class="prev_price">$55.45</span>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- mobile category -->
<div class="mobile_menwrap d-lg-none" id="mobile_catwrap">
    <div class="sub_categories">
        <h5 class="mobile_title">
            All categories
            <span class="sidebarclose" id="catclose">
                <i class="las la-times"></i>
            </span>
        </h5>

        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="las la-shoe-prints"></i>
            </span>
            <span class="txt">Shoes</span>
        </a>

        <div class="singlecats withsub">
            <span class="img_wrp">
                <i class="las la-male"></i>
            </span>
            <span class="txt">Men</span>
            <span class="wsicon"><i class="las la-angle-right"></i></span>
            <div class="mega_menu">
                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Hot sale</h4>
                        <div class="mega_categories">
                            <a href="#">Hoodies $ Sweatshirts</a>
                            <a href="#">T-Shirt</a>
                            <a href="#">Men’s Sets</a>
                            <a href="#">Jacket</a>
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Bottoms</h4>
                        <div class="mega_categories">
                            <a href="#">Casual Pants</a>
                            <a href="#">Men’s Sleep & Lounge</a>
                            <a href="#">Jeans</a>
                            <a href="#">Shorts</a>
                            <a href="#">Towel</a>
                        </div>
                    </div>
                </div>

                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Outerwear $ Jackets</h4>
                        <div class="mega_categories">
                            <a href="#">Jacket</a>
                            <a href="#">Sweaters</a>
                            <a href="#">Casual Faux Leather</a>
                            <a href="#">Parks</a>
                            <a href="#">Jeans</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Underwear & Loun</h4>
                        <div class="mega_categories">
                            <a href="#">Boxes</a>
                            <a href="#">Berifs</a>
                            <a href="#">Long Johns</a>
                            <a href="#">Men’s Sleep & Lounge</a>
                            <a href="#">Parks</a>
                        </div>
                    </div>
                </div>

                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Accessories</h4>
                        <div class="mega_categories">
                            <a href="#">Scarves</a>
                            <a href="#">Skullies & Beanies</a>
                            <a href="#">Casual Faux Leather</a>
                            <a href="#">Prescription Glasses</a>
                            <a href="#">Belt</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Novelty & Special</h4>
                        <div class="mega_categories">
                            <a href="#">Cosplay Costumes</a>
                            <a href="#">Stage & Dance Wear</a>
                            <a href="#">Exotic Apparel</a>
                            <a href="#">Scarves</a>
                            <a href="#">Men’s Sets</a>
                        </div>
                    </div>
                </div>
                <div class="single_mega_menu brnd">
                    <div class="mega_brands">
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="las la-female"></i>
            </span>
            <span class="txt">Women</span>
        </a>
        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="las la-plug"></i>
            </span>
            <span class="txt">Electronisc</span>
        </a>
        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="las la-headphones"></i>
            </span>
            <span class="txt">Headphones</span>
        </a>
        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="icon-watch"></i>
            </span>
            <span class="txt">Watches</span>
        </a>
        <div class="singlecats withsub">
            <span class="img_wrp">
                <i class="las la-desktop"></i>
            </span>
            <span class="txt">Computer</span>
            <span class="wsicon"><i class="las la-angle-right"></i></span>
            <div class="mega_menu">
                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Macbook</h4>
                        <div class="mega_categories">
                            <a href="#">Mackbook m1</a>
                            <a href="#">Mackbook pro</a>
                            <a href="#">Mackbook air</a>
                            <a href="#">Mackbook 2015</a>
                            <a href="#">Mackbook 2020</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Laptop</h4>
                        <div class="mega_categories">
                            <a href="#">Razer</a>
                            <a href="#">Hp Laptop</a>
                            <a href="#">Dell Notebook</a>
                            <a href="#">Asus</a>
                            <a href="#">Lenovo</a>
                        </div>
                    </div>
                </div>

                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Dasktop</h4>
                        <div class="mega_categories">
                            <a href="#">Brand Dasktop</a>
                            <a href="#">All in one pc</a>
                            <a href="#">Mini PC</a>
                            <a href="#">Customize PC</a>
                            <a href="#">Dasktop Accessories</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Monitor</h4>
                        <div class="mega_categories">
                            <a href="#">Samsung</a>
                            <a href="#">Philips</a>
                            <a href="#">LG</a>
                            <a href="#">HP</a>
                            <a href="#">Xiaomi</a>
                        </div>
                    </div>
                </div>

                <div class="single_mega_menu">
                    <div class="mega_menu_wrap">
                        <h4>Accessories</h4>
                        <div class="mega_categories">
                            <a href="#">Dasktop Ram</a>
                            <a href="#">Motherboard</a>
                            <a href="#">SSD Card</a>
                            <a href="#">Hard disk</a>
                            <a href="#">Processor</a>
                        </div>
                    </div>
                    <div class="mega_menu_wrap">
                        <h4>Gaming</h4>
                        <div class="mega_categories">
                            <a href="#">Gaming console</a>
                            <a href="#">Gaming Chair</a>
                            <a href="#">Gaming Desk</a>
                            <a href="#">Gaming Controller</a>
                            <a href="#">Keyboard</a>
                        </div>
                    </div>
                </div>
                <div class="single_mega_menu brnd">
                    <div class="mega_brands">
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-1.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-2.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-3.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-4.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-5.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-6.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-7.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-8.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-9.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-10.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-11.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-12.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-13.png" alt="brand">
                        </a>
                        <a href="#" class="mega_brnd_img">
                            <img loading="lazy" src="assets/images/brand-14.png" alt="brand">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="singlecats">
            <span class="img_wrp">
                <i class="las la-mobile"></i>
            </span>
            <span class="txt">Mobile</span>
        </a>
    </div>
</div>

<!-- breadcrumbs -->
<div class="container">
    <div class="breadcrumbs">

    </div>
</div>
