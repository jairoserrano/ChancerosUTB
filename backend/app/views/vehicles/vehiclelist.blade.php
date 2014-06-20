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
        <div class="fullwidth">
            <div class='container'>
                <div class='row' id='header'>
                    <div class="col-md-9" id="logo">ChanceUTB</div>
                    <div class="col-md-3" id="logo">
                        <p id="hello"><strong>Hello, {{ Auth::user()->name }} {{ Auth::user()->lastname }}  </strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{ $vehicle[0]->color }}
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
    </body>
</html>
