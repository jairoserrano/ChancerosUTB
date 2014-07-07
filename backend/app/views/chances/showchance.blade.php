@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<!--<div class="container">-->
<div class="col-md-12">
    @if($chance != null)
    <div class="col-md-6 col-md-offset-3">
        <h4><strong>Chance to {{$chance->destination}}</strong></h4>
        <p>Departure: {{$chance->departure}}</p>
        <p>Fee: ${{$chance->fee}}</p>
        <p>Capacity: {{$chance->capacity}}</p>
        <p>Comments: {{$chance->comments}}</p>
        <p>Route: 
            @if($chance->route==1)
            Avenida
            @elseif($chance->route==2)
            Mamonal
            @elseif($chance->route==3)
            Bosque
            @elseif($chance->route==4)
            Otro
            @endif
        </p>
        {{Form::open(array('url' => '','method'=>'POST','role'=>'form', 'class'=>'form-inline')) }}
        {{ Form::button('Take this chance', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
        <!-- This button is for later, when we add the table and the function of adding comments
        {{ Form::button('Add a comment', array('type' => 'reset', 'class' => 'btn btn-default')) }} 
        -->
        {{Form::close()}}
    </div>
    @endif
</div>
@stop