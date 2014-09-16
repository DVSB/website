@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'GitHub - Sentora')

@section('meta')
<meta name="author" content="tGates">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>GitHub</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>GitHub</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h3>Latest stable release</h3>
            <p>The latest stable release is available to install by installers or upgraders <a href="https://github.com/sentora" class="hover-color" target="_blank">at GitHub</a>. 
            !Important! : it is not advised to install from archive file, please use the installer provided for your operating system.</p>
            <p>You will find extended installation intructions in the <a href="http://docs.sentora.org/?node=7">documentation</a>.</p>

            <div class="divied-40"></div>
        </div>
    </div>
</div>
@stop

{{-- Custom CSS/Javascripts that will be injected into the HTML 'HEAD' portion --}}
@section('scripts.top')

@stop


{{-- Custom CSS/Javascripts that will be injected into the HTML at the bottom of the page --}}
@section('scripts.bottom')

@stop
