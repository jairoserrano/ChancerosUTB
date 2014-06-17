<!DOCTYPE html>
<html>
    <head>
        <title>Chance UTB</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap -->
        {{ HTML::style('recursos/css/bootstrap.min.css' , array('media'=>'screen')) }}
        {{ HTML::style('recursos/css/style.css' , array('media'=>'screen')) }}
    </head>
    <body>
        <div class="fullwidth">
            <div class='container'>
                <div class='row' id='header'>
                    <div class="col-md-5" id="logo">ChanceUTB</div>
                    <div class='col-md-7'>
                        {{Form::open(array('route' => 'sessions.store','role'=>'form', 'class'=>'form-inline')) }}

                        <div class='form-group'>
                            {{ Form::email('email', null, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                        <div class='form-group'>
                            {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')) }}
                        </div>
                        <div class='form-group'>
                            {{ Form::button('Sign in', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
    </body>
</html>