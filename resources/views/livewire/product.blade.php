<div class="col-lg-3 col-sm-6">
    <div class="single_new_arrive">
        <div class="sna_img" style="display: flex;
        justify-content: center;">
            <img loading="lazy" style="max-height: 230px;"src="{{ route('ProductImage', $product->MainImage) }}"
                alt="product">
            @if (!empty($product->Discount))
                <span class="tag">-{{ $product->Discount }}%</span>
            @endif
            <div class="prodcut_hovcont">
                {{-- <a href="javascript:void(0)" class="icon open_quickview" tabindex="0">
                 <i class="bi bi-search"></i>
                </a> --}}
                <a href="{{ route('AddToFavorite', $product->id) }}" class="icon" tabindex="0">
                    <i class="bi bi-suit-heart"></i>
                </a>
            </div>
        </div>
        <div class="sna_content">
            <a
                href="{{ route('ViewProduct', ['ProductName' => implode('-', explode(' ', $product->Title)), 'id' => $product->id]) }}">
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
                <a href="{{ route('AddToCart', $product->id) }}" style="color: #fff;" class="default_btn">adauga in
                    cos</a>
            </div>
        </div>
    </div>
</div>
