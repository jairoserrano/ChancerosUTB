  
@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="page-header">
                <h3>{{Auth::user()->name}} {{Auth::user()->lastname}}</h3>
                <h5> {{Auth::user()->email}}</h5>
                <button type="button"  class="label label-default">{{ HTML::link('/user/'.Auth::user()->id.'/edit','Edit', false) }}</button>
                <button type="button"  class="label label-default">{{ HTML::link('/vehiclelist/','Vehicle list', false) }}
            </div>

        </div>
        <div class="col-md-8">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">Panel heading without title</div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">Panel heading without title</div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="container_first">



    </div>
    @stop