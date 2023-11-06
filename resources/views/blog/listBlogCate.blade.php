@extends('layouts.main.master')
@section('title')
{{$title_page}}
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/sv7.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">List <span class="inner-text">Blogs</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{$title_page}}</li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
    <div class="row gx-50">
        <div class="col-lg-8 col-xxl-9">
            @foreach ($blogs as $blog)
                <div class="vs-blog blog-single has-post-thumbnail">
                    <div class="blog-img"><a href="{{route('detailBlog', $blog->slug)}}"><img loading="lazy" src="{{$blog->image}}" alt="Blog Image"></a></div>
                    <div class="blog-content">
                    <div class="blog-category"><a href="{{route('listCateBlog', $blog->category)}}">{{$title_page}}</a></div>
                    <h2 class="blog-title"><a href="{{route('detailBlog', $blog->slug)}}">{{languageName($blog->title)}}</a></h2>
                    <div class="blog-meta"><a href="javascript:void(0);"><i class="fas fa-user"></i>by Susunails</a> <a href="javascript:void(0);"><i class="fas fa-calendar-alt"></i>{{date("F j, Y", strtotime($blog->created_at))}}</a></div>
                    <p class="blog-text">{{languageName($blog->description)}}</p>
                    <a href="{{route('detailBlog', $blog->slug)}}" class="vs-btn">Read More</a>
                    </div>
                </div>
            @endforeach
            <div class="vs-pagination">
                {{$blogs->links()}}
            </div>
            <style>
                .page-item.active .page-link {
                    z-index: 3;
                    color: #fff;
                    background-color: #9a563a;
                    border-color: #9a563a;
                }
            </style>
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
