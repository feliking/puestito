@extends('layouts.app')
@section('content')
<div class="welcome-slider-wrapper text-center">
    <div class="single-welcome-slide-wrapper">
        <div class="single-welcome-slide">
            <div class="single-welcome-slide__head">
                <div class="logo space-mb--15">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="">
                </div>
                <h3 class="title">BEST SHOPPING EXPERIENCE</h3>
            </div>
            <div class="single-welcome-slide__body space-pt--15 space-pb--15">
                <div class="banner-image">
                    <img src="{{ asset('img/welcome.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="single-welcome-slide__footer">
                <p class="text space-bottom--30">Most Popular Shopping website, With <br> lots of fashionable products</p>
                <a href="{{route('pages.index')}}" class="welcome-btn">CONTINUE</a>
                <a href="index.html" class="skip-btn">skip</a>
            </div>
        </div>
    </div>
</div>
@endsection