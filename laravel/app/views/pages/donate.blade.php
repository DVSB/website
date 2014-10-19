@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Donate - Sentora')

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Donate</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>Donate</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Make a donation</h3>
            <p>Please help drive the project forward and show your appreciation to the Team by donating some money via. PayPal</p>
            <p>All donations received go towards paying our on-going running costs such as hosting, domain names and where applicable software licenses etc.</p>
            <p>We truly appreciate all donations so please, if you use Sentora and appreciate the hard work that our Team puts into the project please help us by donating today!</p>
            <p>Many thanks,<br/>The Sentora Team.</p>

        </div>
        <div class="col-md-6">
            <h3>Donate now...</h3>
            @include('partials.paypal')
            <h3>With thanks to...</h3>
            <p>We would like to personally thank the following list of people/organisations of whom have made a larger than normal (&dollar;100+) donation to the project as well as those of whom have donated smaller amounts or wished to remain anonymous.</p>
            <ul>
                <li><a href="http://www.supared.com/?ref=sentora" target="_blank">Supared</a></li>
                <li><a href="http://www.zvps.co.uk/?ref=sentora" target="_blank">zVPS</a></li>
                <li><a href="http://www.mach-hosting.com/?ref=sentora" target="_blank">Mach-hosting</a></li>
            </ul>
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
