@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Sentora - The open-source web hosting control panel.')

@section('meta')
<meta name="description" content="Sentora is an open-source web hosting control panel built specifically to work on a variety of Linux distributions. Sentora is licensed under the GPL and is a separately maintained fork of the original ZPanel project.">
<meta name="keywords" content="sentora, zpanel, web, hosting, control, panel, open">
<meta name="author" content="ballen@bobbyallen.me">
<meta property="og:image" content="http://sentora.org/img/sentora_logo.png" />
<meta property="og:title" content="Sentora" />
<meta property="og:description" content="Sentora is an open-source web hosting control panel for Linux based servers." />
<meta property="og:url" content="http://sentora.org" />
<meta property="og:site_name" content="Sentora - The open-source web hosting panel." />
<meta property="og:locale" content="en_GB" />
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="main-slider-bg">
    <div class="slider-overlay">
        <div class="slider-main">
            <div class="container text-center">
                <ul class="slides">
                    <li>
                        <h1 class="slider-heading">Introducing Sentora - The open-source web hosting control panel!</h1>
                        <p class="slider-desc">Sentora is based on the solid foundations of ZPanel and developed by the original team, Sentora provides a robust open-source web hosting control panel for small to medium ISPs.</p>
                        <a href="{{ URL::route('about') }}" class="btn btn-lg btn-white">Learn more</a>
                    </li>
                    <li>
                        <h1 class="slider-heading">Community and 'Premium' supported</h1>
                        <p class="slider-desc">Although the software is 'open-source' and we provide a community support forum, our team provide a premium support service enabling you to receive faster responses and resolution times.</p>
                        <a href="{{ URL::route('support.premium') }}" class="btn btn-lg btn-white">Learn More</a>
                    </li>
                    <li>
                        <h1 class="slider-heading">Extend as you grow...</h1>
                        <p class="slider-desc">Sentora provides the most common control panel features 'out of the box' but when you need more head over to our 'add-ons store' and download third-party modules, translations and even theme sets!</p>
                        <a href="#" class="btn btn-lg btn-white">Coming soon!</a>
                    </li>
                    <li>
                        <h1 class="slider-heading">Developed with love!</h1>
                        <p class="slider-desc">Sentora is developed by a small team of guys, lead by Tom, Pascal and Sam, they contribute their spare time in developing and improving the software as well as maintaining the site, forums and servers.</p>
                        <a href="{{ URL::route('the-team') }}" class="btn btn-white btn-lg">Meet the team</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="services-sec" class="padding-60">
    <div class="container">
        <div class="row">
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-heart"></i>
                    <h3>Simplified management</h3>
                    <p>
                        Sentora is designed to simplify web hosting management, it gives your clients the ability to quickly and easily manage their web hosting.
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-help-buoy"></i>
                    <h3>Supported</h3>
                    <p>
                        We provide both community-based (free) and <a href="{{ URL::route('support.premium') }}">subscription-based premium support</a> services to cater for both personal and commercial users!
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-android-share"></i>
                    <h3>Extendable</h3>
                    <p>
                        Our Add-ons store provides our users with a central repository to install, rate, sell and publish modules, themes and localisations.
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-android-developer"></i>
                    <h3>Open-souce</h3>
                    <p>
                        Released under the <a href="{{ URL::to('http://www.gnu.org/licenses/gpl-3.0.html') }}" target="_blank">GPLv3</a>, Sentora is the perfect choice for the most small to medium ISPs looking for a cost effective, extendable platform.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
