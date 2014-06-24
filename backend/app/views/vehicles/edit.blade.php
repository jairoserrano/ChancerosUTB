<!DOCTYPE html>
<html>
    <head>
        <title>Edit Vehicle - Chance UTB</title>
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
        <div class="row" id="container_first">
            <div class="col-md-6 hidden-xs">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>Edit Vehicle</h3>
                {{Form::open(array('url' => '/vehicle/'.$vehicle->id,'method' => 'PUT', 'role'=>'form', 'class'=>'form-inline')) }}
                <div class='row'>
                    <div class="col-md-6 col-sm-12|">
                        <div class='form-group form-register'>
                            {{ Form::label('plate', 'Plate:') }}
                            <br/>
                            {{ Form::text('id', $vehicle->id, array('hidden' => 'true')) }}
                            {{ Form::text('plate', $vehicle->plate, array('placeholder' => 'Plate', 'class' => 'form-control', 'required' => 'required', )) }}

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group form-register">
                            {{ Form::label('color', 'Color:') }}
                            <br/>
                            {{ Form::text('color',$vehicle->color, array('placeholder' => 'Color', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-6 col-sm-12">
                        <div class='form-group form-register'>
                            {{ Form::label('model', 'Model:') }}
                            <br/>
                            {{ Form::text('model', $vehicle->model, array('placeholder' => 'Model', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class='form-group form-register'>
                            {{ Form::label('capacity', 'Capacity:') }}
                            <br/>
                            {{ Form::text('capacity', $vehicle->capacity, array('placeholder' => 'Capacity', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-6 col-sm-12">
                        <div class='form-group form-register'>
                            {{ Form::label('type', 'Type:') }}
                            <br/>
                            {{ Form::text('type', $vehicle->type, array('placeholder' => 'Type', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class='form-group form-register'>
                            {{ Form::label('brand', 'Brand:') }}
                            <br/>
                            {{ Form::text('brand', $vehicle->brand, array('placeholder' => 'Brand', 'class' => 'form-control', 'required' => 'required')) }}
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
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
        @stop
    </body>
</html>