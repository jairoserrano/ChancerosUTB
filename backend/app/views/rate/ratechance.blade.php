@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')

@if(isset($chance))
<div class="row" id="container_first">
    <div class="col-md-6 col-md-offset-3 col-sm-12">
        <h3>Rate Passengers</h3>
        @foreach($chance->userofchances as $userofchance)
        <div class='row'>
            <div class="col-md-6 col-xs-12">
                <h4>{{ $userofchance->users->name }} {{ $userofchance->users->lastname }}</h4>
            </div>
        </div>
        <div class="row">
            {{Form::open(array('route' => 'rated.store','role'=>'form', 'class'=>'form')) }}
            <div class="col-md-6 col-xs-12">
                {{Form::open(array('route' => 'rated.store','role'=>'form', 'class'=>'form-inline')) }}
                <label for="rate">Experience: </label>
                <br>
                <label class="radio-inline">
                    <input type="radio" id="inlineCheckbox1" name="rate" value="1" class="radio"><span class="glyphicon glyphicon-plus">Positive</span>
                </label>
                <label class="radio-inline">
                    <input type="radio" id="inlineCheckbox2" name="rate" value="0" class="radio"><span class="glyphicon glyphicon-minus">Negative</span>
                </label>
                <input type="text" id="comments" name="comments" placeholder="Comments" class="form-control"/>
                <input type="hidden" name="chances_id" value="{{$chance->id}}" id="chances_id"/>
                <input type="hidden" name="users_id" value="{{$userofchance->users->id}}" id="users_id"/>
                {{ Form::button('Rate', array('type' => 'submit', 'class' => 'btn btn-success')) }}
                {{Form::close()}}
            </div>
            {{Form::close()}}
        </div>
        @endforeach
    </div>
</div>
@endif
@stop