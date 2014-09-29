<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse col-md-6">
                    <ul class="nav navbar-nav">
                        <li><a href="{{asset('/')}}">主页</a></li>
                        <li><a href="{{asset('admin/inquiries')}}">询盘列表</a></li>
                        <li><a href="{{asset('admin/products')}}">产品列表</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    @if(Auth::check())
                    <p class="navbar-text navbar-right">Logged in as <strong>{{{Auth::user()->username}}}</strong>
                    <button class="btn btn-default">{{link_to('logout', 'Log Out')}}</button></p>
                    @else
                    {{link_to('login', 'Log In')}}
                    @endif
                </div>
            </div>
        </nav>

        <!-- Add your site or application content here -->
        <div class="container">
            <div class="page-header">

                @yield('header')
            </div>
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-warning">
                {{Session::get('error')}}
            </div>
            @endif
            @yield('content')
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
        {{ HTML::script('assets/js/plugins.js') }}
        {{ HTML::script('assets/js/main.js') }}

    {{--
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    --}}
    </body>
</html>
