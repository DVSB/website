@extends('layouts.master')

{{-- This is the HTML title for the page. --}}
@section('title', 'About - Sentora')

@section('meta')
<meta name="author" content="ballen@bobbyallen.me">
@stop

{{-- The main page content, this should contain the normal page HTML. --}}
@section('content')
<section id="page-tree">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h1>About</h1>
            </div>
            <div class="col-md-7 col-sm-7">
                <ol class="breadcrumb pull-right hidden-xs">
                    <li><a href="/"><i class="ion-home"></i> Home</a></li>
                    <li><a>About</a></li>
                    <li class="active"><a>Overview</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="services-sec" class="padding-60">
    <div class="container">
        <div class="row">

            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-ios7-heart-outline"></i>
                    <h3>Open-source</h3>
                    <p>
                        Sentora is open-source software (released under the <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GPL v3</a> license) enabling you to use it free of charge, free upgrades as well as the ability to extend and share.
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-android-developer"></i>
                    <h3>Modular</h3>
                    <p>
                        Looking to develop your own module or install an community developed one? Sentora provides a simple module system to enable you to extend functionality!
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-ios7-infinite"></i>
                    <h3>Supported</h3>
                    <p>
                        Our community <a href="{{ URL::route('the-team') }}">support team</a> offer support via our <a href="http://forums.sentora.org" target="_blank">community forums</a> and for those that require a faster response we also offer a <a href="{{ URL::route('support.premium') }}" target="_blank">premium support service</a>.
                    </p>
                </div>
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="services-box">
                    <i class="ion-clock"></i>
                    <h3>Fast and easy set-up</h3>
                    <p>
                        We bundle easy-to-use installation scripts enabling you to get your hosting environment up and running in as little time as possible.
                    </p>
                </div>
            </div>
        </div>
        <div class="divied-40"></div>
        <div class="row">
            <div class="col-md-12">
                <h3>What is Sentora?</h3>
                <p>
                    Sentora is a free to download and use web hosting control panel developed for Linux, UNIX and BSD based servers or computers. The Sentora software can turn a domestic or commercial server into a fully fledged, easy to use and manage web hosting server.
                </p>
                <p>
                    Our team work and provide the software as a ‘hobby’ project, we are not commercially backed nor do we do this for financial reward, we give up our spare time to develop, support and maintain the software.
                </p>
                <p>
                    Sentora is written in PHP and utilises various other GNU/open-source software packages such as Apache HTTPd, PHP, Dovecot, Postfix, ProFTPd and MariaDB to name a few. 
                </p>
            </div>
        </div>
        <div class="divied-40"></div>
        <div class="row">
            <div class="col-md-12 margin-btm40">
                <h3>Features</h3>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-person"></i>
                            <h3>Multi-client environment</h3>
                            <p>
                                Sentora is designed to host and manage multiple clients on a single server, this is known as a 'shared' hosting environment. Each client can login and manage their web hosting via. our fully customisable control panel.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-pie-graph"></i>
                            <h3>Quota management</h3>
                            <p>
                                Sentora enables the user to create and manage any number of services such as mailboxes and domains, we provide the tools to enable you to set quotas on both bandwidth and creation of services.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-arrow-expand"></i>
                            <h3>Integrate with the API</h3>
                            <p>
                                With our modular approach taken to our API you can connect your corporate web site or billing system directly to Sentora. The API enables a seamless link for third-party applications and sites.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-android-download"></i>
                            <h3>Want modules?</h3>
                            <p>
                                If you are looking to extend the functionality of Sentora then look no further than our 'App store', We provide a simple platform where module developers can publish their modules and Sentora users can 'single click' install them.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="divied-40"></div>
                <div class="row">
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-android-friends"></i>
                            <h3>Resellers</h3>
                            <p>
                                Sentora provides the ability for you to offer 'reseller' accounts enabling your clients to resell your hosting in a 'white-label' environment.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-android-developer"></i>
                            <h3>Brand it your way!</h3>
                            <p>
                                Sentora provides its own template system enabling you to download custom themes or even make your own enabling you to brand your control panel to your company.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-ios7-world-outline"></i>
                            <h3>Speaking your language</h3>
                            <p>
                                Sentora is used all over the globe and although our team speak English we provide translations packs for almost every language!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 margin-btm20">
                        <div class="services-box-2">
                            <i class="ion-ios7-chatboxes"></i>
                            <h3>Community grown</h3>
                            <p>
                                We actively promote members of the community getting involved so if you've got an idea, found a bug or have an improvement you would like us to implement let us know!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divied-40"></div>
        <div class="row">
            <div class="col-md-6">
                <h3>The history of the project</h3>
                <p>
                    The Sentora project was officially born on the 27th June 2014 when the previous members of the ZPanel project decided that following the recent acquisition of the project by Hostwinds LLC. contact with the new organisation was extremely limited and progress with the ZPanel project had almost seized; realising that something needed to be done in order to secure the future development and maintainability for its current user-base.
                </p>
                <p>
                    As per the <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GPL v3</a> license allows, we decided that we would fork the existing project and make various radical changes (such as remove Windows support) and clean up a lot of the core code in an attempt to optimise and build new, improved foundations for the new project.
                </p>
                <p>
                    Sentora aims to be a compatible release (minus the support for Windows Servers) in terms of modules until such a time that we develop and release a new major version (not utilising the original ZPanel code).
                </p>
            </div>
            <div class="col-md-6">
                <h3>Technologies</h3>
                <p>Sentora is designed primarily to install and work with the following software packages out of the box:-</p>
                <ul class="list-unstyled list-services">
                    <li><i class="ion-checkmark-circled"></i> <a href="http://httpd.apache.org/" target="_blank">Apache HTTPd</a></li>
                    <li><i class="ion-checkmark-circled"></i> <a href="http://php.net/" target="_blank">PHP</a></li>
                    <li><i class="ion-checkmark-circled"></i> <a href="http://www.proftpd.org/" target="_blank">ProFTPd</a></li>
                    <li><i class="ion-checkmark-circled"></i> <a href="https://mariadb.org/" target="_blank">MySQL/MariaDB</a></li>
                    <li><i class="ion-checkmark-circled"></i> <a href="http://www.postfix.org/" target="_blank">Postfix</a></li>
                    <li><i class="ion-checkmark-circled"></i> <a href="http://www.dovecot.org/" target="_blank">Dovecot</a></li>
                </ul>
                <p calss="small">Third-party modules have the ability to substitute the core packages as well as add further packages.</p>
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
