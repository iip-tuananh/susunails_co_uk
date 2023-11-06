@if (count($products) > 0)
<div class="tt-dataset tt-dataset-search">
    @foreach ($products as $product)
    @php
    $img = json_decode($product->images);
    $disPrice = $product->price - ($product->price * $product->discount / 100);
    @endphp
    <div class="item-search tt-suggestion tt-selectable">
        <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'type'=>($product->type_slug ? $product->type_slug :'slug'), 'id'=>$product->slug])}}" class="nasa-link-item-search" title="{{$product->name}}">
            <img width="1200" height="675" src="{{$img[0]}}" class="attachment-shop_catalog size-shop_catalog" alt="" decoding="async" loading="lazy" srcset="{{$img[0]}} 1200w, {{$img[0]}} 450w, {{$img[0]}} 595w, {{$img[0]}} 150w, {{$img[0]}} 768w, {{$img[0]}} 18w, {{$img[0]}} 300w" sizes="(max-width: 1200px) 100vw, 1200px">
            <div class="nasa-item-title-search rtl-right rtl-text-right">
                <p class="nasa-title-item" style="color: #333"><strong class="tt-highlight">{{$product->name}}</strong></p>
                <div class="price text-left rtl-text-right"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($disPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></div>
            </div>
        </a>
    </div>
    @endforeach
    <div class="hidden-tag nasa-search-all-wrap"><a href="javascript:void(0);" class="nasa-search-all button">View All</a></div>
</div>
@else
<div class="tt-dataset tt-dataset-search"><p class="empty-message nasa-notice-empty" style="color: #000">Sorry. No results match your search.</p></div>
@endif

