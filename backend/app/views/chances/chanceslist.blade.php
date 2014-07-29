@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<!--<div class="container">-->
@if(isset($message))
    <h4>Alert!</h4>
    <p>{{ $message }}</p>
@endif
@if($chances != null)
@foreach($chances as $chance)
<div class="col-xs-12 col-md-4 panel panel-success chancelist">
    <div class="row panel-heading">
        <h3 class="panel-title glyphicon glyphicon-hand-right"> {{$chance->departure}} to {{$chance->destination}}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 glyphicon glyphicon-flag">
                {{$chance->vehicles_id}}
            </div>
        </div>
        <div class="row">
            <div class="col-xs-9 glyphicon glyphicon-calendar"> {{$chance->date}}</div>
            <div class="col-xs-3 glyphicon glyphicon-user"> {{$chance->capacity}}</div>
        </div>
        <div class="row">
            <div class="col-xs-7 glyphicon glyphicon-road">
                @if($chance->route==1) Avenida
                @elseif($chance->route==2) Mamonal
                @elseif($chance->route==3) Bosque
                @elseif($chance->route==4) Otro
                @endif
            </div>
            <div class="col-xs-5 glyphicon glyphicon-usd"> {{$chance->fee}}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6">
            {{ Form::open(array('url' => 'usersofchance','method'=>'POST','role'=>'form', 'class'=>'form-inline')) }}
            {{ Form::button('Take!', array('type' => 'submit', 'class' => 'glyphicon glyphicon-hand-up btn btn-success')) }}
            <input type="hidden" name="chances_id" value="{{$chance->id}}" id="chances_id"/>
            {{ Form::close() }}
        </div>
        <div class="col-xs-6">
            {{ HTML::link('/chance/'.$chance->id, ' Details', array('class' => 'glyphicon glyphicon-list-alt btn btn-info'), false)}}
        </div>
    </div>
</div>
<hr class="hidden-md hidden-lg visible-xs"/>
@endforeach
@endif
@stop
