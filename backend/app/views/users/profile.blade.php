<!DOCTYPE html>
<html>
    <head>
        <title>Edit Vehicle - Chance UTB</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap -->
        {{ HTML::style('recursos/css/bootstrap.min.css') }}
        
    </head>
    <body>        
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
                        <button type="button"  class="label label-default">Edit</button>
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
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="recursos/js/jquery-1.9.1.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            {{ HTML::script('recursos/js/bootstrap.min.js') }}
            @stop
    </body>
</html>