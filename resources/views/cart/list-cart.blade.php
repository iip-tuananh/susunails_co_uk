@if (count($cart) > 0)
<div class="woocommerce-notices-wrapper"></div>
<div class="row">
<div class="large-8 columns rtl-right desktop-padding-right-30 rtl-desktop-padding-right-10 rtl-desktop-padding-left-30 mobile-margin-bottom-30">
    <form class="woocommerce-cart-form nasa-shopping-cart-form" action="" method="post">
        <table class="shop_table cart responsive woocommerce-cart-form__contents">
            <thead>
            <tr>
                <th class="product-name" colspan="3">Product</th>
                <th class="product-price hide-for-small">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-subtotal hide-for-small">Total</th>
            </tr>
            </thead>
            <tbody>
            @php
                $totalPrice = 0;
            @endphp
            @foreach ($cart as $item)
            @php
                $price = $item['price'] - ($item['price'] * $item['discount'] / 100);
                $discountPrice = ($item['price'] - ($item['price'] * $item['discount'] / 100)) * $item['quantity'];
                $totalPrice += $discountPrice;
            @endphp
            <tr class="woocommerce-cart-form__cart-item cart_item">
                <td class="product-remove remove-product">
                    <a href="javascript:void(0);" class="remove nasa-stclose" aria-label="Remove this item" title="Remove this item" onclick="removeItemCart({{$item['id']}})">&times;</a>
                </td>
                <td class="product-thumbnail">
                    <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>($item['type_slug'] ? $item['type_slug'] :'slug'), 'id'=>$item['slug']])}}"><img width="300" height="169" src="{{$item['image']}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" fetchpriority="high" srcset="{{$item['image']}} 300w, {{$item['image']}} 150w, {{$item['image']}} 18w" sizes="(max-width: 300px) 100vw, 300px" /></a>
                </td>
                <td class="product-name" data-title="Product">
                    <a href="{{route('detailProduct', ['cate'=>$item['cate_slug'], 'type'=>($item['type_slug'] ? $item['type_slug'] :'slug'), 'id'=>$item['slug']])}}">{{$item['name']}}</a>
                    <div class="product-price mobile-price hide-for-large hide-for-medium" data-title="Price">
                        <span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                    </div>
                </td>
                <td class="product-price hide-for-small" data-title="Price">
                    <span class="woocommerce-Price-amount amount"><bdi>{{number_format($price, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                </td>
                <td class="product-quantity" data-title="Quantity">
                    {{$item['quantity']}}
                </td>
                <td class="product-subtotal hide-for-small" data-title="Total">
                    <span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="wt_coupon_wrapper">
            <style type="text/css">.wt_sc_single_coupon{ display:inline-block; width:300px; max-width:100%; height:auto; padding:5px; text-align:center; background:#2890a8; color:#ffffff; position:relative; }
            .wt_sc_single_coupon .wt_sc_hidden{ display:none; }
            .wt_sc_single_coupon.active-coupon{ cursor:pointer; }
            .wt_sc_coupon_amount{ font-size:30px; margin-right:5px; line-height:22px; font-weight:500; }
            .wt_sc_coupon_type{ font-size:20px;  font-weight:500; line-height:22px; }
            .wt_sc_coupon_code{ float:left; width:100%; font-size:19px; line-height:22px; }
            .wt_sc_coupon_code code{ background:none; font-size:15px; opacity:0.7; display:inline-block; line-height:22px; max-width:100%; word-wrap:break-word; }
            .wt_sc_coupon_content{ padding:10px 0px; float:left; width:100%; }
            .wt_sc_coupon_desc_wrapper:hover .wt_sc_coupon_desc{ display:block}
            .wt_sc_coupon_desc{position:absolute; top:-18px; background:#333; color:#fff; text-shadow:none; text-align:left; font-size:12px; width:200px; right:-220px; padding:10px 20px; z-index:100; border-radius:8px; display:none; }
            .wt_sc_coupon_desc ul{margin:0!important;text-align:left;list-style-type:disc}
            .wt_sc_coupon_desc ul li{padding:0;margin:0;width:100%;height:auto;min-height:auto;list-style-type:disc!important}
            .wt_sc_coupon_desc_wrapper i.info{position:absolute; top:6px; right:10px; font-size:13px; font-weight:700; border-radius:100%; width:20px; height:20px; background:#fff; text-shadow:none; color:#2890a8; font-style:normal; cursor:pointer; line-height:20px; box-shadow:1px 1px 4px #333; }
            .wt_sc_credit_history_url{font-size:13px;font-weight:700;border-radius:100%;width:20px;height:20px;text-shadow:none;font-style:normal;cursor:pointer;position:absolute;right:12px;bottom:10px;text-align:center;line-height:20px;text-decoration:none!important;background:#fff}
            .wt_sc_credit_history_url span{font:bold 14px/1 dashicons}
            a.wt_sc_credit_history_url span:before{ line-height:20px; color:#2890a8; }
            @media only screen and (max-width: 700px)  {
            .wt_sc_coupon_content{z-index: 5; }
            .wt_sc_single_coupon .wt_sc_coupon_desc{ z-index: 100; right:auto; top:30px; left:0px; }
            }
            </style>
        </div>
    </form>
</div>
<div class="large-4 columns cart-collaterals rtl-left">
    <div class="cart_totals ">
        <h2>Cộng giỏ hàng</h2>
        <table cellspacing="0" class="shop_table shop_table_responsive">
            <tr class="cart-subtotal">
            <th>Tạm tính</th>
            <td data-title="Tạm tính"><span class="woocommerce-Price-amount amount" style="color: #fff"><bdi>{{number_format($totalPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></td>
            </tr>
            <tr class="order-total">
            <th>Tổng</th>
            <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format($totalPrice, 0, '','.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong></td>
            </tr>
        </table>
        <div class="wc-proceed-to-checkout">
            <a href="{{route('checkout')}}" class="checkout-button button alt wc-forward">
            Tiến hành thanh toán</a>
        </div>
    </div>
</div>
</div>
@else
<div class="woocommerce-notices-wrapper">
<div class="woocommerce-message" role="alert">
    “ {{$product_remove['name']}} ” đã xóa.
</div>
<a class="nasa-close-notice" href="javascript:void(0);"></a>
</div>
<div class="cart-empty woocommerce-info">
Chưa có sản phẩm nào trong giỏ hàng.<span class="nasa-extra-empty">Before proceed to checkout you must add some products to shopping cart.</span><span class="nasa-extra-empty">You will find a lot of interesting products on our "Shop" page.</span>
</div>
<p class="return-to-shop">
<a class="button wc-backward" href="{{route('home')}}">
Quay trở lại cửa hàng		</a>
</p>
@endif
