<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Language" content="vi" />
    <link rel="alternate" href="{{url()->current()}}" hreflang="vi-vn" />
    <meta name="description" content="@yield('title')">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="@yield('title')" />
    <meta name="rating" content="General">
    <meta name="application-name" content="@yield('title')" />
    <meta name="theme-color" content="#ed3235" />
    <meta name="msapplication-TileColor" content="#ed3235" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="{{url()->current()}}" />
    <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('title')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{url()->current()}}">
    <meta property="og:image:alt" content="@yield('title')">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@{{url()->current()}}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="twitter:url" content="" />
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('title')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="">
    <link rel="canonical" href="{{\Request::url()}}">
    <!-- <link rel="amphtml" href="amp/" /> -->
    <link rel="image_src" href="@yield('image')" />
    <link rel="image_src" href="@yield('image')" />
    <link rel="shortcut icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
    <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap" rel="stylesheet">

    <link rel='preload' as="style" href='{{asset('frontend/css/app.min.css')}}' type='text/css' />
    <link rel="stylesheet" href="{{asset('frontend/css/app.min.css')}}">
    <link rel='preload' as="style" href='{{asset('frontend/css/fontawesome.min.css')}}' type='text/css' />
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    <link rel='preload' as="style" href='{{asset('frontend/css/style.css')}}' type='text/css' />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
</head>
<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div>
    <svg viewBox="0 0 150 150" class="svg-hidden">
        <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
    </svg>
    @include('layouts.header.index')
    @yield('content')
    @include('layouts.footer.index')
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <script src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/js/app.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
