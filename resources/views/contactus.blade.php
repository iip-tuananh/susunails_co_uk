@extends('layouts.main.master')
@section('title')
Contact With Us
@endsection
@section('description')
Contact With Us
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{asset('frontend/images/breadcumb-banner.jpg')}}">
    <div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Contact <span class="inner-text">Us</span></h1>
        <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Contact <span class="inner-text">Us</span></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<section class="space">
    <div class="container">
    <div class="row gx-70">
        <div class="col-lg-6 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s" id="booking">
            <div class="text-center text-lg-start">
                <span class="sec-subtitle">Experience</span>
                <h2 class="sec-title3 h1 text-uppercase mb-xxl-2 pb-xxl-1">Get in <span class="text-theme">Touch</span></h2>
                <div class="col-xxl-10 pb-xl-3">
                {{-- <p class="pe-xxl-4">We think your skin should look and refshed matter Nourish your outer inner beauty with our essential</p> --}}
                </div>
            </div>
            <form action="{{route('postcontact')}}" method="POST" class="ajax-contact form-style6">
                @csrf
                <div class="form-group"><input type="text" name="name" id="name" placeholder="Your Name*"></div>
                <div class="form-group"><input type="number" name="phone" id="phone" placeholder="Your Phone*"></div>
                <div class="form-group"><input type="email" name="email" id="email" placeholder="Your Email*"></div>
                <div class="form-group"><input type="date" name="date" id="date" placeholder="Date*"></div>
                <div class="form-group"><input type="time" name="time" id="time" placeholder="Time*"></div>
                <div class="form-group">
                <select name="subject" id="subject">
                    <option value="" selected="selected" disabled="disabled" hidden>Subject*</option>
                    @foreach ($services as $service)
                    <option value="{{$service->name}}">{{$service->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group"><textarea name="message" id="message" placeholder="Message*"></textarea></div>
                <button class="vs-btn" type="submit">Send Message</button>
                <p class="form-messages"></p>
            </form>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="contact-map">{!!$setting->iframe_map!!}</div>
            <div class="contact-table">
                <div class="tr">
                <div class="tb-col"><span class="th">Address :</span> <span class="td">{{$setting->address1}}</span></div>
                </div>
                <div class="tr">
                <div class="tb-col"><span class="th">email :</span> <span class="td"><a href="mailto:{{$setting->email}}" class="text-inherit">{{$setting->email}}</a></span></div>
                <div class="tb-col"><span class="th">time : </span><span class="td">09 : 00 AM - 06 : 30 PM</span></div>
                </div>
            </div>
            <span class="h1"><a href="tel:{{str_replace('&', ' &amp; ', $setting->phone1)}}" class="text-inherit"><i class="fal fa-headset me-3 text-theme"></i>{{$setting->phone1}}</a></span>
        </div>
    </div>
    </div>
</section>
@endsection
