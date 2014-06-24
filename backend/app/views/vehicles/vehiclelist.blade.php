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

                @if($vehicle != null)
                @foreach($vehicle as $veh)
                <div class="col-md-6">   
                    <h4><strong>{{ $veh->brand }} {{ $veh->model }}</strong></h4>
                    <p><strong>Plate</strong>: {{ $veh->plate }} </p>
                    <p><strong>Color</strong>: {{ $veh->color }} </p>
                    <p><strong>Capacity</strong>: {{ $veh->capacity }} </p>
                    <div class="col-md-2">
                        {{ HTML::link('/vehicle/'.$veh->id.'/edit','Edit', array('class' => 'btn btn-success'), false)}}
                    </div>
                    <div class="col-md-5">

                        {{Form::open(array('url' => '/vehicle/'.$veh->id, 'method'=>'DELETE','role'=>'form', 'class'=>'form-inline')) }}
                        {{ Form::text('id', $veh->id, array('hidden' => 'true')) }}
                        {{ Form::button('Remove', array('type' => 'submit', 'class' => 'btn btn-danger')) }}
                        {{Form::close()}}
                    </div>
                </div>
                @endforeach
                @endif

                <div class="col-md-6">

                </div>
            </div>
        <!--</div>-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
        @stop
    </body>
</html>
