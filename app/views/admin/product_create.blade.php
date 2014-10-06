@extends('admin.master')
@section('header')
<h2>Product Create</h2>
@stop
@section('content')
{{--创建产品表格--}}
{{ Form::open(array('url' => 'admin/products/create', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' )) }}

{{--name--}}
<div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name">
</div>

{{--产品分类--}}
<div class="form-group">
    <label for="category">产品分类</label>
    {{ Form::select('category',
    array( 'Uncategorized' => 'Uncategorized', 'Plotter' => 'Plotter','Laser' => 'Laser', 'Router' => 'Router'),
    $product->category) }}
</div>


{{--是否促销 is_discount--}}
<div class="form-group">
    <label for="is_discount">是否促销,选择是的话，该产品会被放在首页，最多20个</label>
    {{ Form::select('is_discount',
    array( '1' => 'yes', '0' => 'no'),
    $product->is_discount) }}
</div>

{{--主图--}}
<div class="form-group">
    <label for="mainphoto">页幕主图,要求背景透明，500宽</label>
    <input name="mainphoto" type="file" id="mainphoto">
</div>

{{--introduction--}}
<div class="form-group">
    <label for="introduction">Introduction</label>
    <textarea name="introduction" class="form-control" id="introduction" rows="6">
        {{--Introduction Content Begin--}}
        <h1>标题</h1>
        <p>标题下方简单的1,2行</p>
        <p>
            <small>大幅内容，例：Somos una fabrica profesional de máquina estética en China, Ahora, hay una gran promoción en
                IPL (máquina de depilación), sólo en julio y agosto!!!! El precio local de IPL es € 4-5000,
                ahora con precio de descuento, está sólo € 1400. Es ventas locas!!! Póngase en contacto con
                nosotros ahora mismo y no te pierdas el descuento increíble!
            </small>
        </p>
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-success"> 价格，例：€ 1400.00</button>
            <button type="button" class="btn btn-success"> Contáctenos</button>
        </div>
        <p>
            <small>按钮下方小提示：Promo Only en septiembre y octubre.</small>
        </p>
        {{--Introduction Content End--}}
    </textarea>
</div>

{{--appphoto--}}
<div class="form-group">
    <label for="appphoto">机器功能 旁边的图,500~600宽，白底或透明</label>
    <input name="appphoto" type="file" id="appphoto">
</div>

{{--app--}}
<div class="form-group">
    <label for="app">App</label>
    <textarea name="app" class="form-control" id="app" rows="6">
        {{--App Content Begin--}}
        <h2>Aplicaciones</h2>

        <p><em>app标题下方斜体字：El tratamiento de depilación láser puede hacer que un amplio espectro de luz pulsada intensa a través
                de una pequeña pieza de mano, suave.</em></p>
        <ol>
            <li><p>功能1;</p></li>
            <li><p>功能2;</p></li>
            <li><p>功能3;</p></li>
            <li><p>功能4;</p></li>
            <li><p>功能5;;</p></li>
            <li><p>更多功能可按此结构继续列出</p></li>
        </ol>
        {{--App Content End--}}
    </textarea>
</div>

{{--advantage--}}
<div class="form-group">
    <label for="advantage">Advantage</label>
    <textarea name="advantage" class="form-control" id="advantage" rows="6">
        {{--Advantage Content Begin--}}
        <h2>Advantage</h2>
        <p><em>advantage下方的斜体字.</em></p>
        <ol>
            <li><p>优势1;</p></li>
            <li><p>优势2;</p></li>
            <li><p>优势3;</p></li>
            <li><p>优势4;</p></li>
            <li><p>优势5;;</p></li>
            <li><p>更多优势可按此结构继续列出</p></li>
        </ol>
        {{--Advantage Content Begin--}}
    </textarea>
</div>

{{--adphoto_1--}}
<div class="form-group">
    <label for="adphoto_1">细节图-1，方形大图较好</label>
    <input name="adphoto_1" type="file" id="adphoto_1">
</div>
{{--adphoto_2--}}
<div class="form-group">
    <label for="adphoto_2">细节图-2，方形大图较好</label>
    <input name="adphoto_2" type="file" id="adphoto_2">
</div>
{{--adphoto_3--}}
<div class="form-group">
    <label for="adphoto_3">细节图-3，方形大图较好</label>
    <input name="adphoto_3" type="file" id="adphoto_3">
</div>
{{--adphoto_4--}}
<div class="form-group">
    <label for="adphoto_4">细节图-4，方形大图较好</label>
    <input name="adphoto_4" type="file" id="adphoto_4">
</div>

{{--tocustomer---}}
<div class="form-group">
    <label for="tocustomer">给客户的话，有更好的就修改，没有就这样</label>
    <textarea name="tocustomer" class="form-control" id="tocustomer" rows="6">
        {{--Tocustomer Content Begin--}}
        <h2>Palabras del Camellia</h2>
        <p>hola, soy administrador de clientes, Elena.</p>
        <p>Queremos hacer más socios de negocios de todo el mundo, así que estábamos locos promociones.</p>
        <p>Promo Only en septiembre y octubre~.</p>
        <p>No te pierdas esta oportunidad, queremos ser tu amigo.</p>
        <p>Por favor, póngase en contacto con nosotros tan pronto como sea posible.</p>
        <p>Esperamos su mensaje!</p>
        {{--Tocustomer Content End--}}
    </textarea>
</div>

{{--footerphoto--}}
<div class="form-group">
    <label for="footerphoto">客户经理旁边的图，白底，不超过500px宽</label>
    <input name="footerphoto" type="file" id="footerphoto">
</div>

{{--indexphoto--}}
<div class="form-group">
    <label for="indexphoto">首页产品缩略图，180X135比例</label>
    <input name="indexphoto" type="file" id="indexphoto">
</div>

{{--mrg---}}
<div class="form-group">
    <label for="mrg">主要功能，用于首页简介,最好一个单词描述一个功能</label>
    <textarea name="mrg" class="form-control" id="mrg" rows="2">
        <li>功能1</li>
        <li style="list-style: none">|</li>
        <li>功能2</li>
        <li style="list-style: none">|</li>
        <li>功能3，更多功能复制该结构</li>
    </textarea>
</div>

{{--miniintro---}}
<div class="form-group">
    <label for="miniintro">机器简介，用于首页，自己总结或查资料，让客户看了就想点进来看看，3行左右较好</label>
    <textarea name="miniintro" class="form-control" id="miniintro" rows="4">{{$product->miniintro}}</textarea>
</div>

{{--fnt---}}
<div class="form-group">
    <label for="fnt">简介下方灰色字体，可以写一些自己想写的，用于首页,不要太多</label>
    <input name="fnt" type="text" class="form-control" id="fnt" value="Suitable for Beauty Hospital，Clinics, Beauty Salons">
</div>

{{--style---}}
<div class="form-group">
    <label for="style">立式or台式，用于首页,也可以是其他属性</label>
    <input name="style" type="text" class="form-control" id="style" value="Vertical">
</div>

{{Form::submit('Create', array('class' => 'btn btn-default'))}}
<a href="{{asset('admin/products')}}">
    <button type="button" class="btn btn-danger">Cancel</button>
</a>
{{ Form::close() }}

@stop

