@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
{{Form::open(array('url' => '/chance','role'=>'form', 'method' => 'POST')) }}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class='form-group '>
                {{ Form::label('destination', 'Destination:') }}
                <br/>
                {{ Form::text('destination', null, array('placeholder' => 'Destination', 'class' => 'form-control', 'required' => 'required')) }}
            </div>

        </div>
        <div class="col-md-6">
            <div class='form-group '>
                {{ Form::label('departure', 'Departure:') }}
                <br/>
                {{ Form::text('departure', null, array('placeholder' => 'Departure', 'class' => 'form-control', 'required' => 'required')) }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-6">
                <div class='form-group '>
                    {{ Form::label('date', 'Date:') }}
                    <br/>
                    <input type='date' id='date' name='date' class='form-control'/>
                </div>
            </div>
            <div class="col-md-6">
                <div class='form-group '>
                    {{ Form::label('hour', 'Hour (24 hours):') }}
                    <br/>
                    <input type='text' id='hour' name='hour' class='form-control' placeholder='10:00' pattern="[0-9]([0-9]|):[0-9][0-9]"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class='form-group '>
                {{ Form::label('capacity', 'Capacity:') }}
                <br/>
                {{ Form::text('capacity', null, array('placeholder' => 'Capacity', 'class' => 'form-control', 'required' => 'required', 'pattern' => '[0-9]*', 'title' => 'Must be a number')) }}
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row">

        <div class="col-md-6">
            <div class='form-group '>
                {{ Form::label('route', 'Route:') }}
                <br/>
                {{ Form::select('route', array('Route' => array('1' => 'Avenida', '2' => 'Mamonal', '3' => 'Bosque', '4' => 'Otro')),null ,array('class' => 'form-control')); }}
            </div>
        </div>

        <div class="col-md-6">
            <div class='form-group'>
                {{ Form::label('fee', 'Fee:') }}
                <br/>
                {{ Form::text('fee', null, array('placeholder' => 'Fee', 'class' => 'form-control', 'required' => 'required', 'pattern' => '[0-9]*', 'title' => 'Must be a number')) }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('vehicle_id', 'Vehiculo:') }}
            <br/>
            <select class="form-control" id="vehicles_id" name="vehicles_id">
                @foreach($vehicles as $veh)
                <option value="{{$veh->id}}">{{$veh->brand}} {{$veh->model}} {{$veh->plate}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <div class='form-group '>
                {{ Form::label('comments', 'Comments:') }}
                <br/>
                {{ Form::text('comments', null, array('Comments' => 'Route', 'class' => 'form-control', 'required' => 'required')) }}
            </div>
        </div>
    </div>
    <div class='row buttons'>
        <div class="col-md-6 col-sm-12">
            {{ Form::button('Add', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
            {{ Form::button('Reset', array('type' => 'reset', 'class' => 'btn btn-default')) }} 
        </div>
        <div class="col-md-6">

        </div>
    </div>

</div>
{{ Form::close() }}
@stop