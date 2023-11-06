<div class="nasa-content-page-products">
    <ul class="products grid large-block-grid-5 small-block-grid-2 medium-block-grid-3" data-columns_small="2" data-columns_medium="3">
        @foreach ($product as $item)
            <li class="product-warp-item nasa-ver-buttons">
            @include('layouts.product.item_render', ['pro'=>$item])
            </li>
        @endforeach
    </ul>
</div>
<div id="nasa-paging" class="row nasa-paginations-warp filters-container-down">
    <div class="large-12 columns">
        <div class="nasa-pagination nasa-pagination-store style-2">
        <nav class="page-numbers-wrap">
            {{$product->links()}}
        </nav>
        </div>
    </div>
</div>
<div class="nasa-cat-footer padding-top-20 padding-bottom-50">
    <div class="safe-checkout nasa-crazy-box">
        <fieldset>
        <legend>Guaranteed Safe Checkout</legend>
        <img class="nasa-image" src="https://bggamingzone.com/wp-content/uploads/2020/04/trust-badge.png.webp" alt="Trust" width="838" height="81" loading="lazy"/>
        </fieldset>
    </div>
</div>
