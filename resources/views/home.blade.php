@extends('layouts.layout')

@section('content')

@section('title', $settings['title'])

<section class="hero-banner mb-30px" style="background: {{$settings['bg_color']}}">
<div class="container">
    <div class="row">
    <div class="col-lg-7">
        <div class="hero-banner__img">
        <img class="img-fluid" src="{{asset('/assets/img/banner/hero-banner.png')}}" alt="">
        </div>
    </div>
    <div class="col-lg-5 pt-5">
        <div class="hero-banner__content">
        <h1>{{$settings['title']}}</h1>
        <p>{{$settings['subtitle']}}</p>
        <a class="button bg" href="{{ route('contact')}}">Contact Us -></a>
        </div>
    </div>
    </div>
</div>
</section>

<!--================ Feature section start =================-->      
<section class="section-margin">
<div class="container">
    <div class="section-intro pb-85px text-center">
    <h2 class="section-intro__title">About Us</h2>
    <hr>
    <p class="section-intro__subtitle">{{$settings['description']}}</p>
    </div>

    <div class="section-intro text-center">
    <h2 class="section-intro__title">Our Pages</h2>
    <hr>
    </div>

    <div class="container">

        @php
            $count = 0;
        @endphp

        @foreach ($pages as $page)
            @if ($count == 0)
            <div class="row justify-content-center" style="margin-bottom: 30px;">
            @endif

            <div class="col-lg-4">
            <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                <a href="{{$page['slug']}}"><i class="ti-arrow-top-right"></i></a>
                </span>
                <h3 class="card-feature__title">{{ $page['title'] }}</h3>
                <p class="card-feature__subtitle" style="height: 100px; overflow: hidden;">{{ $page['description']}}</p>
    
                <a class="button button-light text-center" href="{{$page['slug']}}" style="margin-top: 20px;">Read more</a>
            </div>
            </div>

            @php
                $count += 1;
            @endphp

            @if ($count == 3)
                </div>
                @php
                    $count = 0;
                @endphp   
            @endif

        @endforeach
    
    </div>
</div>
</section>
<!--================ Feature section end =================--> 

<!--================ Partners section start =================-->      
<section class="section-padding bg-magnolia">
<div class="container">
    <div class="section-intro text-center">
    <h2 class="section-intro__title">Our partners</h2>
    <hr>
    </div>

    <div class="owl-carousel owl-theme testimonial">
        @foreach ($users as $user)
        <div class="testimonial__item text-center">
            <div class="testimonial__img">
            <img src="{{url('/media/images/profile')."/".$user->profile_photo}}" alt="profile photo" style="max-width: 120px; max-height: 120px;">
            </div>
            <div class="testimonial__content">
            <h3>{{$user->name}}</h3>
            <p>{{$user->email}}</p>
            <p class="testimonial__i">{{$user->about}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
<!--================ Testimonial section end =================-->

@endsection
