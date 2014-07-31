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
@if($chance->capacity != 0)
<div class="col-xs-12 col-md-4 panel panel-success chancelist">
    <div class="row panel-heading">
        <h3 class="panel-title glyphicon glyphicon-hand-right"> {{$chance->departure}} to {{$chance->destination}}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-md-7 glyphicon glyphicon-flag">
                {{ $chance->vehicles->brand }} {{ $chance->vehicles->model }}
            </div>
            <div class="col-xs-12 col-md-5 glyphicon glyphicon-download-alt"> {{$chance->capacity}}</div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-7 glyphicon glyphicon-calendar"> {{$chance->date}}</div>
            <div class="col-xs-12 col-md-5 glyphicon glyphicon-time"> {{$chance->hour}}</div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-7 glyphicon glyphicon-road">
                @if($chance->route==1) Avenida
                @elseif($chance->route==2) Mamonal
                @elseif($chance->route==3) Bosque
                @elseif($chance->route==4) Otro
                @endif
            </div>
            <div class="col-xs-12 col-md-5 glyphicon glyphicon-usd"> {{$chance->fee}}</div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 col-md-12 glyphicon glyphicon-user">
                {{$chance->vehicles->users->name}} {{$chance->vehicles->users->lastname}}
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-6">
                {{ Form::open(array('url' => 'usersofchance','method'=>'POST','role'=>'form', 'class'=>'form-inline')) }}
                {{ Form::button('Take!', array('type' => 'submit', 'class' => 'glyphicon glyphicon-ok-sign btn btn-success', 'id' => 'forms-buttons')) }}
                <input type="hidden" name="chances_id" value="{{$chance->id}}" id="chances_id"/>
                {{ Form::close() }}
            </div>
            <div class="col-xs-6 col-md-6">
                {{ HTML::link('/chance/'.$chance->id, 'Details', array('class' => 'glyphicon glyphicon-info-sign btn btn-info', 'id' => 'forms-buttons'), false)}}
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @foreach($chance->userofchances as $var)
        <div class="row">
            {{ $var->users->name }} {{ $var->users->lastname }}
        </div>
        @endforeach
    </div>
</div>
<hr class="hidden-md hidden-lg visible-xs"/>
@endif
@endforeach
@endif
@stop
