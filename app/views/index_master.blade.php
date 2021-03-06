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
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
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
@elseif(Session::has('mes'))
<div class="alert alert-danger" id="alertmes">
    <p class="text-center">{{Session::get('mes')}}</p>
</div>
@endif
{{--message结束--}}

{{--top begin --}}
<div id="top">
    <div class="container">
    <p class="h5">Phone : +86 139 3821 6025   |   Mail : <a href="mailto:info@sinohuaxia.com">info@sinohuaxia.com</a></p>
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
      <a href="../" class="navbar-brand"><img class="img-responsive" src="{{asset('img/logo.png')}}" alt="{{Lang::get('index_master.cotek_logo')}}"/></a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/"><strong>{{Lang::get('index_master.index')}}</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>{{Lang::get('index_master.plotter')}}</strong></a></li>
        <li><a href="http://blog.getbootstrap.com"><strong>{{Lang::get('index_master.laser')}}</strong></a></li>
        <li><a href="{{asset('aboutUs')}}"><strong>{{Lang::get('index_master.about_us')}}</strong></a></li>
        <li><a href="{{asset('contact')}}"><strong>{{Lang::get('index_master.contact')}}</strong></a></li>
      </ul>
    </nav>
  </div>
{{--Mega menu end--}}


@yield('content')

{{-- 联系表格开始 --}}
<div id="contact">
    <div class="container">
        <div class="col-md-offset-1">
            <h2>{{Lang::get('index_master.contact_us')}}</h2>
        </div>
        {{ Form::open(array('url' => 'products/inquiry', 'class' => 'form-horizontal', 'role' => 'form' )) }}
        <div class="form-group">
            {{ Form::label('email', Lang::get('index_master.e_mail'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-4">
                {{ Form::email('email', null, array('placeholder'=>'youremail@example.com', 'class' => 'form-control required'))
                }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('subject', Lang::get('index_master.subject'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-4">
                {{ Form::text('subject', null, array('class' => 'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('message', Lang::get('index_master.message'), array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-6">
                {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '8')) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit(Lang::get('index_master.send_message'), array('class' => 'btn btn-default')) }}
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
        <h3>{{Lang::get('index_master.address')}}</h3>
        <p>{{Lang::get('index_master.address_1')}}</p>
        <p>Tel: +86 139 3821 6025</p>
        <p>E-mail: info@sinohuaxia.com</p>
        </div>
        <div class="col-md-3">
        <h3>{{Lang::get('index_master.hot_product')}}</h3>
        <ul class="list-unstyled">
            <li><a href="">{{Lang::get('index_master.plotter')}}</a></li>
            <li>{{Lang::get('index_master.laser')}}</li>
            <li>{{Lang::get('index_master.cutter')}}</li>
            </ul>
        </div>
        <div class="col-md-3">
                <h3>{{Lang::get('index_master.collaboration')}}</h3>
                <ul class="list-unstyled">
                                        <li>{{Lang::get('index_master.team')}}</li>
                                        <li>{{Lang::get('index_master.office')}}</li>
                                        <li>{{Lang::get('index_master.partner')}}</li>
                                        </ul>
                </div>
        <div class="col-md-3">
            <h3>{{Lang::get('index_master.about')}}</h3>
            <ul class="list-unstyled">
                        <li><a href="{{asset('contact')}}" target="_blank">{{Lang::get('index_master.contact_1')}}</a></li>
                        <li><a href="{{asset('support')}}" target="_blank">{{Lang::get('index_master.support')}}</a></li>
                        <li><a href="{{asset('faq')}}" target="_blank">{{Lang::get('index_master.faq')}}</a></li>
                        </ul>
        </div>

</div>
</div>

<div id="copyright">
<div class="container">
<p class="h5 text-center">Copyright  © 2014 | Cotek</p>
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