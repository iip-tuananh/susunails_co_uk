@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
<script data-optimized="1" type='text/javascript' src='{{asset('frontend/js/e35c55aa15cd35b43e02c71d8fae45c9.js')}}' id='elessi-store-ajax-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.3.2/wp-includes/js/jquery/ui/core.min.js' id='jquery-ui-core-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.3.2/wp-includes/js/jquery/ui/mouse.min.js' id='jquery-ui-mouse-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/c/6.3.2/wp-includes/js/jquery/ui/slider.min.js' id='jquery-ui-slider-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js' id='wc-jquery-ui-touchpunch-js' defer data-deferred="1"></script>
<script type='text/javascript' src='https://c0.wp.com/p/woocommerce/7.8.0/assets/js/accounting/accounting.min.js' id='accounting-js' defer data-deferred="1"></script>
<script>
    var arr = [];
    function filter(e) {
        if ($(e).hasClass('nasa-filter-var-chosen')) {
            $(e).removeClass('nasa-filter-var-chosen');
            var index = arr.indexOf($(e).attr('title'));
            if (index !== -1) {
                arr.splice(index, 1); // Xóa 1 phần tử tại vị trí index
            }
        } else {
            $(e).addClass('nasa-filter-var-chosen');
            arr.push($(e).attr('title'));
        }
        let cate = "{{$cate_slug ?? ''}}";
        let type = "{{$type_slug ?? ''}}";
        let reset = 0;
        if (arr.length == 0) {
            reset = 1;
        }
        $.ajax({
            type: 'post',
            url: '{{route("filterProduct")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {years: arr, reset: reset, cate: cate, type: type},
            success: function(data) {
                $('.product-list-filter').html(data.html);
            }
        })
    }
    function sortFilter(e) {
        let cate = "{{$cate_slug ?? ''}}";
        let type = "{{$type_slug ?? ''}}";
        $.ajax({
            type: 'post',
            url: '{{route("filterProduct")}}',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {sortby: e, cate: cate, type:type},
            success: function(data) {
                $('.product-list-filter').html(data.html);
            }
        })
    }
    // function filterPriceMin(e) {
    //     let cate = "{{$cate_slug ?? ''}}";
    //     let type = "{{$type_slug ?? ''}}";
    //     let min_price = $(e).val();
    //     console.log(min_price);
    //     $.ajax({
    //         type: 'post',
    //         url: '{{route("filterProduct")}}',
    //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //         data: {sortby: e, cate: cate, type:type},
    //         success: function(data) {
    //             $('.product-list-filter').html(data.html);
    //         }
    //     })
    // }
</script>
@endsection
@section('css')
<link data-optimized="1" rel='stylesheet' id='elessi-style-products-list-css' href='https://bggamingzone.com/wp-content/litespeed/css/3dcc4815d0c39f115fe9f1d27dcce432.css?ver=ce432' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='elessi-style-archive-products-css' href='{{asset('frontend/css/8b357ea1599a4a1a740c8cbee6a78d85.css')}}' type='text/css' media='all' />
<link data-optimized="1" rel='stylesheet' id='elessi-child-style-css' href='https://bggamingzone.com/wp-content/litespeed/css/539f8d7ca5240781dc134ed5c4a2ee1d.css?ver=2ee1d' type='text/css' media='all' />
<style>
    @media only screen and (max-width: 767px) {
        .form-filter .widget-title {
            color: #000;
        }
        .form-filter .nasa-li-filter-default a {
            color: #000;
        }
    }
</style>
@endsection
@section('content')
<div id="nasa-breadcrumb-site" class="bread nasa-breadcrumb style-multi nasa-breadcrumb-has-bg">
    <div class="row">
    <div class="large-12 columns nasa-display-table breadcrumb-wrap text-center">
        <nav class="breadcrumb-row" style="height:130px;">
            <h1 class="nasa-first-breadcrumb">{{$title}}</h1>
            <span class="breadcrumb"><a href="{{route('home')}}" title="Home">Home</a><span class="fa fa-angle-right"></span><a href="{{route('allProduct')}}" title="Cửa hàng">Cửa hàng</a></span>
        </nav>
    </div>
    </div>
</div>
<main id="main-content" class="site-main light nasa-after-clear">
    <div class="nasa-ajax-store-wrapper">
    <div id="nasa-ajax-store" class="nasa-ajax-store-content nasa-crazy-load crazy-loading">
        <div class="nasa-progress-bar-load-shop">
            <div class="nasa-progress-per"></div>
        </div>
        <div class="woocommerce-notices-wrapper"></div>
        <div class="row fullwidth category-page nasa-store-page nasa-top-sidebar-style">
            <div class="nasa_shop_description-wrap large-12 columns">
                <div class="nasa_shop_description page-description padding-top-20"></div>
            </div>
            <div class="large-12 columns form-filter">
                <div class="row filters-container nasa-filter-wrap top-bar-wrap-type-1">
                <div class="large-12 columns nasa-topbar-filter-wrap">
                    <div class="nasa-flex jbw nasa-topbar-all">
                        <div class="nasa-filter-action nasa-min-height">
                            <div class="nasa-labels-filter-top">
                                <input name="nasa-labels-filter-text" type="hidden" value="Filter by:">
                                <input name="nasa-widget-show-more-text" type="hidden" value="More +">
                                <input name="nasa-widget-show-less-text" type="hidden" value="Less -">
                                <input name="nasa-limit-widgets-show-more" type="hidden" value="5">
                            <a class="toggle-topbar-shop-mobile hidden-tag" href="javascript:void(0);" rel="nofollow">
                            <i class="pe-7s-filter"></i>&nbsp;Filters                                </a>
                            <span class="nasa-labels-filter-accordion nasa-flex"></span>
                            </div>
                        </div>
                        <div class="nasa-sort-by-action">
                            <ul class="sort-bar nasa-flex margin-top-0">
                            <li class="nasa-filter-order filter-order">
                                <form class="woocommerce-ordering">
                                    <span class=" margin-right-5 rtl-margin-right-0 rtl-margin-left-5">Sort by</span>
                                    <select name="orderby" aria-label="Shop order" onchange="sortFilter(value)">
                                        <option value="date-desc" selected='selected'>Default sorting</option>
                                        <option value="popularity" >Popularity</option>
                                        <option value="rating" >Average rating</option>
                                        <option value="date-asc"  >Latest</option>
                                        <option value="price-asc" >Price: Ascending</option>
                                        <option value="price-desc" >Price: Decrease</option>
                                    </select>
                                    <div class="nasa-ordering">...</div>
                                </form>
                            </li>
                            </ul>
                        </div>
                        <div class="nasa-topbar-change-view-wrap nasa-flex hide-for-medium hide-for-small">
                            <input type="hidden" name="nasa-data-sidebar" value="top-push-cat" />
                            <div class="filter-tabs nasa-change-view">
                            <a href="javascript:void(0);" class="nasa-change-layout productGrid grid-5 active df" data-columns="5" rel="nofollow">
                            <i class="icon-nasa-5column"></i>
                            </a><a href="javascript:void(0);" class="nasa-change-layout productGrid grid-4" data-columns="4" rel="nofollow">
                            <i class="icon-nasa-4column"></i>
                            </a><a href="javascript:void(0);" class="nasa-change-layout productGrid grid-3" data-columns="3" rel="nofollow">
                            <i class="icon-nasa-3column"></i>
                            </a>
                            <a href="javascript:void(0);" class="nasa-change-layout productList list" data-columns="1" rel="nofollow">
                            <i class="icon-nasa-list"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nasa-relative hidden-tag large-12 columns nasa-top-sidebar">
                    <span class="nasa-close-sidebar-wrap hidden-tag">
                    <a href="javascript:void(0);" title="Close" class="hidden-tag nasa-close-sidebar" rel="nofollow">Close</a>
                    </span>
                    <div id="nasa_product_categories-2" class="widget nasa-widget-store woocommerce widget_product_categories">
                        <span class="widget-title">Categories</span>
                        <div class="nasa-widget-filter-cats-topbar">
                            <ul class="nasa-product-categories-widget nasa-product-taxs-widget nasa-root-tax nasa-root-cat product-categories nasa-accordion">
                                @foreach ($all_categories as $cate)
                                    @if ($cate->typeCate->count())
                                    <li class="nasa-tax-item cat-item cat-item-194 cat-item-game root-item cat-parent nasa-tax-parent li_accordion">
                                        <a href="javascript:void(0);" class="accordion" rel="nofollow"></a><a href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" title="{{languageName($cate->name)}}" >{{languageName($cate->name)}}</a>
                                        <ul class='children'>
                                            @foreach ($cate->typeCate as $type)
                                            <li ><a href="{{route('allListType', ['danhmuc'=>$cate->slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}" >{{languageName($type->name)}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li ><a href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" title="{{languageName($cate->name)}}" >{{languageName($cate->name)}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="nasa_woocommerce_filter_variations-2" class="widget nasa-widget-store woocommerce widget_layered_nav nasa-widget-has-active">
                        <span class="widget-title">Thể Loại</span>
                        <div id="nasa_woocommerce_filter_variations-2-ajax-wrap" class="nasa-filter-variations-widget-wrap">
                            <ul class="nasa-variation-filters nasa-variations-default small-block-grid-1 medium-block-grid-4 large-block-grid-5">
                                @foreach ($all_type_categories as $type)
                                <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-the-loai"><a class="nasa-filter-by-variations nasa-filter-default" title="{{languageName($type->name)}}" href="{{route('allListType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}"><span class="nasa-text-variation nasa-text-variation-default">{{languageName($type->name)}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{-- <div id="nasa_woocommerce_filter_variations-3" class="widget nasa-widget-store woocommerce widget_layered_nav nasa-widget-has-active">
                        <span class="widget-title">Nền Tảng</span>
                        <div id="nasa_woocommerce_filter_variations-3-ajax-wrap" class="nasa-filter-variations-widget-wrap">
                            <ul class="nasa-variation-filters nasa-variations-size small-block-grid-1 medium-block-grid-4 large-block-grid-7">
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_129"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Epic Games" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=epic-games&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Epic Games</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_130"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Microsoft" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=microsoft&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Microsoft</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_780"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Mojang" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=mojang&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Mojang</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_86"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Origin" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=origin&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Origin</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_853"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="PlatinumGames" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=platinumgames&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">PlatinumGames</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_82"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Steam" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=steam&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Steam</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_100"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Ubisoft" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=ubisoft&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Ubisoft</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_845"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="Xbox" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=xbox&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">Xbox</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_926"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="App Store" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=app-store&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">App Store</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_937"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="EA Play" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=ea-play&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">EA Play</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_933"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="PS4" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=ps4&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">PS4</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-size nasa-attr-nen-tang nasa_nen-tang_934"><a class="nasa-filter-by-variations nasa-filter-by-attrs nasa-filter-size" title="PS5" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;filter_nen-tang=ps5&#038;query_type_nen-tang=or"><span class="nasa-text-variation nasa-text-variation-size">PS5</span></a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div id="nasa_woocommerce_filter_variations-4" class="widget nasa-widget-store woocommerce widget_layered_nav nasa-widget-has-active">
                        <span class="widget-title">Năm Phát Hành</span>
                        <div id="nasa_woocommerce_filter_variations-4-ajax-wrap" class="nasa-filter-variations-widget-wrap">
                            <ul class="nasa-variation-filters nasa-variations-default small-block-grid-1 medium-block-grid-4 large-block-grid-5">
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_906"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2006" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2006</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_829"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2008" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2008</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_825"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2009" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2009</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_835"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2010" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2010</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_779"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2011" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2011</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_834"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2012" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2012</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_783"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2013" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2013</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_786"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2014" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2014</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_667"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2015" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2015</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_665"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2016" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2016</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_284"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2017" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2017</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_689"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2018" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2018</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_256"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2019" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2019</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_283"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2020" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2020</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_250"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2021" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2021</span></a></li>
                            <li class="nasa-even no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_248"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2022" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2022</span></a></li>
                            <li class="nasa-odd no-hidden nasa-li-filter-default nasa-attr-nam-phat-hanh nasa_nam-phat-hanh_887"><a class="nasa-filter-by-variations nasa-filter-default filter-item" onclick="filter(this)" title="2023" href="javascript:void(0);"><span class="nasa-text-variation nasa-text-variation-default">2023</span></a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div id="nasa_woocommerce_price_filter-2" class="widget nasa-widget-store woocommerce widget_price_filter nasa-price-filter-slide nasa-widget-has-active">
                        <div id="nasa_woocommerce_price_filter-2-ajax-wrap" class="nasa-filter-price-widget-wrap">
                            <span class="widget-title">Price</span>
                            <form method="get" action="">
                            <div class="price_slider_wrapper" style="padding-top: 0px;">
                                <div class="price_slider"></div>
                                <div class="price_slider_amount" style="display:inline-flex">
                                    <input type="text" name="min_price" id="filter-min-price" oninput="filterPriceMin(this)" value="0" data-min="0" placeholder="Min price" style="width: 100px;"/>
                                    <input type="text" name="max_price" id="filter-max-price" oninput="filterPriceMax(this)" value="180000" data-max="180000000" placeholder="Max price" style="width: 100px;"/>
                                    <div class="price_label" style="margin-left: 50px;">Price: <span class="from"></span> &mdash; <span class="to"></span>
                                        <a href="javascript:void(0);" class="reset_price" data-filtered="0" rel="nofollow">Reset</a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div> --}}
                    {{-- <div id="nasa_woocommerce_status_filter-2" class="widget nasa-widget-store woocommerce widget_status_filter nasa-any-filter nasa-widget-has-active">
                        <span class="widget-title">Status</span>
                        <ul class="nasa-product-status-widget small-block-grid-1 medium-block-grid-4 large-block-grid-6 nasa-after-clear">
                            <li><a class="nasa-filter-status nasa-filter-onsale" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;on-sale=1" title="On Sale" data-filter="on-sale">On Sale</a></li>
                            <li><a class="nasa-filter-status nasa-filter-feature" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;featured=1" title="Featured" data-filter="featured">Featured</a></li>
                            <li><a class="nasa-filter-status nasa-filter-instock" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;in-stock=1" title="In Stock" data-filter="in-stock">In Stock</a></li>
                            <li><a class="nasa-filter-status nasa-filter-onbackorder" href="https://bggamingzone.com/product-category/offline-mode/?orderby=date&#038;on-backorder=1" title="On Backorder" data-filter="on-backorder">On Backorder</a></li>
                        </ul>
                    </div> --}}
                </div>
                </div>
            </div>
            <div class="nasa-archive-product-content nasa-after-clear margin-bottom-40">
                <div class="nasa-push-cat-filter"></div>
                <div class="nasa-products-page-wrap large-12 columns no-sidebar top-sidebar nasa-has-push-cat">
                <div class="nasa-archive-product-warp product-list-filter">
                    <div class="nasa-content-page-products">
                        <ul class="products grid large-block-grid-5 small-block-grid-2 medium-block-grid-3" data-columns_small="2" data-columns_medium="3">
                            @foreach ($list as $item)
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
                                {{$list->links()}}
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
                </div>
                </div>
            </div>
            <div class="margin-bottom-50 mobile-margin-bottom-20 nasa-recommend-product large-12 columns">
                <div class="woocommerce">
                <div class="margin-bottom-15 nasa-warp-slide-nav-top title-align-center">
                    <div class="nasa-title">
                        <h3 class="nasa-heading-title">
                            Recommend Products
                        </h3>
                        <hr class="nasa-separator" />
                    </div>
                </div>
                <div class="nasa-relative nasa-slider-wrap nasa-slide-style-product-carousel nasa-warp-slide-nav-top title-align-center">
                    <div class="nasa-slider-items-margin nasa-slick-slider products grid nasa-ver-buttons nasa-slick-nav nasa-nav-top-radius nasa-nav-radius" data-columns="5" data-columns-small="2" data-columns-tablet="3" data-autoplay="false" data-slides-all="false" data-delay="6000" data-height-auto="false" data-dot="false" data-switch-tablet="767" data-switch-desktop="1024">
                        @foreach ($homePro as $item)
                        @include('layouts.product.item', ['pro'=>$item])
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
