@if (isset($product_add))
<div class="woocommerce-message" role="alert">
    “ {{$product_add['name']}} ” đã được thêm vào giỏ hàng.
</div>
<a class="nasa-close-notice" href="javascript:void(0);"></a>
@endif
@if (isset($product_remove))
<div class="woocommerce-message" role="alert">
    “ {{$product_remove['name']}} ” đã xóa khỏi giỏ hàng.
</div>
<a class="nasa-close-notice" href="javascript:void(0);"></a>
@endif
