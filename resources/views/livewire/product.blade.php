<div class="col-lg-3 col-sm-6">
    <div class="single_new_arrive">
        <div class="sna_img">
            <img loading="lazy" class="prd_img" src="assets/images/laptop-3.png" alt="product">
            @if (!empty($product->Discount))
                <span class="tag">-{{ $product->Discount }}%</span>
            @endif
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
            <a href="@php echo implode('-', explode(' ', $product->Title)).'/'. $product->id @endphp">
                <h4>{{ $product->Title }}</h4>
            </a>
            <div>
                <div class="price">
                    <span class="org_price">{{ $product->price - $product->price * ($product->Discount / 100) }}
                        RON</span>
                    @if ($product->Discount >= 1)
                        <span class="prev_price">{{ $product->price }} RON</span>
                    @endif
                </div>

            </div>
            <div class="product_adcar">
                <a href="/AddToCart/{{ $product->id }}" style="color: #fff;" class="default_btn">adauga in
                    cos</a>
            </div>
        </div>
    </div>
</div>