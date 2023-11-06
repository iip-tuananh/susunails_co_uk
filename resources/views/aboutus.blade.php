@extends('layouts.main.master')
@section('title')
About Us
@endsection
@section('description')
{{$setting->company}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/breadcumb-banner.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">About <span class="inner-text">Us</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="shape-mockup jump-img d-none d-xl-block" data-left="34%" data-bottom="1%"><img loading="lazy" src="{{asset('frontend/images/leaf-1-6.png')}}" alt="shape"></div>
    <div class="container">
    <div class="row justify-content-between gx-0">
        <div class="col-md-10">
            <span class="sec-subtitle">welcome</span>
            <h2 class="h3 pe-xxl-5 me-xxl-5 mb-md-5 pb-xl-3">{!! $gioi_thieu->description !!}</h2>
        </div>
        <div class="col-auto mb-5 mb-md-0">
            <div class="pt-1 mt-2">
                <div class="circle-btn style2">
                <a href="{{route('serviceList')}}" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                <div class="btn-text">
                    <svg viewBox="0 0 150 150">
                        <text>
                            <textPath href="#textPath">to check our wellnez top rated services</textPath>
                        </text>
                    </svg>
                </div>
                </div>
            </div>
        </div>
    </div>
    <p class="fs-22 font-title text-title mb-4 mb-lg-5">{!! $gioi_thieu->content !!}</p>
    {{-- <div class="row justify-content-between">
        <div class="col-xl-4 mb-3 mb-xl-0">
            <h3 class="text-uppercase font-body mt-n1">DISCOVER <span class="text-theme">Wellnez</span> Service</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto velit, porro doloremque cupiditate sint, quam provident fugit facilis soluta eos quos ab laborum.</p>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="row gx-60">
                <div class="col-auto"><span class="about-number">01</span></div>
                <div class="col">
                <h4 class="fw-medium fs-26 font-body mt-n1 mb-lg-3 pb-lg-1">Beauty Should Products</h4>
                <div class="list-style1">
                    <ul class="list-unstyled">
                        <li>Feature Support</li>
                        <li>Expeort Care</li>
                        <li>Brand Product</li>
                        <li>Quite Enviorment</li>
                        <li>Outstanding Look</li>
                        <li>Popular Service</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="row gx-60">
                <div class="col-auto"><span class="about-number">02</span></div>
                <div class="col">
                <h4 class="fw-medium fs-26 font-body mt-n1 mb-lg-3 pb-lg-1">Popular Skin Treatment</h4>
                <div class="list-style1">
                    <ul class="list-unstyled">
                        <li>Relax Mind</li>
                        <li>Face Oil Massage</li>
                        <li>Body Massage</li>
                        <li>Black Massage</li>
                        <li>Outstanding Support</li>
                        <li>Happy Customers</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div> --}}
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
