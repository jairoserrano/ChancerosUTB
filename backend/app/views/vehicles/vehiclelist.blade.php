@extends('layouts.master')
@section('header')
@parent
@stop
@section('content')
<!--<div class="container">-->
<div class="row">

    @if($vehicle != null)
    @foreach($vehicle as $veh)
    @if($veh->status != 0)

    <script type="text/javascript">
        function items_click() {
            document.getElementById("hed").style.visibility = "hidden";
        }
    </script>
    <div class="col-xs-9" id="hed">
        <div class="panel panel-default" id="panelvehicle">
            <a class = "close" aria-hidden="true" href="#" onclick = "items_click()">&times</a>
            <h3>To create a new chance</h3>
            {{ HTML::link('/registerchance','Register Chance', array('class' => 'btn btn-success'), false) }}
        </div> 
    </div>

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
    @endif
    @endforeach
    @endif
    <div class="col-md-6">
        <div class="col-md-5">

        </div>
    </div>
</div>
@stop