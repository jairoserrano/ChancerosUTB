@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
@if(isset($user))
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="page-header">
                <h3>{{$user->name}} {{$user->lastname}}</h3>
                <h5> {{$user->email}}</h5>
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
    @endif
    @stop