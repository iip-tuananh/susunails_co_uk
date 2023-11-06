@extends('layouts.main.master')
@section('title')
{{$product->name}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
$thongsokythuat = json_decode($product->size);
$variant = json_decode($product->variant);
$khuyenmai = json_decode($product->preserve);
$discountPrice = $product->price - ($product->price * ($product->discount / 100));
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
<link data-optimized="1" rel='stylesheet' id='elessi-child-style-css' href='https://bggamingzone.com/wp-content/litespeed/css/539f8d7ca5240781dc134ed5c4a2ee1d.css?ver=2ee1d' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='elessi-style-signle-product-css' href='{{asset('frontend/css/b14bff4cb98a3cc87588696028edccf5.css')}}' type='text/css' media='all' />
@endsection
@section('js')
{{-- <script data-optimized="1" type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/4ce45b6ede58f0373154fe6243285c0d.js?ver=85c0d' id='WCPAY_PRODUCT_DETAILS-js' defer data-deferred="1"></script> --}}
<script data-optimized="1" defer type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/3e2fcdc84dc4a407961a9073879555ad.js?ver=555ad' id='akismet-frontend-js'></script>
<script data-optimized="1" type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/7114feb18a7da9191a8ca3f9b56331be.js?ver=331be' id='nasa-single-product-js' defer data-deferred="1"></script>
<script data-optimized="1" type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/ab4b4ae03daa1735ba387a4bd97330b7.js?ver=330b7' id='jquery-threesixty-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://js.stripe.com/v3/?ver=3.0' id='stripe-js' defer data-deferred="1"></script>
<script data-optimized="1" type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/e0fb4ee0f9cacc38cea6a787af75784c.js?ver=5784c' id='jquery-easyzoom-js' defer data-deferred="1"></script>
<script data-optimized="1" type='text/javascript' src='https://bggamingzone.com/wp-content/litespeed/js/49a0d1d92a3fe735df2ec5164eedc1a7.js?ver=dc1a7' id='elessi-single-product-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/frontend/single-product.min.js' id='wc-single-product-js' defer data-deferred="1"></script>

@endsection
@section('content')
<div id="nasa-breadcrumb-site" class="bread nasa-breadcrumb style-multi nasa-breadcrumb-has-bg">
    <div class="row">
    <div class="large-12 columns nasa-display-table breadcrumb-wrap text-center">
        <nav class="breadcrumb-row" style="height:130px;">
            <span class="nasa-first-breadcrumb">{{$product->name}}</span><span class="breadcrumb"><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a><span class="fa fa-angle-right"></span><a href="{{route('allProduct')}}" title="Cửa hàng">Cửa hàng</a><span class="fa fa-angle-right"></span><a href="{{route('allListProCate', ['danhmuc'=>$product->cate_slug])}}" title="{{languageName($product->cate->name)}}">{{languageName($product->cate->name)}}</a>
            @if (isset($product->typeCate))
            <span class="fa fa-angle-right"></span>
            <a href="{{route('allListType', ['danhmuc'=>$product->cate_slug, 'loaidanhmuc'=>$product->type_slug])}}" title="{{languageName($product->typeCate->name)}}">{{languageName($product->typeCate->name)}}</a>
            @endif
        </span>
        </nav>
    </div>
    </div>
</div>
<main id="main-content" class="site-main light nasa-after-clear">
    <div class="product-page">
        <div class="nasa-ajax-store-wrapper">
            <div id="nasa-ajax-store" class="nasa-ajax-store-content nasa-crazy-load crazy-loading">
                <div class="nasa-progress-bar-load-shop">
                <div class="nasa-progress-per"></div>
                </div>
                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-38273" class="post-38273 product type-product status-publish has-post-thumbnail product_cat-ban-sung product_cat-che-tao product_cat-goc-nhin-thu-ba product_cat-goc-nhin-thu-nhat product_cat-hanh-dong product_cat-nhap-vai product_cat-offline-mode product_cat-phieu-luu product_cat-sinh-ton product_cat-steam product_cat-the-gioi-mo product_cat-xay-dung product_tag-ark product_tag-ark-survival-evolved product_tag-bggz product_tag-game-ban-quyen product_tag-game-gia-re product_tag-mua-game product_tag-offline-mode product_tag-steam-offline product_tag-tai-game pa_he-dieu-hanh-macos pa_he-dieu-hanh-windows pa_nam-phat-hanh-887 pa_nen-tang-steam pa_nha-phat-trien-efecto-studios pa_nha-phat-trien-studio-wildcard pa_nha-phat-trien-virtual-basement-llc pa_the-loai-ban-sung pa_the-loai-che-tao pa_the-loai-goc-nhin-thu-ba pa_the-loai-goc-nhin-thu-nhat pa_the-loai-hanh-dong pa_the-loai-nhap-vai pa_the-loai-phieu-luu pa_the-loai-sinh-ton pa_the-loai-the-gioi-mo pa_the-loai-xay-dung first instock sale downloadable virtual sold-individually purchasable product-type-simple">
                <div class="nasa-toggle-layout-side-sidebar nasa-sidebar-single-product left">
                    <div class="li-toggle-sidebar">
                        <a class="toggle-sidebar-shop nasa-tip" data-tip="Filters" href="javascript:void(0);" rel="nofollow">
                        <i class="nasa-icon pe7-icon pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
                <div class="nasa-row nasa-product-details-page modern nasa-layout-new">
                    <div class="nasa-single-product-scroll nasa-single-product-2-columns" data-num_main="2" data-num_thumb="4" data-speed="300" data-dots="false">
                        <div class="row focus-info">
                            <div class="large-7 small-12 columns product-gallery rtl-right">
                            @if ($product->discount > 0)
                            <div class="nasa-badges-wrap"><span class="badge sale-label">&#045;{{$product->discount}}&#037;</span><span class="badge deal-label">Limited</span></div>
                            @endif
                            <div class="images woocommerce-product-gallery">
                                <div class="row nasa-mobile-row woocommerce-product-gallery__wrapper">
                                    <div class="large-12 columns mobile-padding-left-0 mobile-padding-right-0 nasa-flex align-start">
                                        <div class="nasa-thumb-wrap rtl-right">
                                        <div class="nasa-thumbnail-default-wrap">
                                            <div class="product-thumbnails images-popups-gallery nasa-single-product-thumbnails nasa-thumbnail-default">
                                                @foreach ($img as $key=>$item)
                                                <div class="nasa-wrap-item-thumb nasa-active" data-main="#nasa-main-image-{{$key}}" data-key="{{$key}}" data-thumb_org="{{$item}}"><a href="javascript:void(0);" title="2399830" class="active-thumbnail" rel="nofollow"><img width="150" height="86" src="{{$item}}" class="skip-lazy attachment-thumbnail size-thumbnail wp-post-image" alt="2399830" decoding="async" srcset="{{$item}} 150w, {{$item}} 450w, {{$item}} 595w, {{$item}} 18w, {{$item}} 300w, {{$item}} 616w" sizes="(max-width: 150px) 100vw, 150px" loading="lazy"/></a></div>
                                                @endforeach
                                            </div>
                                        </div>
                                        </div>
                                        <div class="nasa-main-wrap rtl-left">
                                        <div class="product-images-slider images-popups-gallery">
                                            <div class="nasa-main-image-default-wrap">
                                                <div class="main-images nasa-single-product-main-image nasa-main-image-default">
                                                    @foreach ($img as $key=>$item)
                                                    @if ($key == 0)
                                                        <div class="item-wrap first">
                                                        <div class="nasa-item-main-image-wrap" id="nasa-main-image-0" data-key="0">
                                                            <div class="easyzoom first">
                                                                <a href="{{$item}}" class="woocommerce-main-image product-image woocommerce-product-gallery__image" data-o_href="{{$item}}" data-full_href="{{$item}}" title="2399830"><img width="616" height="353" src="{{$item}}" class="skip-lazy attachment-shop_single size-shop_single wp-post-image" alt="2399830" decoding="async" fetchpriority="high" srcset="{{$item}} 616w, {{$item}} 450w, {{$item}} 595w, {{$item}} 150w, {{$item}} 18w" sizes="(max-width: 616px) 100vw, 616px" loading="lazy"/></a>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    @else
                                                        <div class="item-wrap">
                                                            <div class="nasa-item-main-image-wrap" id="nasa-main-image-{{$key}}" data-key="{{$key}}">
                                                                <div class="easyzoom">
                                                                    <a href="{{$item}}" class="woocommerce-main-image product-image" data-o_href="{{$item}}" data-full_href="{{$item}}" title="2399830"><img width="616" height="353" src="{{$item}}" class="skip-lazy attachment-shop_single size-shop_single wp-post-image" alt="2399830" decoding="async" fetchpriority="high" srcset="{{$item}} 616w, {{$item}} 450w, {{$item}} 595w, {{$item}} 150w, {{$item}} 18w" sizes="(max-width: 616px) 100vw, 616px" loading="lazy"/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nasa-end-scroll"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="large-5 small-12 columns product-info summary entry-summary rtl-left">
                            <div class="nasa-product-info-wrap">
                                <div class="nasa-product-info-scroll">
                                    <h1 class="product_title entry-title">{{$product->name}}</h1>

                                    <p class="price nasa-single-product-price">
                                        @if ($product->discount > 0 && $product->price > 0)
                                            <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                        @else
                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                        @endif
                                    </p>
                                    <div class="nasa-last-sold nasa-crazy-inline"><img class="last-sold-img" src="https://bggamingzone.com/wp-content/plugins/nasa-core/assets/images/flame.png" alt="Last Sold" width="18" height="18" />&nbsp;&nbsp;{{isset($product->qty_sale) ? $product->qty_sale : rand(1, 2000)}} sản phẩm đã bán trong thời gian qua</div>
                                    <div class="woocommerce-product-details__short-description">
                                        {!! languageName($product->description) !!}
                                    </div>
                                    <form class="cart">
                                        <button type="submit" name="add-to-cart" class="single_add_to_cart_button button alt add_to_cart_button" data-product_id="{{$product->id}}">Thêm vào giỏ hàng</button>
                                        <button class="nasa-buy-now has-sticky-in-desktop buy-now" data-product_id="{{$product->id}}">BUY NOW</button>
                                    </form>
                                    <div id="payment-method-message"></div>
                                    <div style="margin: 5px 0 10px;">Lưu ý: Không sử dụng account đã cung cấp để bán lại hoặc kinh doanh dưới mọi hình thức</div>
                                    <ul class="nasa-wrap-popup-nodes">
                                        <li class="nasa-popup-node-item hidden-tag nasa-request-a-callback">
                                        <div id="nasa-content-request-a-callback" class="zoom-anim-dialog nasa-node-content nasa-popup-content-contact hidden-tag">
                                            <div class="row nasa-product">
                                                <div class="large-2 medium-2 small-3 columns rtl-right nasa-product-img"><img width="150" height="86" src="https://bggamingzone.com/wp-content/uploads/2023/10/2399830-150x86.jpg" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" srcset="https://bggamingzone.com/wp-content/uploads/2023/10/2399830-150x86.jpg 150w, https://bggamingzone.com/wp-content/uploads/2023/10/2399830-450x258.jpg 450w, https://bggamingzone.com/wp-content/uploads/2023/10/2399830-595x341.jpg 595w, https://bggamingzone.com/wp-content/uploads/2023/10/2399830-18x10.jpg 18w, https://bggamingzone.com/wp-content/uploads/2023/10/2399830-300x169.jpg 300w, https://bggamingzone.com/wp-content/uploads/2023/10/2399830.jpg 616w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                <div class="large-10 medium-10 small-9 columns rtl-right nasa-product-info">
                                                    <p class="name" style="color: #000">{{$product->name}}</p>
                                                    <div class="price">
                                                        @if ($product->discount > 0 && $product->price > 0)
                                                            <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                                        @else
                                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                                        @endif
                                                    </div>
                                                    <div class="hidden-tag nasa-info-add-form"><input type="hidden" name="product-name" value="{{$product->name}}" />
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="nasa-popup-node-item nasa-delivery-return">
                                        <a class="nasa-node-popup" href="javascript:void(0);" data-target="#nasa-content-delivery-return" title="Delivery &#038; Return" rel="nofollow"><i class="nasa-icon pe-7s-next-2 pe-icon"></i>&nbsp;Delivery &#038; Return</a>
                                        <div id="nasa-content-delivery-return" class="zoom-anim-dialog nasa-node-content hidden-tag">
                                            <div class="padding-bottom-0 padding-left-30 padding-right-30 mobile-padding-top-10 mobile-padding-bottom-0 mobile-padding-left-0 mobile-padding-right-0" style="color: #000">
                                                <h2>Nhận hàng</h2>
                                                Sau khi thanh toán bạn sẽ được hệ thống tự động gửi thông tin sản phẩm bạn mua đến Email </br>Đối với sản phẩm không có sẵn hệ thống sẽ chuyển trạng thái đơn sang xử lý khi nhân viên xử lý xong cũng sẽ gửi email thông báo cho khách hàng
                                                <h2>Trả hàng</h2>
                                                Đối với sản phẩm có sẵn hệ thống sẽ tự động gửi sản phẩm ngay sau khi thanh toán nên BGGZ không hoàn tiền đối với trường hợp này.&nbsp;</br>Đối với sản phẩm không có sẵn bạn có thể yêu cầu hoàn tiền hoặc huỷ đơn sau khi thanh toán trong vòng 8 tiếng. Sau thời gian này không hổ trợ hoàn tiền.Thời gian xử lý hoàn tiền trong vòng 24 tiếng.
                                                <h2>Hổ trợ</h2>
                                                Quý kháck có thể gửi hổ trợ đến fanpage hoặc email sau:Email: <a style="color: #000" href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                            </div>
                                        </div>
                                        </li>
                                        <li class="nasa-popup-node-item last nasa-ask-a-quetion">
                                        <a class="nasa-node-popup" href="javascript:void(0);" data-target="#nasa-content-ask-a-quetion" title="Ask a Question" rel="nofollow"><i class="nasa-icon pe-7s-help1 pe-icon"></i>&nbsp;Ask a Question</a>
                                        <div id="nasa-content-ask-a-quetion" class="zoom-anim-dialog nasa-node-content nasa-popup-content-contact hidden-tag">
                                            <div class="row nasa-product">
                                                <div class="large-2 medium-2 small-3 columns rtl-right nasa-product-img"><img width="150" height="86" src="{{$img[0]}}" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" loading="lazy" srcset="{{$img[0]}} 150w, {{$img[0]}} 450w, {{$img[0]}} 595w, {{$img[0]}} 18w, {{$img[0]}} 300w, {{$img[0]}} 616w" sizes="(max-width: 150px) 100vw, 150px" /></div>
                                                <div class="large-10 medium-10 small-9 columns rtl-right nasa-product-info">
                                                    <p class="name" style="color: #000">{{$product->name}}</p>
                                                    <div class="price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount">
                                                        @if ($product->discount > 0 && $product->price > 0)
                                                            <del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($discountPrice, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                                        @else
                                                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($product->price, 0, '', '.')}}&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
                                                        @endif
                                                    </div>
                                                    <div class="hidden-tag nasa-info-add-form"><input type="hidden" name="product-name" value="{{$product->name}}" />
                                                    <input type="hidden" name="product-url" value="https://bggamingzone.com/shop/ark-survival-ascended-offline-mode/" /></div>
                                                </div>
                                            </div>
                                            <div class="nasa-wrap">
                                                <h3 class="nasa-headling-popup text-center nasa-bold-800" style="color: #000">Ask a Question</h3>
                                                <div class="wpcf7 no-js">
                                                    <form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate" data-status="init">
                                                        @csrf
                                                    <div class="nasa-fullwidth">
                                                        <p><label> Your Name (required)<br />
                                                            <span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="name" /></span> </label>
                                                        </p>
                                                    </div>
                                                    <div class="row nasa-hafl-width">
                                                        <div class="large-6 columns">
                                                            <p><label> Your Email (required)<br />
                                                                <span class="wpcf7-form-control-wrap"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" value="" type="email" name="email" /></span> </label>
                                                            </p>
                                                        </div>
                                                        <div class="large-6 columns">
                                                            <p><label> Phone Number<br />
                                                                <span class="wpcf7-form-control-wrap"><input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" aria-invalid="false" value="" type="number" name="phone" /></span> </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="nasa-fullwidth">
                                                        <p><label> Your Message (required)<br />
                                                            <span class="wpcf7-form-control-wrap"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="mess"></textarea></span> </label>
                                                        </p>
                                                    </div>
                                                    <div class="nasa-submit-wrap">
                                                        <p><input class="wpcf7-form-control has-spinner" type="submit" value="Send" /></p>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div id="nasa-counter-viewing" class="nasa-viewing nasa-promote-sales nasa-crazy-inline" data-min="10" data-max="50" data-delay="15000" data-change="5" data-id="38273"><i class="nasa-icon pe-7s-smile pe-icon"></i>&nbsp;&nbsp;<strong class="nasa-count">...</strong>&nbsp;<strong>people</strong>&nbsp;are viewing this right now</div>
                                    <hr class="nasa-single-hr" />
                                    <div class="nasa-single-share">
                                        <div class="nasa-share-label"><i class="nasa-icon pe-7s-share pe-icon"></i>&nbsp;&nbsp;Share</div>
                                        <ul class="social-icons nasa-share">
                                        <li><a href="//www.facebook.com/sharer.php?u={{route('detailProduct', ['cate'=>$product->cate_slug, 'type'=>($product->type_slug ? $product->type_slug :'slug'), 'id'=>$product->slug])}}" target="_blank" class="icon nasa-tip" title="Share on Facebook" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="safe-checkout nasa-crazy-box">
                                        <fieldset>
                                        <legend>Guaranteed Safe Checkout</legend>
                                        <img class="nasa-image" src="https://bggamingzone.com/wp-content/uploads/2020/04/trust-badge.png.webp" alt="Trust" width="838" height="81" loading="lazy"/>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="product-details" id="nasa-single-product-tabs">
                            <div class="nasa-tabs-content woocommerce-tabs">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="nasa-tab-wrap text-center">
                                        <ul class="nasa-tabs nasa-classic-style nasa-classic-2d nasa-tabs-no-border">
                                        <li class="nasa-single-product-tab description_tab nasa-tab active first">
                                            <a href="javascript:void(0);" data-id="#nasa-tab-description" rel="nofollow">
                                            Mô tả                        </a>
                                        </li>
                                        <li class="nasa-single-product-tab additional_information_tab nasa-tab">
                                            <a href="javascript:void(0);" data-id="#nasa-tab-additional_information" rel="nofollow">
                                            Thông tin bổ sung                        </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nasa-panels nasa-desc-wrap">
                                <div class="nasa-panel nasa-content-description active" id="nasa-tab-description">
                                    <div class="row">
                                        <div class="large-12 columns nasa-content-panel">
                                        {!! languageName($product->content) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="nasa-panel nasa-content-additional_information" id="nasa-tab-additional_information">
                                    <div class="row">
                                        <div class="large-12 columns nasa-content-panel">
                                        <table class="woocommerce-product-attributes shop_attributes">
                                            @if (isset($product->year))
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_nam-phat-hanh">
                                                <th class="woocommerce-product-attributes-item__label">Năm Phát Hành</th>
                                                <td class="woocommerce-product-attributes-item__value">
                                                    <p style="color: #ffffffa2">{{$product->year}}</p>
                                                </td>
                                            </tr>
                                            @endif
                                            @if (isset($product->size) && json_decode($product->size)[0]->title != null)
                                            @foreach (json_decode($product->size) as $item)
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_he-dieu-hanh">
                                                    <th class="woocommerce-product-attributes-item__label">{{($item->title)}}</th>
                                                    <td class="woocommerce-product-attributes-item__value">
                                                        <p style="color: #ffffffa2">{{($item->detail)}}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                            @if (isset($product->preserve) && json_decode($product->preserve)[0]->detail != null)
                                            @foreach (json_decode($product->preserve) as $item)
                                                <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_he-dieu-hanh">
                                                    <th class="woocommerce-product-attributes-item__label">{{($item->detail)}}</th>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="nasa-clear-both nasa-min-height"></div>
                        <div class="row">
                            <div class="large-12 columns">
                            <div class="product_meta">
                                <span class="posted_in"><strong style="color: #00fd05">Categories:</strong>
                                    @foreach ($all_type_categories as $key=>$item)
                                    @if ($key != count($all_type_categories) - 1)
                                    <a href="{{route('allListType', ['danhmuc'=>$item->cate_slug, 'loaidanhmuc'=>$item->slug])}}" rel="tag">{{languageName($item->name)}}</a>,
                                    @endif
                                    @if ($key == count($all_type_categories) - 1)
                                    <a href="{{route('allListType', ['danhmuc'=>$item->cate_slug, 'loaidanhmuc'=>$item->slug])}}" rel="tag">{{languageName($item->name)}}</a></span>
                                    @endif
                                    @endforeach
                                <span class="tagged_as"><strong style="color: #00fd05">Tags:</strong>
                                    @foreach ($tags as $key=>$item)
                                    @if ($key != count($tags) - 1)
                                    <a href="#" rel="tag">{{($item->name)}}</a>,
                                    @endif
                                    @if ($key == count($tags) - 1)
                                    <a href="#" rel="tag">{{($item->name)}}</a></span>
                                    @endif
                                    @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="nasa-side-sidebar nasa-sidebar-left">
                        <a href="javascript:void(0);" title="Close" class="hidden-tag nasa-close-sidebar" rel="nofollow">
                        Close                </a>
                        <div class="nasa-sidebar-off-canvas">
                            <div id="nasa_product_categories-3" class="widget woocommerce widget_product_categories">
                            <span class="widget-title">Categories</span>
                            <ul class="nasa-product-categories-widget nasa-product-taxs-widget nasa-root-tax nasa-root-cat product-categories nasa-accordion">
                                @foreach ($categoryhome as $cate)
                                @if ($cate->typeCate->count())
                                    <li class="nasa-tax-item cat-item cat-item-194 cat-item-game root-item cat-parent nasa-tax-parent li_accordion">
                                        <a href="javascript:void(0);" class="accordion" rel="nofollow"></a><a style="color: #000" href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" title="{{languageName($cate->name)}}" class="nasa-filter-item nasa-filter-by-tax nasa-filter-by-cat">{{languageName($cate->name)}}</a>
                                        <ul class='children'>
                                            @foreach ($cate->typeCate as $type)
                                            <li class="nasa-tax-item cat-item cat-item-222 cat-item-anime"><a style="color: #000" href="{{route('allListType', ['danhmuc'=>$cate->slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}" class="nasa-filter-item nasa-filter-by-tax nasa-filter-by-cat">{{languageName($type->name)}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li class="nasa-tax-item cat-item cat-item-927 cat-item-app-store root-item"><a style="color: #000" href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" title="{{languageName($cate->name)}}" class="nasa-filter-item nasa-filter-by-tax nasa-filter-by-cat">{{languageName($cate->name)}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                            </div>
                            <div id="nasa_tag_cloud-2" class="widget widget_nasa_tag_cloud">
                            <span class="widget-title">Tags</span>
                            <div class="tagcloud nasa-tag-cloud nasa-tag-products-cloud">
                                <ul class="nasa-tag-cloud-ul">
                                    @foreach ($tags as $item)
                                    <li><a href="#" class="tag-cloud-link tag-link-686 tag-link-position-1" style="font-size: 10.58064516129pt;" aria-label="{{$item->name}}">{{$item->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @if ($productlq->count())
                <div class="row related-product nasa-slider-wrap related products grid nasa-relative margin-bottom-30">
                <div class="large-12 columns">
                    <h3 class="nasa-title-relate text-center">
                        Related Products
                    </h3>
                </div>
                <div class="large-12 columns">
                    <div class="nasa-slider-items-margin nasa-slick-slider nasa-slick-nav nasa-nav-radius products grid nasa-ver-buttons" data-columns="5" data-columns-small="2" data-columns-tablet="3" data-switch-tablet="767" data-switch-desktop="1024">
                        @foreach ($productlq as $item)
                        @if ($item->id != $product->id)
                        @include('layouts.product.item', ['pro'=>$item])
                        @endif
                        @endforeach
                    </div>
                </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    </main>
@endsection

