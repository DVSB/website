<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @yield('meta')
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/ionicons.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
        <link href="/css/flexslider.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Raleway:400,300,700,500' rel='stylesheet' type='text/css'>
        @yield('scripts.top')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('partials.ga') {{-- Apparently this really is the best place to put the GA tracking stuff these days! (immediately after the opening 'body' tag :S) --}}
        @include('partials.navigation')
        @yield('content')
        @include('partials.footer')
        <script src="//code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="/js/app.js" type="text/javascript"></script>
        @yield('scripts.bottom')
    </body>
</html>
