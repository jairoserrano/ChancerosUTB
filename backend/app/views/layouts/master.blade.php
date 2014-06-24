<html>
    <head>

    </head>
    <body>
        @section('header')
        <div class="fullwidth">
            <div class='container'>
                <div class='row' id='header'>
                    <div class="col-md-9" id="logo">ChanceUTB</div>
                    <div class="col-md-3" id="logo">
                        <p id="hello"><strong>Hello, {{ Auth::user()->name }} {{ Auth::user()->lastname }}  </strong></p>
                        <p>{{ HTML::link('/logout','Logout')}}</p>
                    </div>
                </div>
            </div>
        </div>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>