<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','Login')</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Bootstrap -->
        {{ HTML::style('../css/bootstrap.min.css') }}
        {{ HTML::style('../css/style.css') }}
    </head>
    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-md-1'>
                    <h1>Form</h1>

                    {{Form::open(array('route' => 'sessions.store'))}}

                    <ul>
                        <li>
                            {{Form::label('email', 'Email:')}}
                            {{Form::text('email')}}

                        </li>
                        <li>
                            {{Form::label('password', 'Password:')}}
                            {{Form::password('password')}}
                        </li>

                        <li>
                            {{Form::submit()}}
                        </li>
                    </ul>

                    {{Form::close()}}
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/jquery-1.9.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('../js/bootstrap.min.js') }}
    </body>
</html>