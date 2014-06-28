<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vehicle List</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap -->
        {{ HTML::style('recursos/css/bootstrap.min.css') }}
        {{ HTML::style('recursos/css/style.css') }}
    </head>
    <body>
        @extends('layouts.master')
        @section('header')
        @parent
        @stop
        @section('content')
        <!--<div class="container">-->
        <div class="row">
            @if($chances != null)
            @foreach($chances as $chance)
            <div class="col-md-6">
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
            @endforeach
            @endif
        </div>
        <!--</div>-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
        @stop
    </body>
</html>