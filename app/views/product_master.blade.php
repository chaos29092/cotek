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

{{--top begin--}}
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

{{-- 页头开始 --}}
<div class="jumbotron">
    <div class="container">
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
{{-- 产品功能结束 --}}

{{-- 产品优势开始 --}}
<div id="advantage">
    <div class="container">
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
</div>
{{-- 产品优势结束 --}}

{{-- 产品表格开始 --}}
<div class="container">
    <h2 class="text-center h1">Product Parameters</h2>
    <table class="table table-bordered">
        <tr>
            <th>MODEL</th>
            <th>CTK-360C</th>
            <th>CTK-720C</th>
            <th>CTK-870C</th>
            <th>CTK-1100C</th>
            <th>CTK-1350C</th>
        </tr>
        <tr>
            <td>Max Paper Width</td>
            <td>360mm</td>
            <td>720mm</td>
            <td>870mm</td>
            <td>1100mm</td>
            <td>1350mm</td>
        </tr>
        <tr>
            <td>Max Cutting Width</td>
            <td>330mm(12" )</td>
            <td>630mm(24" )</td>
            <td>780mm(30" )</td>
            <td>1000mm(39" )</td>
            <td>1260mm(48" )</td>
        </tr>
        <tr>
            <td>Motor</td>
            <td colspan="5">Original imported high speed stepper/servo motor</td>
        </tr>
        <tr>
            <td>Cutting pressure/Speed</td>
            <td colspan="5">10-990g  /  50-800mm/s</td>
        </tr>
        <tr>
            <td>Repeatable precision</td>
            <td colspan="5">< ±0.1mm</td>
        </tr>
        <tr>
            <td>Carriage</td>
            <td colspan="5">Whole aluminum Carriage with Imported Gear inside.</td>
        </tr>
        <tr>
            <td>Mechanical Resolution</td>
            <td colspan="5">0.0254mm/Step(0.001"/step)</td>
        </tr>
        <tr>
            <td>Special Setting</td>
            <td colspan="5">Dual Cutter holders, Dual strips</td>
        </tr>
        <tr>
            <td>Stands</td>
            <td colspan="5">Yes, All comes with Stand besides CTK-360C</td>
        </tr>
        <tr>
            <td>Interface/EMS-memory</td>
            <td colspan="5">Serial & USB / 8M or Serial, USB, reticle & USB flash disk </td>
        </tr>
        <tr>
            <td>Control language</td>
            <td colspan="5">DMPL/HPGL </td>
        </tr>
        <tr>
            <td>Type of cutter</td>
            <td colspan="5">Long longevity high-speed carbon alloy-steel cutter</td>
        </tr>
        <tr>
            <td>System</td>
            <td colspan="5">Vista 32bit&64bit, Win 7 32bits&64bits, XP, MAC, etc.</td>
        </tr>
        <tr>
            <td>Software</td>
            <td colspan="5">CorelDraw, Artcut, Master Cut, Sign Cut pro, Flexi starter, Ucancam, Adobe Illustrator, etc.</td>
        </tr>
        <tr>
            <td>Cutting materials</td>
            <td colspan="5">Vinyl, sticker, car sticker, decal, EC film, sand blast film, reflective sheet, cardboard, etc.</td>
        </tr>
    </table>
</div>
{{-- 产品表格结束 --}}
<hr/>
{{-- 体现实力开始 --}}
<div>
    <h2 class="text-center h1">Our Factory and Clients</h2>
    <img src="{{asset('img/Global_Customer_2.jpg')}}" class="img-responsive" alt=""/>
</div>
{{-- 体现实力结束 --}}
{{--客户经理开始--}}
<div id="me">
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