
@php
$img = json_decode($pro->images);
$disPrice = $pro->price - ($pro->price * $pro->discount / 100);
@endphp
<div class="product type-product post-38365 status-publish first instock product_cat-ban-sung product_cat-epic-games product_cat-goc-nhin-thu-ba product_cat-hanh-dong product_cat-kinh-di product_cat-nhap-vai product_cat-offline-mode product_cat-phieu-luu product_cat-sinh-ton product_cat-steam product_cat-zombie product_tag-bggz product_tag-game-ban-quyen product_tag-game-gia-re product_tag-mua-game product_tag-offline-mode product_tag-steam-offline product_tag-tai-game has-post-thumbnail sale downloadable virtual sold-individually purchasable product-type-simple product-item grid wow fadeInUp hover-fade" data-wow="fadeInUp" data-wow-duration="1s" data-wow-delay="0ms">
    <div class="product-img-wrap">
        @if (isset($pro->discount) && $pro->discount > 0)
        <div class="nasa-badges-wrap"><span class="badge sale-label">&#045;{{$pro->discount}}&#037;</span><span class="badge deal-label">Limited</span></div>
        @endif
        <div class="nasa-sc-pdeal-countdown hidden-tag"></div>
        <div class="nasa-product-grid nasa-group-btns nasa-btns-product-item">
            <a href="javascript:void(0);" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-grid btn-link nasa-tip" onclick="addToCart({{$pro->id}})" data-product_id="{{$pro->id}}" aria-label="Thêm &ldquo;{{$pro->name}}&rdquo; vào giỏ hàng" aria-describedby="" rel="nofollow" title="Thêm vào giỏ hàng"><span class="add_to_cart_text">Thêm vào giỏ hàng</span><i class="cart-icon icon-nasa-cart-2"></i>
            </a>
        </div>
        <a class="product-img" href="{{route('detailProduct', ['cate'=>$pro->cate_slug, 'type'=>($pro->type_slug ? $pro->type_slug :'slug'), 'id'=>$pro->slug])}}" title="{{$pro->name}}">
            <div class="main-img">
            <img width="1200" height="675" src="{{$img[0]}}" class="attachment-shop_catalog size-shop_catalog" alt="" decoding="async" loading="lazy" srcset="{{$img[0]}} 1200w, {{$img[0]}} 450w, {{$img[0]}} 595w, {{$img[0]}} 150w, {{$img[0]}} 768w, {{$img[0]}} 18w, {{$img[0]}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />
            </div>
            @if (isset($img[1]))
            <div class="back-img back"><img width="1920" height="1080" src="{{$img[1]}}" class="attachment-shop_catalog size-shop_catalog" alt="" decoding="async" loading="lazy" srcset="{{$img[1]}} 1920w, {{$img[1]}} 450w, {{$img[1]}} 595w, {{$img[1]}} 150w, {{$img[1]}} 768w, {{$img[1]}} 1536w, {{$img[1]}} 18w, {{$img[1]}} 300w" sizes="(max-width: 1920px) 100vw, 1920px" /></div>
            @endif
        </a>
    </div>
    <div class="product-info-wrap info">
        <a class="name woocommerce-loop-product__title" href="{{route('detailProduct', ['cate'=>$pro->cate_slug, 'type'=>($pro->type_slug ? $pro->type_slug :'slug'), 'id'=>$pro->slug])}}" title="{{$pro->name}}">
            {{$pro->name}}        </a>
        @if ($pro->discount > 0 && $pro->price > 0)
        <span class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($pro->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($disPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
        @else
        <span class="price"> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($disPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
        @endif
        <div class="info_main product-des-wrap product-des">
            {!! languageName($pro->description) !!}
        </div>
    </div>
</div>
