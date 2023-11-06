@php
$img = json_decode($data->images);
@endphp
<div class="message-purchase-main">
    <span class="wn-notification-image-wrapper"><img class="wn-notification-image" src="{{$img[0]}}" loading="lazy"></span>
    <p class="wn-notification-message-container"><a class="wn-popup-product-title-with-link" href="{{route('detailProduct', ['cate'=>$data->cate_slug, 'type'=>($data->type_slug ? $data->type_slug :'slug'), 'id'=>$data->slug])}}">{{$data->name}}</a> {{rand(0, 1235)}} khách hàng đã xem sản phẩm này hôm nay</p>
</div>
