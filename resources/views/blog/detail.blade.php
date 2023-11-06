@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link data-optimized="1" rel='stylesheet' id='elessi-style-posts-css' href='https://bggamingzone.com/wp-content/litespeed/css/3b656983bac88b9db78cbfadf04324e3.css?ver=324e3' type='text/css' media='all' />
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/sv7.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Blog <span class="inner-text">Details</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{languageName($blog_detail->title)}}</li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
    <div class="row gx-50">
        <div class="col-lg-8 col-xxl-9">
            <div class="vs-blog blog-single has-post-thumbnail">
                <div class="blog-content">
                {{-- <div class="blog-category"><a href="blog.html">Beauty</a></div> --}}
                <h2 class="blog-title">{{languageName($blog_detail->title)}}</h2>
                <div class="blog-meta"><a href="javascript:void(0);"><i class="fas fa-user"></i>by Susunails</a> <a href="javascript:void(0);"><i class="fas fa-calendar-alt"></i>{{date("F j, Y", strtotime($blog_detail->created_at))}}</a></div>
                {!! languageName($blog_detail->content) !!}
                </div>
                <div class="share-links clearfix">
                <div class="row justify-content-between">
                    <div class="col-md-auto text-xl-end">
                        <span class="share-links-title">Share:</span>
                        <ul class="social-links">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xxl-3">
            <aside class="sidebar-area">
                <div class="widget widget_categories">
                <h3 class="widget_title">Categories</h3>
                <ul>
                    @foreach ($blogCate as $cate)
                    <li><a href="{{route('listCateBlog', $cate->slug)}}">{{languageName($cate->name)}}</a> <span>{{count($cate->listBlog)}}</span></li>
                    @endforeach
                </ul>
                </div>
                <div class="widget">
                    <h3 class="widget_title">Latest post</h3>
                    <div class="recent-post-wrap">
                        @foreach ($latest_blogs as $blog)
                            <div class="recent-post">
                                <div class="media-img"><a href="{{route('detailBlog', $blog->slug)}}"><img loading="lazy" loading="lazy" src="{{$blog->image}}" alt="{{languageName($blog->title)}}"></a></div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="{{route('detailBlog', $blog->slug)}}">{{languageName($blog->title)}}</a></h4>
                                    <div class="recent-post-meta"><a href="blog.html"><i class="fas fa-calendar-alt"></i>{{date("F j, Y", strtotime($blog->created_at))}}</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
    </div>
</section>
@endsection
