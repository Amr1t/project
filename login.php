<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NoTes hUb</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="add.css"> 

    <style type="text/css">
      footer{
        margin-bottom: 0px;
        margin-top: 35px;
      }
    </style>
</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: white">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background-color:#23d5a4; "></span>
                    <span class="icon-bar" style="background-color:#23d5a4; "></span>
                    <span class="icon-bar" style="background-color:#23d5a4; "></span>
                </button>
                <a class="navbar-brand" href="index.php"><b style="color:#23d5a4;font-size: 25px;">NoTes hUb</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="font-family:Ebrima;">
                    
                    <li>
                        <a style="color:#23d5a4;font-size: 19px;" href="login.php">Sign In</a>
                    </li> 
                    <li><a style="color:#23d5a4;font-size: 19px;" href="signup.php">Sign Up</a></li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
      </nav>
<br><br><br><br><br>

<div class="container text-center">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="data.php" method="post" role="form" style="display: block;">
                <h2 class="text-center" style="color: #23d5a4">LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username"  class="form-control" placeholder="Username Or Email Id" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required="">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="submit" name="login-submit" id="login-submit"  class="form-control btn btn-login" value="Log In">
                  </div>
              </form>
              
  </div>
</div>
</div>
</div>
</div>
</div>
</div>


 <footer style="height: 30px; position: fixed; bottom: 0px; margin-top: 30px; left: 0px; right: 0px; width: 100%; background-color: black; opacity: 0.5;">
        <p style="font-size: 20px; color: white;">&nbsp; &nbsp; &nbsp;Copyright &copy; NoTes hUb</p>
      </footer>
    
    
    
        

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="jk.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

