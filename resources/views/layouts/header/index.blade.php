<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{route('home')}}"><img loading="lazy" src="{{$setting->logo}}" alt="{{$setting->company}}"></a></div>
        <div class="vs-mobile-menu">
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li><a href="{{route('aboutUs')}}">About Us</a></li>
            <li><a href="{{route('listPrize')}}">Gallery</a></li>
            <li class="menu-item-has-children">
                <a href="{{route('serviceList')}}">Service</a>
                <ul class="sub-menu">
                    @foreach ($services as $service)
                    <li><a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="javascript:void(0);">Blog</a>
                <ul class="sub-menu">
                    @foreach ($blogCate as $cate)
                    <li><a href="{{route('listCateBlog', $cate->slug)}}">{{languageName($cate->name)}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('contactUs')}}">Contact Us</a></li>
        </ul>
        </div>
    </div>
</div>
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget">
        <div class="footer-logo"><img loading="lazy" src="{{$setting->logo}}" alt="logo"></div>
        <div class="info-media1">
            <div class="media-icon"><i class="fal fa-map-marker-alt"></i></div>
            <span class="media-label">{{$setting->address1}}</span>
        </div>
        <div class="info-media1">
            <div class="media-icon"><i class="far fa-phone-alt"></i></div>
            <span class="media-label"><a href="tel:{{str_replace('&', ' &amp; ', $setting->phone1)}}" class="text-inherit">{{$setting->phone1}}</a></span>
        </div>
        <div class="info-media1">
            <div class="media-icon"><i class="fal fa-envelope"></i></div>
            <span class="media-label"><a class="text-inherit" href="mailto:{{$setting->email}}">{{$setting->email}}</a></span>
        </div>
        </div>
        <div class="widget">
        <h3 class="widget_title">Latest post</h3>
        <div class="recent-post-wrap">
            @foreach ($latest_blogs as $blog)
                <div class="recent-post">
                    <div class="media-img"><a href="{{route('detailBlog', $blog->slug)}}"><img loading="lazy" src="{{$blog->image}}" alt="{{languageName($blog->title)}}"></a></div>
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="{{route('detailBlog', $blog->slug)}}">{{languageName($blog->title)}}</a></h4>
                        <div class="recent-post-meta"><a href="blog.html"><i class="fas fa-calendar-alt"></i>{{date("F j, Y", strtotime($blog->created_at))}}</a></div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
{{-- <div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" class="border-theme" placeholder="What are you looking for"> <button type="submit"><i class="fal fa-search"></i></button></form>
</div> --}}
<header class="vs-header header-layout1">
    <div class="header-top">
        <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center">
            <div class="col-auto text-center py-2 py-md-0">
                <div class="header-links style-white">
                    <ul>
                    <li class="d-none d-xxl-inline-block"><i class="far fa-map-marker-alt"></i>{{$setting->address1}}</li>
                    <li><i class="far fa-phone-alt"></i><a href="tel:{{str_replace('&', ' &amp; ', $setting->phone1)}}">{{$setting->phone1}}</a></li>
                    <li><i class="far fa-envelope"></i><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="social-style1">
                    <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="sticky-wrap">
        <div class="sticky-active">
        <div class="container">
            <div class="row justify-content-between align-items-center gx-60">
                <div class="col">
                    <div class="header-logo">
                        <a href="{{route('home')}}">
                            <img loading="lazy" src="{{$setting->logo}}" alt="logo" style="width: 65%;">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <nav class="main-menu menu-style1 d-none d-lg-block">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li><a href="{{route('aboutUs')}}">About Us</a></li>
                        <li><a href="{{route('listPrize')}}">Gallery</a></li>
                        <li class="menu-item-has-children mega-menu-wrap">
                            <a href="{{route('serviceList')}}">Service</a>
                            <ul class="mega-menu row">
                                @foreach ($services as $service)
                                <li class="col-md-4 col-xl-4 col-lg-4">
                                <a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">Blog</a>
                            <ul class="sub-menu">
                                @foreach ($blogCate as $cate)
                                <li><a href="{{route('listCateBlog', $cate->slug)}}">{{languageName($cate->name)}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                    </ul>
                    </nav>
                </div>
                <div class="col-auto">
                    <div class="header-icons">
                        {{-- <button class="searchBoxTggler"><i class="far fa-search"></i></button> --}}
                        <a href="{{route('contactUs')}}?#booking" class="vs-btn style2 d-none d-xl-inline-block">Book</a>
                        <button class="bar-btn sideMenuToggler d-none d-xl-inline-block"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></button>
                        <button class="vs-menu-toggle d-inline-block d-lg-none" type="button"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>
