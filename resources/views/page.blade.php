@extends('layouts.layout')

@section('title', $page->title)

@section('content')

<!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px" style="background: {{$settings['bg_color']}}">
    <div class="container">
        <div class="hero-banner--sm__content">
        <h1>{{$page->title}}</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
            </ol>
        </nav>
        </div>
    </div>
</section>
<!--================ Hero sm Banner end =================-->

<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
    {!! $page->body !!}
</div>

@endsection