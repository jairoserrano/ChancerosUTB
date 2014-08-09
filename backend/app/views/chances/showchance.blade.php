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
@if($chance != null)
<div class="col-xs-12 col-md-6 col-md-offset-3 panel panel-success chancelist">
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
                <a href="/user/{{$chance->vehicles->users->id}}">
                    {{$chance->vehicles->users->name}} {{$chance->vehicles->users->lastname}}
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5 col-md-6">
            {{ Form::open(array('url' => 'usersofchance','method'=>'POST','role'=>'form', 'class'=>'form-inline')) }}
            {{ Form::button('Take!', array('type' => 'submit', 'class' => 'glyphicon glyphicon-plus-sign  btn btn-success', 'id' => 'forms-buttons')) }}
            <input type="hidden" name="chances_id" value="{{$chance->id}}" id="chances_id"/>
            {{ Form::close() }}
        </div>
        <div class="col-xs-5 col-md-6">
            {{ Form::open(array('url' => 'rated/create','method'=>'GET','role'=>'form', 'class'=>'form-inline')) }}
            {{ Form::button('Rate', array('type' => 'submit', 'class' => 'btn btn-primary glyphicon glyphicon-plus-sign', 'id' => 'forms-buttons')) }}
            <input type="hidden" name="chances_id" value="{{$chance->id}}" id="chances_id"/>
            {{ Form::close() }}
        </div>
    </div>
    <div class="panel-footer">
        @foreach($chance->userofchances as $var)
        <div class="row">
            <p>
                <a href="/user/{{$var->users->id}}">
                    {{ $var->users->name }} {{ $var->users->lastname }}
                </a>
                took this chance.
            </p>
        </div>
        @endforeach
    </div>
</div>
<div class="col-md-6 col-xs-12 col-md-offset-3 panel panel-primary">
    <div class="row panel-heading">
        <h4>
            <span class="glyphicon glyphicon-comment"></span> Comments
        </h4>
    </div>
    <div class="container-full">
        <div class="row panel-footer">
            <div class="col-md-12">
                @if(isset($messagecomment))
                <h5>{{$messagecomment}}</h5>
                @endif
                {{Form::open(array('url' => 'comments', 'method'=>'POST', 'role'=>'form', 'class'=>'form-inline'))}}
                {{Form::label('text', 'Write a commment:')}}
                {{Form::textarea('text', null, array('rows' => '2','placeholder' => 'Write your comment...', 'class' => 'form-control', 'required' => 'required')) }}
                {{Form::hidden('chances_id', $chance->id, array('value' => $chance->id))}}
            </div>

            <div class="col-xs-12 col-md-12">
                {{ Form::button('Add', array('type' => 'submit', 'class' => 'btn btn-success col-xs-offset-6 col-xs-6 col-sm-offset-8 col-sm-4 col-md-offset-10 col-md-2')) }}
                {{Form::close()}}
            </div>
        </div>
        <div class="row">
            @foreach($chance->comment as $comment)
            <p>
                Comment by {{ $comment->users->name }}:
                {{ $comment->text }}
            </p>
            @endforeach
        </div>
    </div>
</div>
<hr class="hidden-md hidden-lg visible-xs"/>
@endif
@stop
