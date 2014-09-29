@extends('admin.master')
@section('header')
<h2>Product Delete</h2>
@stop
@section('content')
{{--创建产品表格--}}
{{ Form::open(array('url' => 'admin/products/'.$product->id, 'method'=>'delete', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' )) }}

<p class="text-danger">确定要删除 {{$product->name}} 吗？</p>

{{--footerphoto--}}
{{Form::submit('Delete', array('class' => 'btn btn-danger'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-success">Cancel</button>
</a>
{{ Form::close() }}

@stop