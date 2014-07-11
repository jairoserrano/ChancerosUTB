@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<div class="row" id="container_first">
    <div class="col-md-6 hidden-xs">
    </div>
    <div class="col-md-6 col-sm-12">
        <h3>Edit Profile</h3>
        {{Form::open(array('url' => '/user/'.$user->id,'method' => 'PUT', 'role'=>'form', 'class'=>'form-inline')) }}
        <div class='row'>
            <div class="col-md-6 col-sm-12|">
                <div class='form-group form-register'>
                    {{ Form::label('name', 'Name:') }}
                    <br/>
                    {{ Form::text('id', $user->id, array('hidden' => 'true')) }}
                    {{ Form::text('name', $user->name, array('placeholder' => 'Name', 'class' => 'form-control', 'required' => 'required', )) }}
                </div>
            </div>
            <div class="col-md-6">
                            <div class="form-group form-register">
                                {{ Form::label('lastname', 'Lastname:') }}
                                </br>
                                {{ Form::text('lastname', $user->lastname, array('placeholder' => 'Lastname', 'class' => 'form-control', 'required' => 'required', )) }}
                            </div>
            </div>
            <div class="col-md-6">
                            <div class="form-group form-register">
                                {{ Form::label('email', 'Email:') }}
                                </br>
                                {{ Form::text('email', $user->email, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required', )) }}
                            </div>
            </div>
            <div class="col-md-6">
                            <div class="form-group form-register">
                                {{ Form::label('password', 'Password:') }}
                                </br>
                                 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
            </div>
        </div>
        <div class='row buttons'>
            <div class="col-md-6 col-sm-12">
                {{ Form::button('Edit', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
                {{ Form::button('Reset', array('type' => 'reset', 'class' => 'btn btn-default')) }} 
            </div>
            <div class="col-md-6">

            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop