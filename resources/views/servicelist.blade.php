@extends('layouts.main.master')
@section('title')
List service
@endsection
@section('description')
@endsection
@section('image')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/sv7.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Our <span class="inner-text">Services</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Our <span class="inner-text">Services</span></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="space">
    <div class="service-inner1">
    <div class="shape-mockup jump d-none d-xxl-block" data-top="-10%" data-right="0"><img loading="lazy" src="{{asset('frontend/images/hero-leaf-5.png')}}" srcset="{{asset('frontend/images/hero-leaf-5.png')}} 1x" alt="shape"></div>
    <div class="container-xl">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-5 col-xxl-auto">
                @foreach ($left_list as $item)
                    <div class="service-style1 reverse">
                    <div class="vs-icon"><img loading="lazy" src="{{$item->image}}" srcset="{{$item->image}} 1x" alt="icon" style="height: 99%;
                        width: 100%;
                        border-radius: 50%;"></div>
                    <div class="service-content">
                        <h3 class="service-title"><a href="{{route('serviceDetail', $item->slug)}}" class="text-inherit">{{$item->name}}</a></h3>
                        <p class="service-text">{!!languageName($item->description)!!}</p>
                    </div>
                    </div>
                @endforeach
            </div>
            <div class="col col-xxl-auto text-center d-none d-lg-block"><img loading="lazy" src="{{asset('frontend/images/sr-shape-1-1.png')}}" srcset="{{asset('frontend/images/sr-shape-1-1.png')}} 1x" alt="shape" class="mt-n4"></div>
            <div class="col-md-6 col-lg-5 col-xxl-auto">
                @foreach ($right_list as $item)
                    <div class="service-style1">
                        <div class="vs-icon"><img loading="lazy" src="{{$item->image}}" srcset="{{$item->image}} 1x" alt="icon" style="height: 99%;
                            width: 100%;
                            border-radius: 50%;"></div>
                        <div class="service-content">
                            <h3 class="service-title"><a href="{{route('serviceDetail', $item->slug)}}" class="text-inherit">{{$item->name}}</a></h3>
                            <p class="service-text">{!!languageName($item->description)!!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<section class="space-top space-extra-bottom">
    <div class="parallax" data-parallax-image="{{asset('frontend/images/testi-bg-2-1.jpg')}}"></div>
    <div class="shape-mockup jump-reverse d-none d-xxl-block" data-top="12%" data-right="6%"><img loading="lazy" src="{{asset('frontend/images/leaf-1-1.png')}}" srcset="{{asset('frontend/images/leaf-1-1.png')}} 1x" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="35%" data-left="17.5%"><img loading="lazy" src="{{asset('frontend/images/leaf-1-8.png')}}" srcset="{{asset('frontend/images/leaf-1-8.png')}} 1x" alt="shape"></div>
    <div class="container">
    <div class="title-area text-center">
        <span class="sec-subtitle">nail & beauty salon</span>
        <h2 class="sec-title">Customer Reviews</h2>
    </div>
    <div class="pb-1px"></div>
    <div class="testi-style2">
        <span class="vs-icon"><img loading="lazy" src="{{asset('frontend/images/quote-1-1.png')}}" srcset="{{asset('frontend/images/quote-1-1.png')}} 1x" alt="icon"></span>
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
