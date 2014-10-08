@extends('index_master')

@section('title')
    Cotek - {{Lang::get('index_master.contact_1')}}
@stop

@section('description')

@stop

@section('content')
<hr/>
{{--Contact begin--}}
<div class="container">
<h1>{{Lang::get('index_master.contact_1')}}</h1>
<address>
  <strong>Henan Huaxia Haina Sales & Marketing Co.,Ltd. </strong><br>
  Y06 Building,11 Changchun Road,<br>
  Zhengzhou City,Henan,China,450001<br><br/>
  <abbr title="Phone">Tel:</abbr> +86 139 3821 6025<br><br/>
  <abbr title="email">Email:</abbr> <a href="mailto:info@sinohuaxia.com">info@sinohuaxia.com</a>
</address>
</div>
{{--Contact end--}}
<hr/>
@stop