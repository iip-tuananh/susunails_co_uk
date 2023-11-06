@if (count($cart) > 0)
<div class="nasa-minicart-items">
    <div class="woocommerce-mini-cart cart_list product_list_widget ">
        @php
            $totalPrice = 0;
        @endphp
        @foreach ($cart as $item)
        @php
            $price = $item['price'] - ($item['price'] * $item['discount'] / 100);
            $discountPrice = ($item['price'] - ($item['price'] * $item['discount'] / 100)) * $item['quantity'];
            $totalPrice += $discountPrice;
        @endphp
            <div class="nasa-flex align-start mini-cart-item woocommerce-mini-cart-item mini_cart_item">
                <div class="nasa-image-cart-item">
                    <img width="300" height="169" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" loading="lazy" srcset="{{$item['image']}} 300w, {{$item['image']}} 150w, {{$item['image']}} 18w" sizes="(max-width: 300px) 100vw, 300px">
                </div>
                <div class="nasa-info-cart-item padding-left-15 rtl-padding-left-0 rtl-padding-right-15">
                    <div class="mini-cart-info">
                    <div class="nasa-flex jbw align-start">
                        <a class="product-name nasa-bold" href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>($item['type_slug'] ? $item['type_slug'] :'slug'), 'id'=>$item['slug']])}}" title="{{$item['name']}}" style="color: #000">
                        {{$item['name']}}                                        </a>
                        <span class="product-remove">
                        <a href="javascript:void(0);" class="remove remove_from_cart_button item-in-cart nasa-stclose small" aria-label="Remove" title="Remove" onclick="removeItemCart({{$item['id']}})">Remove</a>                                    </span>
                    </div>
                    <div class="nasa-flex jbw align-start mini-cart-item-price margin-top-10">
                        <div class="cart_list_product_quantity">{{$item['quantity']}} × <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div>
                        <div class="mini-cart-item-subtotal nasa-bold margin-left-10 rtl-margin-left-0 rtl-margin-right-10"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></div>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="nasa-minicart-footer">
    <div class="minicart_total_checkout woocommerce-mini-cart__total total">
        <span class="total-price-label">Subtotal</span><span class="total-price right"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span>
    </div>
    <div class="btn-mini-cart inline-lists text-center">
        <p class="woocommerce-mini-cart__buttons buttons">
            <a href="{{route('listCart')}}" class="button wc-forward">Xem giỏ hàng</a><a href="{{route('checkout')}}" class="button checkout wc-forward">Thanh toán</a>
        </p>
    </div>
</div>
@else
<p class="empty woocommerce-mini-cart__empty-message"><i class="nasa-empty-icon icon-nasa-cart-3" style="color: #00000094;"></i>No products in the cart.<a href="javascript:void(0);" class="button nasa-sidebar-return-shop" rel="nofollow">RETURN TO SHOP</a></p>
@endif
