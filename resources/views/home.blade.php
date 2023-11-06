@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
<section class="hero-layout1">
    <div class="hero-shape-1 jump-reverse" data-top="14%" data-right="42%"><img loading="lazy" src="{{asset('frontend/images/hero-leaf-1.png')}}" alt="hero"></div>
    <div class="hero-shape-2 rotate-img" data-top="13%" data-right="10%"><img loading="lazy" src="{{asset('frontend/images/hero-flower-small.png')}}" alt="hero"></div>
    <div class="hero-shape-3 jump-img" data-bottom="29%" data-right="0%"><img loading="lazy" src="{{asset('frontend/images/hero-leaf-2.png')}}" alt="hero"></div>
    <div class="hero-mask" data-mask-src="{{asset('frontend/images/hero-mask-bg-1.png')}}">
        <div class="vs-carousel" data-slide-show="1" data-fade="true">
            @foreach ($banners as $banner)
            <div>
                <div class="hero-inner">
                    <div class="hero-img">
                        <a href="{{$banner->link}}">
                            <img loading="lazy" src="{{$banner->image}}" alt="hero" style="width: 100%">
                            <div class="hero-ripple"><i class="ripple"></i><i class="ripple"></i></div>
                        </a>
                    </div>
                    {{-- <div class="hero-content">
                        <div class="hero-flower"><img loading="lazy" src="{{asset('frontend/images/hero-flower.png')}}" alt="hero" class="jump"></div>
                        <span class="hero-subtitle">nail & beauty salon</span>
                        <h1 class="hero-title">{{$banner->title}}</h1>
                        <a href="{{$banner->link}}" class="vs-btn style3">Appointment</a>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="body-gradient-1"></div>
    <section class="space-top">
        <div class="shape-mockup jump d-none d-lg-block" data-top="-3%" data-right="4%"><img loading="lazy" src="{{asset('frontend/images/hero-leaf-3.png')}}" alt="leaf"></div>
        <div class="container">
        <div class="title-area text-center">
            <span class="sec-subtitle">nail & beauty salon</span>
            <h2 class="sec-title">Our Service</h2>
            <div class="sec-shape"><img loading="lazy" src="{{asset('frontend/images/sec-shape-1.png')}}" alt="shape"></div>
        </div>
        <div class="row vs-carousel has-slide-shadow" data-slide-show="4" data-ml-slide-show="2" data-lg-slide-show="1" data-md-slide-show="1">
            @foreach ($services as $service)
                <div class="col-xl-3">
                    <a href="{{route('serviceDetail', $service->slug)}}">
                        <div class="category-style1">
                            <div class="category-icon"><img loading="lazy" src="{{$service->image}}" alt="categoryicon" style="height: 250px;"></div>
                            <h3 class="category-name"><a href="{{route('serviceDetail', $service->slug)}}" class="text-inherit">{{$service->name}}</a></h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        </div>
    </section>
    <section class="space-extra-top space-bottom">
        <div class="shape-mockup jump-reverse-img d-none d-xxl-block d-hd-none" data-top="4%" data-left="-3%">
        <div class="curb-shape1"></div>
        </div>
        <div class="shape-mockup jump-img d-none d-lg-block" data-top="6%" data-right="39.2%"><span class="big-letter">A</span></div>
        <div class="container">
        <div class="row gx-xl-0">
            <div class="col-lg-6 col-xl-7 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-box1">
                    <img loading="lazy" src="{{$about_us->image}}" alt="about" style="width: 95%;">
                    <div class="img-1 jump-reverse"><img loading="lazy" src="{{asset('frontend/images/leaf-1-5.png')}}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                <span class="sec-subtitle">nail & beauty salon <span class="sec-subtext">since 2006</span></span>
                <h2 class="sec-title">About Us</h2>
                <div class="media-style1">
                    <div class="circle-btn style3">
                    <a href="{{route('aboutUs')}}" class="btn-icon"><i class="far fa-arrow-right"></i></a>
                    <div class="btn-text">
                        <svg viewBox="0 0 150 150">
                            <text>
                                <textPath href="#textPath">how to make your makeup last all day</textPath>
                            </text>
                        </svg>
                    </div>
                    </div>
                    <div class="media-body">
                    <p class="media-text">Welcome To SuSu Nails.</p>
                    </div>
                </div>
                <p class="about-text">{!! ($about_us->description) !!}</p>
                <a href="{{route('aboutUs')}}" class="vs-btn style3">View More</a>
            </div>
        </div>
        </div>
    </section>
</div>
<section class="space">
    <div class="shape-mockup jump-img d-none d-xl-block" data-right="0" data-bottom="-9%"><img loading="lazy" src="{{asset('frontend/images/b-s-1-1.png')}}" alt="shape"></div>
    {{-- <div class="shape-mockup jump-reverse-img d-none d-xl-block" data-left="0" data-bottom="-13%"><img loading="lazy" src="{{asset('frontend/images/b-s-1-2.png')}}" alt="shape"></div> --}}
    <div class="container">
        <div class="row gx-0">
        <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="form-style2">
                <h2 class="form-title">Book Appointment</h2>
                <p class="form-label">Today For Free</p>
                <div class="form-group"><input type="text" placeholder="Your Name"></div>
                <div class="form-group"><input type="email" placeholder="Email Address"></div>
                <div class="form-group"><input type="date"></div>
                <div class="form-group"><input type="time"></div>
                <div class="form-group"><button class="vs-btn" type="submit">Make Appointment</button></div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.3s">
            <div class="testi-style1" data-bg-src="assets/img/bg/testi-bg-1-1.png">
                <h2 class="inner-title">Our Top Reviews</h2>
                <p class="inner-subtitle">Happy Customer Quotes</p>
                <div class="vs-carousel" data-slide-show="1" data-fade="true" id="testislide1">
                    @foreach ($cus_reviews as $item)
                        <div>
                        <div class="testi-body">
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testi-text">“ {!! languageName($item->content) !!} ”</p>
                            <div class="testi-author">
                                <div class="testi-avater"><img loading="lazy" src="{{$item->avatar}}" alt="avater"></div>
                                <div class="media-body">
                                    <h4 class="testi-name">{{languageName($item->name)}}</h4>
                                    <p class="testi-degi">{{languageName($item->position)}}</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
                <div class="slide-btns"><button data-slick-prev="#testislide1"><i class="far fa-angle-left"></i></button> <button data-slick-prev="#testislide1"><i class="far fa-angle-right"></i></button></div>
            </div>
        </div>
        </div>
    </div>
</section>
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
    <div class="container">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s">
        <span class="sec-subtitle">our blog</span>
        <h2 class="sec-title">Latest News Posts</h2>
        <div class="sec-shape"><img loading="lazy" src="{{asset('frontend/images/sec-shape-1.png')}}" alt="shape"></div>
        </div>
        <div class="row vs-carousel arrow-margin wow fadeInUp" data-wow-delay="0.3s" data-slide-show="3" data-md-slide-show="2" data-arrows="true">
            @foreach ($hot_news as $blog)
            <div class="col-xl-4">
                <div class="vs-blog blog-style1">
                    <div class="blog-img"><a href="{{route('detailBlog', $blog->slug)}}"><img loading="lazy" src="{{$blog->image}}" alt="{{languageName($blog->title)}}" class="w-100"></a></div>
                    <div class="blog-content">
                        <h3 class="blog-title h5"><a href="{{route('detailBlog', $blog->slug)}}">{{languageName($blog->title)}}</a></h3>
                        <div class="blog-meta"><a href="{{route('detailBlog', $blog->slug)}}">{{date("F j, Y", strtotime($blog->created_at))}}</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
