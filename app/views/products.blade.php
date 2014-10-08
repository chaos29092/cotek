@extends('index_master')

@section('title')
    Cotek - All {{$category}}
@stop

@section('description')

@stop

@section('content')

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

@stop