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
    <title>Camellia Equipo de belleza</title>
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

{{--top begin --}}
<div id="top">
    <div class="container">
    <p class="h5">Phone : (353) 1 8530661   |   Mail : <a href="mailto:sales@cotek.com">sales@cotek.com</a></p>
    </div>
</div>
{{--top end--}}

{{--Mega menu begin--}}
<div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand"><img class="img-responsive" src="{{asset('img/logo.png')}}" alt="cotek_logo"/></a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.bootcss.com"><strong>首页</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>刻字机</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>激光机</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>关于我们</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>联系方式</strong></a></li>
      </ul>
    </nav>
  </div>
{{--Mega menu end--}}


{{--Carousel begin--}}
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="{{asset('img/1.jpg')}}">
           <div class="carousel-caption">
            <h3>Headline1</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->

         <div class="item">
          <img src="{{asset('img/2.jpg')}}">
           <div class="carousel-caption">
            <h3>Headline2</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="{{asset('img/3.jpg')}}">
           <div class="carousel-caption">
            <h3>Headline2</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>
          </div>
        </div><!-- End Item -->

      </div><!-- End Carousel Inner -->


    	<ul class="nav nav-pills nav-justified">
          <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem ipsum dolor sit</small></a></li>
          <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>
          <li data-target="#myCarousel" data-slide-to="2"><a href="#">Projects<small>Lorem ipsum dolor sit</small></a></li>
        </ul>


    </div><!-- End Carousel -->
</div>
{{--Carousel end--}}

{{--Product list begin--}}
<div class="container-fluid">
    <div class="container container-pad" id="property-listings">
        <div class="row">
            <div class="col-md-12">
                <h1>我们能为您提供什么</h1>
                <p>刻字机，激光机等</p>
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
            <h2>联系我们</h2>
        </div>
        {{ Form::open(array('url' => 'products/inquiry', 'class' => 'form-horizontal', 'role' => 'form' )) }}
        <div class="form-group">
            {{ Form::label('email', 'E-Mail', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-4">
                {{ Form::email('email', null, array('placeholder'=>'youremail@example.com', 'class' => 'form-control required'))
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

{{--footer开始--}}
<div id="footer">
    <div class="container">
        <div class="col-md-3">
        <h3>Address</h3>
        <p>地址</p>
        <p>电话</p>
        <p>邮箱</p>
        </div>
        <div class="col-md-3">
        <h3>热门产品</h3>
        <ul class="list-unstyled">
            <li><a href="">PRODUCTS_1</a></li>
            <li>PRODUCTS_2</li>
            <li>PRODUCTS_3</li>
            </ul>
        </div>
        <div class="col-md-3">
                <h3>COLLABORATION</h3>
                <ul class="list-unstyled">
                                        <li><a href="">Team</a></li>
                                        <li>Office</li>
                                        <li>Partner</li>
                                        </ul>
                </div>
        <div class="col-md-3">
            <h3>ABOUT</h3>
            <ul class="list-unstyled">
                        <li><a href="">Contact</a></li>
                        <li>Support</li>
                        <li><a href="{{asset('faq')}}" target="_blank">FAQ</a></li>
                        </ul>
        </div>

</div>
</div>

<div id="copyright">
<div class="container">
<p class="h5">Copyright  © 2014 | Cotek</p>
</div>
</div>
{{--footer结束--}}

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