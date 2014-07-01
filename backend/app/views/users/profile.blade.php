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
            <div class="col-md-12">
                <h3>{{Auth::user()->name}} {{Auth::user()->lastname}}</h3>
                <p>Email: {{Auth::user()->email}}</p>
                <p>Username: {{Auth::user()->username}}</p>
                <p>: {{Auth::user()->username}}</p>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
        @stop
    </body>
</html>