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
    <title>{{$product->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" title="Favicon"/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:500|Droid+Sans' rel='stylesheet' type='text/css'>
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/lightbox.css') }}
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js') }}
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
{{--message开始--}}
@if(Session::has('message'))
<div class="alert alert-success" id="alertmessage">
    <p class="text-center">{{Session::get('message')}}</p>
</div>
@endif
{{--message结束--}}

{{--点击到顶部箭头--}}
<a href="#top" id="top-button" title="Top"><i class="glyphicon glyphicon-arrow-up"></i></a>

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
                                <li><a href="{{asset('products/category/CO2 Laser Fractional')}}">All CO2 Laser
                                        Fractional</a></li>
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

{{-- 页头开始 --}}
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="media col-md-8">
                <a class="pull-left" href="/">
                    <img src="{{asset('img/logo.png')}}" alt="Camellia" class="media-object"/>
                </a>

                <div class="media-body">
                    <h4 class="media-heading">CAMELLIA</h4>
                    El fabricante de equipos de belleza profesional
                </div>
            </div>
        </div>

        <div class="row" id="head">
            <div class="col-md-6">
                <img src="{{asset('img/product/'.$product->name.'/'.$product->mainphoto)}}" alt="{{$product->name}}"
                     class="img-responsive"/>
            </div>
            <div class="col-md-6">
                {{$product->introduction}}
            </div>
        </div>


    </div>
</div>
{{-- 页头结束 --}}

{{-- 证书开始 --}}
<div class="certificado">
    <p class="text-center"><img src="{{asset('img/certificado.png')}}" alt="Certificado"/></p>
</div>
{{-- 证书结束 --}}

{{-- 产品功能开始 --}}
<div class="container" id="app">
    <div class="row">
        <div class="col-md-6">
            <p class="text-center"><img src="{{asset('img/product/'.$product->name.'/'.$product->appphoto)}}"
                                        alt="{{$product->name.' Aplicaciones'}}"/></p>
        </div>
        <div class="col-md-6">
            {{$product->app}}
        </div>
    </div>
</div>
<hr/>
{{-- 产品功能结束 --}}

{{-- 产品优势开始 --}}
<div class="container" id="advantage">
    <div class="row">
        <div class="col-md-6">
            {{$product->advantage}}
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{asset('img/product/'.$product->name.'/'.$product->adphoto_1)}}" data-lightbox="image-1"
                       data-title="My caption"
                       class="pull-right"><img
                            src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_1)}}" class="example-image"
                            alt="{{$product->name.' advantage 1'}}"/></a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('img/product/'.$product->name.'/'.$product->adphoto_2)}}" data-lightbox="image-1"
                       data-title="My caption"><img
                            src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_2)}}" class="example-image"
                            alt="{{$product->name.' advantage 2'}}"/></a>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{asset('img/product/'.$product->name.'/'.$product->adphoto_3)}}" data-lightbox="image-1"
                       data-title="My caption"
                       class="pull-right"><img
                            src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_3)}}" class="example-image"
                            alt="{{$product->name.' advantage 3'}}"/></a>
                </div>
                <div class="col-md-6">
                    <a href="{{asset('img/product/'.$product->name.'/'.$product->adphoto_4)}}" data-lightbox="image-1"
                       data-title="My caption"><img
                            src="{{asset('img/product/'.$product->name.'/'.$product->adphoto_4)}}" class="example-image"
                            alt="{{$product->name.' advantage 4'}}"/></a>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- 产品优势结束 --}}

{{-- 客户夸奖开始 --}}
<div class="carousel-reviews broun-block">
<div class="container">
<div class="row">
<div id="carousel-reviews" class="carousel slide" data-ride="carousel">

<div class="carousel-inner">
    <div class="item active">
        <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
                <a title="" href="#">Terrific</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star-empty"></span><span
                            data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                <p>hemos encontrado un buen socio de negocios, finalmente. Camellia, impresionante!</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_1.jpg')}}" class="img-circle">
                <a title="" href="#">Pascual</a>
                <i>Los Médicos de Belleza</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">I would buy again</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>The IPL is cool! Everything else working fine,thanks to Camellia! </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_2.jpg')}}" class="img-circle">
                <a title="" href="#">Leonardo</a>
                <i>Cirujano Plástico</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">Amazing Price</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>Amazing price, perfect quality, help me a lot. I intend to buy again.</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_3.jpg')}}" class="img-circle">
                <a title="" href="#">Cristina</a>
                <i>Gerente de Salón de Belleza</i>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
                <a title="" href="#">Terrific</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star-empty"></span><span
                            data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                <p>hemos encontrado un buen socio de negocios, finalmente. Camellia, impresionante!</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_1.jpg')}}" class="img-circle">
                <a title="" href="#">Pascual</a>
                <i>Los Médicos de Belleza</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">I would buy again</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>The IPL is cool! Everything else working fine,thanks to Camellia! </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_2.jpg')}}" class="img-circle">
                <a title="" href="#">Leonardo</a>
                <i>Cirujano Plástico</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">Amazing Price</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>Amazing price, perfect quality, help me a lot. I intend to buy again.</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_3.jpg')}}" class="img-circle">
                <a title="" href="#">Cristina</a>
                <i>Gerente de Salón de Belleza</i>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
                <a title="" href="#">Terrific</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star-empty"></span><span
                            data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                <p>hemos encontrado un buen socio de negocios, finalmente. Camellia, impresionante!</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_1.jpg')}}" class="img-circle">
                <a title="" href="#">Pascual</a>
                <i>Los Médicos de Belleza</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">I would buy again</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>The IPL is cool! Everything else working fine,thanks to Camellia! </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_2.jpg')}}" class="img-circle">
                <a title="" href="#">Leonardo</a>
                <i>Cirujano Plástico</i>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
            <div class="block-text rel zmin">
                <a title="" href="#">Amazing Price</a>

                <div class="mark">My rating: <span class="rating-input"><span data-value="0"
                                                                              class="glyphicon glyphicon-star"></span><span
                            data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4"
                                                                                         class="glyphicon glyphicon-star"></span><span
                            data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                <p>Amazing price, perfect quality, help me a lot. I intend to buy again.</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel">
                <img
                    src="{{asset('img/custom_3.jpg')}}" class="img-circle">
                <a title="" href="#">Cristina</a>
                <i>Gerente de Salón de Belleza</i>
            </div>
        </div>
    </div>
</div>
<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
</div>
</div>
</div>
{{-- 客户夸奖结束 --}}

{{--客户经理开始--}}
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <p class="text-center"><img src="{{asset('img\author.jpg')}}" alt="Elena" class="img-circle"/></p>
        </div>
        <div class="col-md-5">
            {{$product->tocustomer}}
        </div>
        <div class="col-md-5">
            <p class="text-center"><img src="{{asset('img/product/'.$product->name.'/'.$product->footerphoto)}}"
                                        alt="{{$product->name}}"/></p>
        </div>
    </div>
</div>
{{--客户经理结束--}}

{{-- 联系表格开始 --}}
<div id="contact">
    <div class="container">
        <div class="col-md-offset-1">
            <h2>Contáctenos</h2>
        </div>
        {{ Form::open(array('url' => $url, 'class' => 'form-horizontal', 'role' => 'form' )) }}
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
                {{ Form::text('subject', null, array('placeholder' => $product->name, 'class' => 'form-control')) }}
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

{{--footer开始--}}
<div class="container" id="footer">
    <div class="col-md-4">

        <ul class="list-inline">
            <li><a href="/">Indice</a></li>
            <li><a href="{{asset('products')}}">Todos Los Productos</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <p class="text-right">©  Camellia 2014 Todos los derechos reservados.</p>
    </div>
</div>
{{--footer结束--}}


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
{{ HTML::script('assets/js/vendor/bootstrap.min.js') }}
{{ HTML::script('assets/js/plugins.js') }}
{{ HTML::script('assets/js/main.js') }}
{{ HTML::script('assets/js/vendor/lightbox.min.js') }}

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