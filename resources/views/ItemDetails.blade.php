@extends('layouts.body')

@section('content')
    @foreach ($Product as $product)
        <title>{{ $product->Title }}</title>
        <!-- product view -->
        <div class="product_view_wrap section_padding_b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product_view_slider">
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="single_viewslider">
                                    <img loading="lazy" src="{{ route('ProductImage', $image) }}" alt="product">
                                </div>
                            @endforeach
                        </div>
                        <div class="product_viewslid_nav">
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="single_viewslid_nav">
                                    <img loading="lazy" src="{{ route('ProductImage', $image) }}" alt="product">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="product_info_wrapper">
                            <div class="product_base_info">
                                <h1>{{ $product->Title }}</h1>
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
                                    <p><span>Availability:</span>
                                        @if ($product->Stock >= 1)
                                            <span class="text-green">In Stock</span>
                                        @else
                                            <span class="text-danger">In Stock</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="price mt-3 mb-3 d-flex align-items-center">
                                    @if ($product->Discount >= 1)
                                        <span class="prev_price ms-0">{{ $product->price }} RON</span>
                                    @endif
                                    <span
                                        class="org_price ms-2">{{ $product->price - $product->price * ($product->Discount / 100) }}
                                        RON</span>
                                    @if ($product->Discount >= 1)
                                        <div class="disc_tag ms-3">-{{ $product->Discount }}%</div>
                                    @endif
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
                                <a href="{{ route('AddToCart', $product->id) }}"
                                    class="default_btn small rounded me-sm-3 me-2 px-4"><i class="icon-cart me-2"></i>
                                    Add to Cart</a>
                                <a href="{{ route('AddToFavorite', $product->id) }}"
                                    class="default_btn small rounded second border-none"><i class="icon-heart me-2"></i>
                                    Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_view_tabs mt-4">
                    <div class="pv_tab_buttons" class="spec_text">
                        @if (is_array($product->specifications))
                            <div class="pbt_single_btn active" data-target=".info">Product Info</div>
                        @endif
                        <div class="pbt_single_btn" data-target=".qna">Question & Answer</div>
                        <div class="pbt_single_btn" data-target=".review">Review (10)</div>
                    </div>
                    @if (is_array($product->specifications))
                        <div class="pb_tab_content info active">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="pbt_info_text">
                                        {{ $product->description }}
                                    </div>
                                    <div class="pbt_info_table">

                                        @foreach (json_decode($product->specifications, true) as $specifications)
                                            <div class="pbtit_single">
                                                <p class="specs"><?php for ($i = 0; $i < count($specifications['name']); $i++) {
                                                    echo $specifications['name'][$i];
                                                } ?></p>
                                                <p class="spec_text"><?php for ($i = 0; $i < count($specifications['value']); $i++) {
                                                    echo $specifications['value'][$i];
                                                } ?></p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="pb_tab_content qna">
                        <h4>Question about this product (3)</h4>
                        <div class="pbqna_wrp">
                            <div class="single_pbqna">
                                <div class="pbqna_icon">
                                    <i class="icon-user-line"></i>
                                </div>
                                <div class="pbqna_content">
                                    <h5>Any discount?</h5>
                                    <p>Dr.SaifuzZ. - 27 Oct 2021</p>
                                </div>
                            </div>
                            <div class="single_pbqna">
                                <div class="pbqna_icon">
                                    <i class="las la-headset"></i>
                                </div>
                                <div class="pbqna_content">
                                    <h5>There is no discount sir</h5>
                                    <p>Store Admin - 27 Oct 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="pbqna_wrp">
                            <div class="single_pbqna">
                                <div class="pbqna_icon">
                                    <i class="icon-user-line"></i>
                                </div>
                                <div class="pbqna_content">
                                    <h5>Any discount?</h5>
                                    <p>Dr.SaifuzZ. - 27 Oct 2021</p>
                                </div>

                            </div>
                            <div class="single_pbqna">
                                <div class="pbqna_icon">
                                    <i class="las la-headset"></i>
                                </div>
                                <div class="pbqna_content">
                                    <h5>There is no discount sir</h5>
                                    <p>Store Admin - 27 Oct 2021</p>
                                </div>
                            </div>
                        </div>


                        <div class="pbqna_form">
                            <form action="#">
                                <textarea placeholder="Type your question"></textarea>
                                <button class="default_btn rounded">Ask Question</button>
                            </form>
                        </div>
                    </div>
                    <div class="pb_tab_content review">
                        <div class="review_rating">
                            <div class="total_rating">
                                <div class="trating_number">
                                    <span class="avrage">4.9</span>
                                    <span class="from">/5</span>
                                </div>
                                <div class="rating_star">
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                    <span><i class="las la-star"></i></span>
                                </div>
                                <div class="trating_count">20 Ratings</div>
                            </div>
                            <div class="overall_rating">
                                <div class="single_ovrating d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <div class="rating_pbox"><span style="width: 70%;"></span></div>
                                    <p class="rating_count">18</p>
                                </div>
                                <div class="single_ovrating d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                    </div>
                                    <div class="rating_pbox"><span style="width: 20%;"></span></div>
                                    <p class="rating_count">2</p>
                                </div>
                                <div class="single_ovrating d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                    </div>
                                    <div class="rating_pbox"><span style="width: 0%;"></span></div>
                                    <p class="rating_count">0</p>
                                </div>
                                <div class="single_ovrating d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                    </div>
                                    <div class="rating_pbox"><span style="width: 0%;"></span></div>
                                    <p class="rating_count">0</p>
                                </div>
                                <div class="single_ovrating d-flex align-items-center">
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                    </div>
                                    <div class="rating_pbox"><span style="width: 0%;"></span></div>
                                    <p class="rating_count">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="review_header d-flex align-items-center justify-content-between">
                            <p class="m-0 text-semibold">Product Reviews</p>
                            <div class="review_filters">
                                <select class="nice_select">
                                    <option value="">Sort by</option>
                                    <option value="">Price low-high</option>
                                    <option value="">Price high-low</option>
                                </select>
                            </div>
                        </div>
                        <div class="review_cont_wrap">
                            <div class="single_review_wrp">
                                <div class="review_avatar">
                                    <img loading="lazy" src="assets/images/avatar.png" alt="user">
                                </div>
                                <div class="review_content">
                                    <h5>by Sadat A.</h5>
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                    </div>
                                    <div class="review_date">30 Jul 2021</div>
                                    <div class="review_body">
                                        <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auctor, nisi elit consequat ipsum, nec
                                            sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                        <div class="review_imgs">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_review_wrp border-bottom-0 mb-0 pb-0">
                                <div class="review_avatar">
                                    <img loading="lazy" src="assets/images/avatar.png" alt="user">
                                </div>
                                <div class="review_content">
                                    <h5>by Sadat A.</h5>
                                    <div class="rating_star">
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="las la-star"></i></span>
                                        <span><i class="lar la-star"></i></span>
                                    </div>
                                    <div class="review_date">30 Jul 2021</div>
                                    <div class="review_body">
                                        <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem
                                            quis bibendum auctor, nisi elit consequat ipsum, nec
                                            sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                        <div class="review_imgs">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                            <img loading="lazy" src="assets/images/product.png" alt="review">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- new arrive -->
        <?php $c = 0; ?>
        @foreach ($RelatedProducts as $product)
            @empty(!$product)
                <?php $c++; ?>
                @if ($c == 1)
                    <section class="new_arrive section_padding_b">
                        <div class="container">
                            <div class="d-flex align-items-start justify-content-between">
                                <h2 class="section_title_2">Produse Asemanatoare</h2>
                            </div>
                            <div class="row gy-4">
                                @foreach ($RelatedProducts as $RelatedProduct)
                                    @livewire('App\Http\Livewire\Product', ['ProductData' => $RelatedProduct])
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
            @endempty
        @endforeach
    @endforeach
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
