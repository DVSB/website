@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Error 404')

@section('meta')
<!-- This is an error page, we don't need meta tags! -->
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Not found!</h1>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="error-page">
                <h2>404</h2>
                <h1>Sorry but the requested page could not be found!</h1>
                <p class="margin-btm40">
                    The page you are looking for might have been removed, had its name changed or is temporarily unavailable.
                </p>
                <a href="{{ URL::route('home') }}" class="btn btn-lg btn-dark">back to home page</a>
            </div>
        </div>

        <div class="divied-60"></div>
    </div>
</div>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
