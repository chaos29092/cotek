@extends('index_master')

@section('title')
    Cotek - {{Lang::get('index_master.support')}}
@stop

@section('description')

@stop

@section('content')
<hr/>
<div class="container">
    <h1>{{Lang::get('index_master.support')}}</h1>
    <hr/>
    <h3>{{Lang::get('support.h1')}}</h3>
    <p>{{Lang::get('support.p1')}}</p>
    <hr/>
    <h3>{{Lang::get('support.h2')}}</h3>
    <p>{{Lang::get('support.p2')}}</p>
    <hr/>
    <h3>{{Lang::get('support.h3')}}</h3>
    <p>{{Lang::get('support.p3')}}</p>
    <p>{{Lang::get('support.p4')}}</p>
    <table class="table table-bordered">
        <tr>
            <th>{{Lang::get('support.th_1')}}(USD)</th>
            <th>{{Lang::get('support.th_2')}}(RMB)</th>
            <th>{{Lang::get('support.th_3')}}(USD)</th>
            <th>{{Lang::get('supprot.th_4')}}</th>
        </tr>
        <tr>
            <td>0.2million</td>
            <td>1.2million</td>
            <td>2million USD</td>
            <td>0.6%</td>
        </tr>
            <tr>
                <td>0.1million</td>
                <td>0.6million</td>
                <td>1million USD</td>
                <td>0.3%</td>
            </tr>
            <tr>
                    <td>0.02million</td>
                    <td>0.12million</td>
                    <td>0.2million USD</td>
                    <td>0.06%</td>
            </tr>
    </table>
    <p>{{Lang::get('support.p5')}}</p>
</div>
<hr/>
@stop