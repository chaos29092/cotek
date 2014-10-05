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
    <title>Cotek FAQ</title>
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

<!-- Add your site or application content here -->
{{--message开始--}}
@if(Session::has('message'))
<div class="alert alert-success" id="alertmessage">
    <p class="text-center">{{Session::get('message')}}</p>
</div>
@endif
{{--message结束--}}
{{--top begin--}}
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
<hr/>
{{--faq begin--}}
<div class="container">
<h1>FAQ</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Collapsible Group Item #1
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Collapsible Group Item #2
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
</div>
{{--faq end--}}

{{-- 联系表格开始 --}}
<div id="contact">
    <div class="container">
        <div class="col-md-offset-1">
            <h2>有任何其他问题？请联系我们</h2>
        </div>
        {{ Form::open(array('url' => 'products/faq', 'class' => 'form-horizontal', 'role' => 'form' )) }}
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
                {{ Form::text('subject', null, array('placeholder' => 'Your Question', 'class' => 'form-control')) }}
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
                        <li>FAQ</li>
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