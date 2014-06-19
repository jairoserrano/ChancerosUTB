<!DOCTYPE html>
<html>
    <head>
        <title>Chance UTB</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap -->
        {{ HTML::style('recursos/css/bootstrap.min.css') }}
        {{ HTML::style('recursos/css/style.css') }}
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
        <div class="container">
            <div class="row" id="container_first">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <h3>¡Sign up!</h3>
                    {{Form::open(array('route' => 'user.store','role'=>'form', 'class'=>'form-inline')) }}
                    <div class='row'>
                        <div class="col-md-6">
                            <div class='form-group form-register'>
                                {{ Form::label('name', 'Name:') }}
                                {{ Form::text('name', null, array('placeholder' => 'Name', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-register">
                                {{ Form::label('lastname', 'Lastname:') }}
                                {{ Form::text('lastname',null, array('placeholder' => 'Lastname', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class='form-group form-register'>
                                {{ Form::label('username', 'Usermame:') }}
                                {{ Form::text('username', null, array('placeholder' => 'Usermame', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-register">
                                {{ Form::label('password', 'Password:') }}
                                {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class='form-group form-register'>
                                {{ Form::label('email', 'Email:') }}
                                {{ Form::email('email', null, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required')) }}
                            </div>
                        </div>
                    </div>
                    <div class='row buttons'>
                        <div class="col-md-6">

                            {{ Form::button('Sign up', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
                            {{ Form::button('Reset', array('type' => 'reset', 'class' => 'btn btn-default')) }} 
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="recursos/js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('recursos/js/bootstrap.min.js') }}
    </body>
</html>