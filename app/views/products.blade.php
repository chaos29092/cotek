<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All {{$category}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" title="Favicon"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:500|Droid+Sans' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js') }}
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

{{--message开始--}}
@if(Session::has('message'))
<div class="alert alert-success" id="alertmessage">
    <p class="text-center">{{Session::get('message')}}</p>
</div>
@endif
{{--message结束--}}

{{--Mega menu begin--}}
<div id="nav" class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Camellia</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown mega-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products<span
                            class="glyphicon glyphicon-chevron-down pull-right"></span></a>

                    <ul class="dropdown-menu mega-dropdown-menu row">
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">New in Stores</li>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <a href="{{asset('products/1')}}" target="_blank"><img
                                                    src="{{asset('img/menu_1.jpg')}}"
                                                    class="img-responsive" alt="IPL machine"></a>
                                            <h4>
                                                <small>Latest IPL machine Promotions.</small>
                                            </h4>
                                            <a href="{{asset('products/1')}}">
                                                <button class="btn btn-primary" type="button">1,399.00 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                        class="glyphicon glyphicon-heart"></span> View details
                                                </button>
                                            </a>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="{{asset('products/2')}}" target="_blank"><img
                                                    src="{{asset('img/menu_2.jpg')}}"
                                                    class="img-responsive" alt="diodo laser"></a>
                                            <h4>
                                                <small>Latest diodo laser Promotions.</small>
                                            </h4>
                                            <a href="{{asset('products/2')}}">
                                                <button class="btn btn-primary" type="button">5,199.00 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                        class="glyphicon glyphicon-heart"></span> View details
                                                </button>
                                            </a>
                                        </div>
                                        <!-- End Item -->
                                        <div class="item">
                                            <a href="{{asset('products/3')}}" target="_blank"><img
                                                    src="{{asset('img/menu_3.jpg')}}"
                                                    class="img-responsive" alt="co2 laser machine"></a>
                                            <h4>
                                                <small>Latest co2 laser machine Promotions.</small>
                                            </h4>
                                            <a href="{{asset('products/1')}}">
                                                <button class="btn btn-primary" type="button">5,599.00 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                        class="glyphicon glyphicon-heart"></span> View details
                                                </button>
                                            </a>
                                        </div>
                                        <!-- End Item -->
                                    </div>
                                    <!-- End Carousel Inner -->
                                </div>
                                <!-- /.carousel -->
                                <li class="divider"></li>
                                <li><a href="{{asset('products')}}">View all products <span
                                            class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">E-Light</li>
                                <li><a href="{{asset('products/category/E-Light')}}">All E-Light</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nd-Yag Laser</li>
                                <li><a href="{{asset('products/category/Nd-Yag Laser')}}">All Nd-Yag Laser</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">IPL</li>
                                <li><a href="{{asset('products/category/IPL')}}">All IPL</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Multifunction</li>
                                <li><a href="{{asset('products/category/Multifunction')}}">All Multifunction</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Diode Laser</li>
                                <li><a href="{{asset('products/category/Diode Laser')}}">All Diode Laser</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">CO2 Laser Fractional</li>
                                <li><a href="{{asset('products/category/CO2 Laser Fractional')}}">All CO2 Laser Fractional</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">RF</li>
                                <li><a href="{{asset('products/category/RF')}}">All RF</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header">Lipolaser</li>
                                <li><a href="{{asset('products/category/Lipolaser')}}">All Lipolaser</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Cavitacion</li>
                                <li><a href="{{asset('products/category/Cavitacion')}}">All Cavitacion</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Cryolipolysis</li>
                                <li><a href="{{asset('products/category/Cryolipolysis')}}">All Cryolipolysis</a></li>
                            </ul>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
    </nav>
</div>
{{--Mega menu end--}}

{{--Product list begin--}}
<div class="container-fluid">
    <div class="container container-pad" id="property-listings">
        <div class="row">
            <div class="col-md-12">
                <h1>All {{$category}}</h1>
                <p>All {{$category}} list</p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-sm-6">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media">

                        <a class="pull-left" href="{{asset('products/'.$product->id)}}" target="_blank">
                            <img alt="{{$product->name}}" class="img-responsive"
                                 src="{{asset('img/product/'.$product->name.'/'.$product->indexphoto)}}"></a>

                        <div class="clearfix visible-sm"></div>

                        <div class="media-body fnt-smaller">
                            <a href="#" target="_parent"></a>

                            <h4 class="media-heading">
                                <a href="{{asset('products/'.$product->id)}}" target="_blank">{{$product->name}}
                                    <small class="pull-right">{{$product->style}}</small>
                                </a></h4>


                            <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                {{$product->mrg}}
                            </ul>

                            <p class="hidden-xs">{{$product->miniintro}}</p><span
                                class="fnt-smaller fnt-lighter fnt-arial">{{$product->fnt}}</span>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--Product list end--}}

{{-- 联系表格开始 --}}
<div id="contact">
    <div class="container">
        <div class="col-md-offset-1">
            <h2>Contáctenos</h2>
        </div>
        {{ Form::open(array('url' => 'products/inquiry', 'class' => 'form-horizontal', 'role' => 'form' )) }}
        <div class="form-group">
            {{ Form::label('email', 'E-Mail', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-4">
                {{ Form::email('email', null, array('placeholder'=>'youremail@example.com', 'class' => 'form-control'))
                }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('subject', 'Subject', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('subject', null, array('placeholder' => 'which product you like', 'class' => 'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('message', 'Message', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-6">
                {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '8')) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Send Message', array('class' => 'btn btn-default')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
{{-- 联系表格结束 --}}

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
{{ HTML::script('assets/js/vendor/bootstrap.min.js') }}
{{ HTML::script('assets/js/plugins.js') }}
{{ HTML::script('assets/js/main.js') }}

{{--
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
--}}

</body>
</html>