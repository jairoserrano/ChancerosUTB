<!DOCTYPE html>
<html>
    <head>
        <title>Add Vehicle - Chance UTB</title>
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
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('fee', 'fee:') }}
                 {{ Form::text('fee', null, array('placeholder' => 'fee', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
                
            </div>
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('date', 'Date:') }}
                 {{ Form::text('date', null, array('placeholder' => 'date', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('destination', 'Destination:') }}
                 {{ Form::text('destination', null, array('placeholder' => 'destination', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
                
            </div>
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('departure', 'Departure:') }}
                 {{ Form::text('departure', null, array('placeholder' => 'departure', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('capacity', 'Capacity:') }}
                 {{ Form::text('capacity', null, array('placeholder' => 'Capacity', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
                
            </div>
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('route', 'Route:') }}
                 {{ Form::text('route', null, array('placeholder' => 'Route', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 {{ Form::label('route', 'Route:') }}
                
             <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
            <div class="col-md-6">
                <div class='form-group '>
                 {{ Form::label('comments', 'Comments:') }}
                 {{ Form::text('comments', null, array('Comments' => 'Route', 'class' => 'form-control', 'required' => 'required')) }}
               </div>
            </div>
        </div>
      </div>
        
        
        
        <!-- ', '', 'vehicles_id');-->
       @stop
          
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}  
    </body>
</html>