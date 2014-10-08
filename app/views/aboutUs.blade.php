@extends('index_master')

@section('title')
    Cotek - {{Lang::get('index_master.about_us')}}
@stop

@section('description')

@stop

@section('content')
<hr/>
<div class="container">
    <h1>{{Lang::get('index_master.about_us')}}</h1>
    <p>{{Lang::get('aboutUs.p1')}}</p>
    <p><strong>{{Lang::get('aboutUs.p2s')}}</strong>{{Lang::get('aboutUs.p2s')}}</p>
    <p>{{Lang::get('aboutUs.p3')}}</p>
    <p><strong>{{Lang::get('aboutUs.p4s')}}</strong></p>
    <p>{{Lang::get('aboutUs.p5')}}</p>
    <p>{{Lang::get('aboutUs.p6')}}</p>
    <p>{{Lang::get('aboutUs.p7')}}</p>
</div>
<hr/>
@stop