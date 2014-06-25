@@ -0,0 +1,55 @@
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
        
    <div class="navbar navbar-inverse navbar-fixed-top header_color" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
        <div class="container">
           
                <div class="panel panel-default container_" style="width:80%;  margin-top: 50px">
                    hola belkis el mundo esta contigo y llamas tambien
                </div>
            
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
        

    </body>
</html>