{{-- <footer class="footer-wrapper footer-layout2">
    <div class="footer-top" data-bg-src="assets/img/bg/footer-2-1.png">
        <form action="#" class="form-style3">
        <h2 class="form-title">Subscribe for our newsletter</h2>
        <div class="form-group"><input type="email" class="form-control" placeholder="Enter your email"> <button class="vs-btn style5" type="submit">Subscribe</button></div>
        </form>
    </div>
    <div class="footer-logo"><a href="{{route('home')}}"><img loading="lazy" src="assets/img/logo-3.svg" alt="logo"></a></div>
    <div class="footer-number"><a href="tel:+01234567890">+0 123 456 7890</a> - 8:00 am – 11:30 pm</div>
    <div class="copyright-menu">
        <ul>
        <li><a href="{{route('home')}}">HOME</a></li>
        <li><a href="service.html">service</a></li>
        <li><a href="price-plan.html">Pricing</a></li>
        <li><a href="blog.html">blog</a></li>
        <li><a href="shop.html">shop</a></li>
        <li><a href="contact.html">contact</a></li>
        </ul>
    </div>
    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="{{route('home')}}">Wellnez</a>. All Rights Reserved By <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a></p>
</footer> --}}
<footer class="footer-wrapper footer-layout1">
    <div class="footer-top">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-md-4 d-none d-lg-flex">
                <div class="social-style2">
                    <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="vs-logo"><a href="{{route('home')}}"><img loading="lazy" src="{{$setting->logo}}" alt="logo"></a></div>
            </div>
            <div class="col-md-7 col-lg-4">
                <form action="#" class="form-style1">
                <h3 class="form-title">Our newsletter</h3>
                <div class="form-group"><input type="email" placeholder="Enter your email..."> <button class="vs-btn" type="submit">Subscribe</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="widget-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3 col-lg-3">
                <div class="widget footer-widget">
                <h3 class="widget_title">About Wellnez</h3>
                <p class="footer-info"><i class="fal fa-map-marker-alt text-theme me-2"></i> {{$setting->address1}}<br><a href="tel:{{str_replace('&', ' &amp; ', $setting->phone1)}}" class="text-inherit"><i class="far fa-phone-alt text-theme me-2"></i>{{$setting->phone1}}</a><br><a class="text-inherit" href="mailto:{{$setting->email}}"><i class="fal fa-envelope text-theme me-2"></i>{{$setting->email}}</a></p>
                <h4 class="fs-22 mb-2">Open Hours</h4>
                <p class="footer-time">Monday to Saturday <span class="time">09:00AM - 06:30PM</span></p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-lg-3">
                <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Important Links</h3>
                <div class="menu-all-pages-container footer-menu">
                    <ul class="menu">
                        <li><a href="{{route('serviceList')}}">Serivces</a></li>
                        <li><a href="{{route('aboutUs')}}">ABOUT US</a></li>
                        <li><a href="price-plan.html">Price Plan</a></li>
                        <li><a href="{{route('contactUs')}}">CONTACT</a></li>
                        <li><a href="blog.html">Our Blog</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-lg-3">
                <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">CATEGORIES</h3>
                <div class="menu-all-pages-container footer-menu">
                    <ul class="menu">
                        @foreach ($services as $service)
                        <li><a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 col-lg-3">
                <div class="widget footer-widget">
                <h3 class="widget_title">Recent Post</h3>
                <div class="recent-post-wrap">
                    @foreach ($footer_blogs as $blog)
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
    </div>
    </div>
    <div class="copyright-wrap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto text-center">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="{{route('home')}}">{{$setting->company}}</a>. All Rights Reserved !</p>
            </div>
            <div class="col-auto d-none d-md-block"><img loading="lazy" src="{{asset('frontend/images/cards.png')}}" alt="cards"></div>
        </div>
    </div>
    </div>
</footer>
