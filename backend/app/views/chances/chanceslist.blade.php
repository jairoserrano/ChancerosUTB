@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<!--<div class="container">-->
@if($chances != null)
  @foreach($chances as $chance)
      <div class="col-xs-12 col-md-4 chance">
          <div class="row">
            <div class="col-xs-12">
              <strong class="glyphicon glyphicon-hand-right"> {{$chance->departure}} to {{$chance->destination}}</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8">{{$chance->date}}</div>
            <div class="col-xs-4">C {{$chance->capacity}}</div>
          </div>
          <div class="row">
            <div class="col-xs-8">
              Route:
                @if($chance->route==1) Avenida
                  @elseif($chance->route==2) Mamonal
                  @elseif($chance->route==3) Bosque
                  @elseif($chance->route==4) Otro
                @endif
              </div>
              <div class="col-xs-4">${{$chance->fee}}</div>
            </div>
            <div class="row">
              <div class="col-xs-6">
                {{ Form::open(array('url' => '','method'=>'POST','role'=>'form', 'class'=>'form-inline')) }}
                {{ Form::button(' Take!', array('type' => 'submit', 'class' => 'glyphicon glyphicon-hand-up btn btn-success')) }}
                {{ Form::close() }}
              </div>
              <div class="col-xs-6">
                {{ HTML::link('/chance/'.$chance->id, ' Details', array('class' => 'glyphicon glyphicon-list-alt btn btn-info'), false)}}
              </div>
          </div>
      </div>
    @endforeach
    @endif

<!--</div>-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="recursos/js/jquery-1.9.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{ HTML::script('recursos/js/bootstrap.min.js') }}
@stop
