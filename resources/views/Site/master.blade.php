<!DOCTYPE html><html><head>    <!-- Basic -->    <meta charset="utf-8">    <title>Real time using laravel nodejs redis</title>    <meta name="keywords" content="" />    <meta name="description" content="">    <meta name="author" content="">    <!-- Mobile Metas -->    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- Web Fonts  -->    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">    <!-- Vendor CSS -->    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.css') }}">    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.css') }}">    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.css') }}" media="screen">    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.theme.css') }}" media="screen">    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" media="screen">    <!-- Theme CSS -->    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">    <link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">    <link rel="stylesheet" href="{{ asset('css/theme-blog.css') }}">    <link rel="stylesheet" href="{{ asset('css/theme-shop.css') }}">    <link rel="stylesheet" href="{{ asset('css/theme-animate.css') }}">    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">    <!-- Current Page CSS -->    <link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}" media="screen">    <link rel="stylesheet" href="{{ asset('vendor/circle-flip-slideshow/css/component.css') }}" media="screen">    <!-- Skin CSS -->    <link rel="stylesheet" href="{{ asset('css/skins/default.css') }}">    <!-- Theme Custom CSS -->    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">    <!--[if IE]>    <link rel="stylesheet" href="{{ asset('css/ie.css') }}">    <![endif]-->    <!--Socket.io-->    {{--{{HTML::script("http://localhost:3000/socket.io/socket.io.js")}}--}}    {{--{{HTML::script("/angular/modules/angular-socket-io/socket.js")}}--}}    <script src="http://localhost:3000/socket.io/socket.io.js"></script>{{--    <script src="{{ asset('js/socket.js') }}"></script>--}}</head><body><div class="body">  @include('Site/header')    <div role="main" class="main">                @yield('content')    </div>    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script></div></body></html>