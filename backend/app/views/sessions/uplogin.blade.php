<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login chanceros UTB</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap core CSS -->
        {{ HTML::style('recursos/css/bootstrap.min.css' , array('media'=>'screen')) }}
        {{ HTML::style('recursos/css/style.css' , array('media'=>'screen')) }}
        {{ HTML::style('bootstrap/css/bootstrap.theme.min.css' , array('media'=>'screen')) }}        
    </head>
    <body>
        <div class="fullwidth">

            <div class='row' id='header' style="height: 60px">
                <div class="col-md-5" id="logo">ChanceUTB</div> 
            </div>
        </div>
        <div id="container" style="width:800px;margin: 0 auto;">
            <div class="panel panel-default"style="width:80%;  margin-top: 90px">
                <div class="panel-body"style="width:95%; ">
                    <h2 class="form-signin-heading" >Chance UTB</h2>
                    <h4>Please re-enter your password. </h4> 
                    <p> The password is invalid. Please make sure caps lock is not enabled and try again.</p>
                    <p> Forgot your password? </p>
                </div>
            </div>

            <div class="panel panel-default"style="width:80%;  margin-top: 50px">
                {{Form::open(array('route' => 'sessions.store','role'=>'form', 'class'=>'form-signin')) }}
                    <div class='form-group'>
                        {{ Form::email('email', null, array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required')) }}
                    </div>
                    <div class='form-group'>
                        {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required')) }}
                    </div>
                    <!--  <div class='form-group'>
                    {{ Form::checkbox('remember-me', 'value')}}
                    </div>-->
                    <div class='form-group '>
                        {{ Form::button('Sign in', array('type' => 'submit', 'class' => 'btn btn-success')) }}  
                    </div> 

                {{Form::close()}}
            </div>

        </div>

    </body>
</html>
