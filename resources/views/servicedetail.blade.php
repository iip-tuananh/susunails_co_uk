@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/sv7.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Service <span class="inner-text">Details</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Service <span class="inner-text">{{($detail_service->name)}}</span></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
    <div class="row flex-row-reverse gx-50">
        <div class="col-lg-8 col-xl mb-30 mb-lg-0">
            {!! languageName($detail_service->content) !!}
        </div>
        <div class="col-lg-4 col-xl-4">
            <aside>
                <div class="service-box" style="width: 100%">
                <h3 class="box-title">All Services</h3>
                <ul class="list-unstyled">
                    @foreach ($services as $service)
                    <li><a href="{{route('serviceDetail', $service->slug)}}">{{$service->name}}</a></li>
                    @endforeach
                </ul>
                </div>
                <div class="widget">
                    <h3 class="widget_title">Latest post</h3>
                    <div class="recent-post-wrap">
                        @foreach ($latest_blogs as $blog)
                            <div class="recent-post">
                                <div class="media-img"><a href="{{route('detailBlog', $blog->slug)}}"><img loading="lazy" src="{{$blog->image}}" srcset="{{$blog->image}} 1x" alt="{{languageName($blog->title)}}"></a></div>
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
