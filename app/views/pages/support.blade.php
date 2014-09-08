@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Premium Support - Sentora')

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Premium Support</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li><a>Support</a></li>
                    <li class="active"><a>Premium</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>What is our Premium Support service?</h3>
            <p>We provide a premium support service in which our users can opt-in and pay a small monthly subscription fee to gain prioritised support direct from our support and development team.</p>
            <p>Although we provide the community support forum some users require a faster answer and/or feel that due to the fact that all money raised is invested back into the project and our team that it is well worth it as they know they are actively supporting the project.</p>
        </div>
        <div class="col-md-6">
            <h3>How do I subscribe?</h3>
            <p>You can easily subscribe using PayPal over at our forums, click the button below to start this simply subscription process.</p>
            <a href="http://forums.sentora.org/misc.php?action=payments" class="btn-primary btn btn-lg">Subscribe today!</a>
        </div>
    </div>
    <div class="divied-40"></div>
</div>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
