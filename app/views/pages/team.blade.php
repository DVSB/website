@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'The team - Sentora')

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>The team</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li><a>About</a></li>
                    <li class="active"><a>The team</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="our-team" class="padding-60">
    <div class="container">
        <div class="row">
            <p>The Sentora project requires the support of various teams and each with their own areas of responsibility and expertise.</a>
            <p>Below is a list of our current team members. If you'd like to join our team please contact us at (sentoracp [at] gmail.com).</a>
        </div>
        @include('partials.team')
</section>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
