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
        @section('header')
        <div class="navbar navbar-inverse navbar-fixed-top header_color" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="col-md-4" id="logo">
                    <a class="navbar-brand" href="#">ChanceUTB</a>
                </div>
                <div class="col-md-4" id="logo">
                    <p  class="panel-title " ><strong>Hello, {{ Auth::user()->name }} {{ Auth::user()->lastname }}  </strong></p>
                </div>
                <div class="col-md-4" id="logo">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>{{ HTML::link('/','Dashboard')}}</a></li>
                            <li>{{ HTML::link('/profile','Profile')}}</a></li>
                            <li>{{ HTML::link('/','Help')}}</a></li>                    
                            <li>{{ HTML::link('/logout','Logout')}}</a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        @show
        <div class="container">
            @yield('content')
        </div>

        <footer>
            <div class="contentfooter">
                @yield('footer')


            </div>
        </footer>
    </body>
</html>

