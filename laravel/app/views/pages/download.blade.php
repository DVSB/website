@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'Download - Sentora')

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>Download</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="{{ URL::route('home') }}"><i class="ion-home"></i> Home</a></li>
                    <li class="active"><a>Download</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="divied-60"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Before downloading please consider <a href="{{ URL::route('donate') }}">donating</a>, the project relies on the kind donations from our users!
            </div>

            <h3>Latest stable release</h3>
            <p>The latest stable release is available to install by installers or upgraders <a href="https://github.com/sentora" class="hover-color" target="_blank">at GitHub</a>. 
            !Important! : it is not advised to install from archive file, please use the installer provided for your operating system.</p>
            <p>You will find extended installation intructions in the <a href="http://docs.sentora.org/?node=7">documentation</a>.</p>

            <div class="divied-40"></div>
            <h3>Latest development snapshot</h3>
            <div class="alert alert-danger">
                Please be aware that development snapshots should only be used for development and testing purposes, they are not recommended for production environments!
            </div>
            <p class="margin-btm20">
                You can download the latest development snapshot as a tar.gz or as a zip file, these files are served up from our git repository kindly hosted over at GitHub.
            </p>
            <p class="margin-btm20">
                <i class="ion-android-download"></i> <a href="https://github.com/sentora/sentora-core/archive/master.tar.gz" class="hover-color">Latest development snapshot (.tar.gz format)</a><br>
                <i class="ion-android-download"></i> <a href="https://github.com/sentora/sentora-core/archive/master.zip" class="hover-color">Latest development snapshot (.zip format)</a>
            </p>
            <p>
                If you wish to clone our git repository, you can do so using the following command:-
            </p>
            <p><pre>git clone https://github.com/sentora/sentora-core.git sentora-core</pre></p>
            <p>Alternatively you can <a href="https://github.com/sentora/sentora-core/fork" target="_blank">fork</a> our repository if you have a GitHub account!</p>
            <div class="divied-40"></div>
            <h3>Archived releases</h3>
            <p class="margin-btm20">
                If you require to install a previous stable version of Sentora you can <a href="https://github.com/sentora/sentora-core/releases" target="_blank">browse and download it</a> from our GitHub repository.
            </p>
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
