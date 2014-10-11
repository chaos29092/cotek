@extends('index_master')

@section('title')
    Cotek - FAQ
@stop

@section('description')

@stop

@section('content')
<hr/>
{{--faq begin--}}
<div class="container">
<h1>FAQ</h1>
    <h2>CUTTING PLOTTER</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              {{Lang::get('FAQ.q1')}}
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
          <div class="panel-body">
          <ul>
              <li>{{Lang::get('FAQ.a1_1')}}</li>
              <li>{{Lang::get('FAQ.a1_2')}}</li>
              <li>{{Lang::get('FAQ.a1_3')}}</li>
              <li>{{Lang::get('FAQ.a1_4')}}</li>
              </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
             {{Lang::get('FAQ.q2')}}
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
                <li>{{Lang::get('FAQ.a2_1')}}</li>
                <li>{{Lang::get('FAQ.a2_2')}}</li>
                </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              {{Lang::get('FAQ.q3')}}
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
                <li>{{Lang::get('FAQ.a3_1')}}</li>
                <li>{{Lang::get('FAQ.a3_2')}}</li>
                <li>{{Lang::get('FAQ.a3_3')}}</li>
                <li>{{Lang::get('FAQ.a3_4')}}</li>
                </ul>
          </div>
        </div>
      </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              {{Lang::get('FAQ.q4')}}
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
                <li>{{Lang::get('FAQ.a4_1')}}</li>
                <li>{{Lang::get('FAQ.a4_2')}}</li>
                <li>{{Lang::get('FAQ.a4_3')}}</li>
                </ul>
          </div>
        </div>
      </div>
    <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              {{Lang::get('FAQ.q5')}}
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
          <div class="panel-body">
            <ul>
                <li>{{Lang::get('FAQ.a5_1')}}</li>
                <li>{{Lang::get('FAQ.a5_2')}}</li>
                </ul>
          </div>
        </div>
      </div>
    </div>


    <h2>LASER ENGRAVING</h2>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  {{Lang::get('FAQ.lq1')}}
                </a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
              <div class="panel-body">
              <ul>
                  <li>{{Lang::get('FAQ.la1_1')}}</li>
                  <li>{{Lang::get('FAQ.la1_2')}}</li>
                  <li>{{Lang::get('FAQ.la1_3')}}</li>
                  <li>{{Lang::get('FAQ.la1_4')}}</li>
                  <li>{{Lang::get('FAQ.la1_5')}}</li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 {{Lang::get('FAQ.lq2')}}
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.la2_1')}}</li>
                    <li>{{Lang::get('FAQ.la2_2')}}</li>
                    <li>{{Lang::get('FAQ.la2_3')}}</li>
                    </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  {{Lang::get('FAQ.lq3')}}
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.la3_1')}}</li>
                    <li>{{Lang::get('FAQ.la3_2')}}</li>
                    <li>{{Lang::get('FAQ.la3_3')}}</li>
                    <li>{{Lang::get('FAQ.la3_4')}}</li>
                    </ul>
              </div>
            </div>
          </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  {{Lang::get('FAQ.lq4')}}
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.la4_1')}}</li>
                    <li>{{Lang::get('FAQ.la4_2')}}</li>
                    <li>{{Lang::get('FAQ.la4_3')}}</li>
                    <li>{{Lang::get('FAQ.la4_4')}}</li>
                    </ul>
              </div>
            </div>
          </div>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  {{Lang::get('FAQ.q5')}}
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.a5_1')}}</li>
                    <li>{{Lang::get('FAQ.a5_2')}}</li>
                    </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  {{Lang::get('FAQ.q5')}}
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.a5_1')}}</li>
                    <li>{{Lang::get('FAQ.a5_2')}}</li>
                    </ul>
              </div>
            </div>
          </div>
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  {{Lang::get('FAQ.q5')}}
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel">
              <div class="panel-body">
                <ul>
                    <li>{{Lang::get('FAQ.a5_1')}}</li>
                    <li>{{Lang::get('FAQ.a5_2')}}</li>
                    </ul>
              </div>
            </div>
          </div>
        </div>
</div>
{{--faq end--}}
@stop