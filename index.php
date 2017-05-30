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
      <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
      <div class="row">
        <div class="col-md-4">
          
        </div>
        <div class="col-md-8">
          <div class="row">
          <div class="col-md-8 col-md-offset-4" style="background-color: white;">
              <form id="reg" action="data.php" method="post" role="form" style="display: block;">
                <h2 class="text-center" style="color:#23d5a4;">Sign Up</h2><br>
                  <div class="form-group">
                    <input type="text" name="username" id="username"  class="form-control" placeholder="Username" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="position" id="pos" class="form-control" placeholder="Student\Teacher" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="branch" id="bran" class="form-control" placeholder="Branch Of Your Course" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="college" id="col" class="form-control" placeholder="Enter Your College Name" required="">
                  </div> 
                  <div class="form-group">
                  <input type="text" name="date" class="form-control" placeholder="DOB(yyyy-mm-dd)" required="">
                  </div>
                  <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id" required="">
                  </div>
                  <div class="form-group">
                  <input type="text" name="con" class="form-control" placeholder="Enter Your Contact Number">
                  </div>


                  <div class="form-group text-center">
                  <button class="btn btn-default" type="submit" name="sign" style="background-color: white;color:#23d5a4;margin-top: 15px;font-size: 20px;margin-bottom: 20px;">Submit</button>

                  </div> 

              </form>

           
          </div>
          </div>
        </div>
      </div>
      </div>
 <!-- jQuery -->
 <footer style="height: 30px; position: fixed; bottom: 0px; margin-top: 30px; left: 0px; right: 0px; width: 100%; background-color: black; opacity: 0.5;">
        <p style="font-size: 20px; color: white;">&nbsp; &nbsp; &nbsp;Copyright &copy; NoTes hUb</p>
      </footer>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>