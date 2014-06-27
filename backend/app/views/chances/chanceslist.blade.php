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
                    {{$chance->date}}
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