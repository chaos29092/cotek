@extends('index_master')

@section('title')
    Cotek - Index
@stop

@section('description')

@stop

@section('content')
    {{--Carousel begin--}}
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <div class="item active">
              <img src="{{asset('img/1.jpg')}}">
               {{--<div class="carousel-caption">--}}
                {{--<h3>Headline1</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>--}}
              {{--</div>--}}
            </div><!-- End Item -->

             <div class="item">
              <img src="{{asset('img/2.jpg')}}">
               {{--<div class="carousel-caption">--}}
                {{--<h3>Headline2</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>--}}
              {{--</div>--}}
            </div><!-- End Item -->

            <div class="item">
              <img src="{{asset('img/3.jpg')}}">
               {{--<div class="carousel-caption">--}}
                {{--<h3>Headline2</h3>--}}
                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="http://sevenx.de/demo/bootstrap-carousel/" target="_blank" class="label label-danger">Bootstrap 3 - Carousel Collection</a></p>--}}
              {{--</div>--}}
            </div><!-- End Item -->

          </div><!-- End Carousel Inner -->


        	<ul class="nav nav-pills nav-justified">
              <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">{{Lang::get('index.cnc_router')}}<small>{{Lang::get('index.s1')}}</small></a></li>
              <li data-target="#myCarousel" data-slide-to="1"><a href="#">{{Lang::get('index.cnc_engraving')}}<small>{{Lang::get('index.s2')}}</small></a></li>
              <li data-target="#myCarousel" data-slide-to="2"><a href="#">{{Lang::get('index.cnc_plotter')}}<small>{{Lang::get('index.s3')}}</small></a></li>
            </ul>


        </div><!-- End Carousel -->
    </div>
    {{--Carousel end--}}

    {{--Product list begin--}}
    <div class="container-fluid">
        <div class="container container-pad" id="property-listings">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{Lang::get('index.offer')}}</h1>
                    <p>{{Lang::get('index.des')}}</p>
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
@stop