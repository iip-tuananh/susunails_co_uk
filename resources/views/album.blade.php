@extends('layouts.main.master')
@section('title')
Our Gallery
@endsection
@section('description')
Our Gallery
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/sv7.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Our <span class="inner-text">Gallery</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Our Gallery</li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="outer-wrap1 pt-20">
    <div class="container-fluid px-0">
        <div class="row gx-20 gy-gx filter-active">
            @foreach ($prizes as $item)
            <div class="col-md-6 col-xxl-3 filter-item">
                <div class="gallery-style1">
                    <div class="gallery-img"><img loading="lazy" src="{{$item->image}}" alt="Gallery Image" class="w-100"></div>
                    <div class="gallery-shape" data-overlay="white" data-opacity="9"></div>
                    <div class="gallery-content">
                        <a href="{{$item->image}}" class="gallery-btn popup-image"><i class="fal fa-plus"></i></a>
                        <h3 class="gallery-title"><a href="{{$item->link}}" class="text-inherit">{{$item->name}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="space-top space-extra-bottom">
    <div class="parallax" data-parallax-image="{{asset('frontend/images/testi-bg-2-1.jpg')}}"></div>
    <div class="shape-mockup jump-reverse d-none d-xxl-block" data-top="12%" data-right="6%"><img loading="lazy" src="{{asset('frontend/images/leaf-1-1.png')}}" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="35%" data-left="17.5%"><img loading="lazy" src="{{asset('frontend/images/leaf-1-8.png')}}" alt="shape"></div>
    <div class="container">
    <div class="title-area text-center">
        <span class="sec-subtitle">nail & beauty salon</span>
        <h2 class="sec-title">Customer Reviews</h2>
    </div>
    <div class="pb-1px"></div>
    <div class="testi-style2">
        <span class="vs-icon"><img loading="lazy" src="{{asset('frontend/images/quote-1-1.png')}}" alt="icon"></span>
        <div class="vs-carousel" data-slide-show="1" data-fade="true" data-arrows="true" data-ml-arrows="true" data-xl-arrows="true" data-lg-arrows="true" data-prev-arrow="fal fa-long-arrow-left" data-next-arrow="fal fa-long-arrow-right">
            @foreach ($cus_reviews as $item)
                <div>
                    <p class="testi-text">“ {!! languageName($item->content) !!} ”</p>
                    <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i><i class="arrow"></i></div>
                    <h3 class="testi-name h5">{{languageName($item->name)}}</h3>
                    <span class="testi-degi">{{languageName($item->position)}}</span>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
@endsection

