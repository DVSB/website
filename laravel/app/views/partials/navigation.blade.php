<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}"><img src="/img/sentora_logo.png" class="img-responsive" alt="Sentora - The open-source web hosting control panel"></a>
        </div>
        <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">About <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::route('about') }}">Project overview</a></li>
                        <li><a href="{{ URL::route('the-team') }}">The team</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Support <i class="ion-ios7-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('http://docs.sentora.org') }}">Documentation</a></li>
                        <li><a href="{{ URL::route('support.faqs') }}">FAQs</a></li>
                        <li><a href="{{ URL::to('http://forums.sentora.org') }}">Forum</a></li>
                        <li><a href="{{ URL::to('https://github.com/sentora/sentora-core/issues') }}" target="_blank">Bugs</a></li>
                        <li><a href="{{ URL::route('support.premium') }}">Premium Service</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('download') }}">Download</a>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('donate') }}">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</div>