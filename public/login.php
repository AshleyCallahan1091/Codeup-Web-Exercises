<?php
	var_dump($_GET);
	var_dump($_POST);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<!--<script src="js/login.js"></script>
		<script src="Cool Codeup Stuff/Bootstrap/bootstrap-3.3.6-dist/js/npm.js"></script>
		<script src="Cool Codeup Stuff/Bootstrap/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

		<script src="Cool Codeup Stuff/Bootstrap/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="Cool Codeup Stuff/Bootstrap/bootstrap-3.3.6-dist/css/bootstrap-theme.css">

		<link rel="stylesheet" href="Cool Codeup Stuff/Bootstrap/bootstrap-3.3.6-dist/css/bootstrap.css">-->

		<link rel="stylesheet" href="css/login.css">
		


		<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="http://enwake-igorsa8.rhcloud.com/resources/img/logo.png">
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Features</a></li>
      <li><a href="#">Sign Up</a></li>
      <li><button type="button" class="btn btn-primary" onclick="window.location.href='#login'">Log in</button></li>
    </ul>
  </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-4">
            <h1>OLA</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/>
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success btn-sm">
                                Sign in</button>
                                 <button type="reset" class="btn btn-default btn-sm">
                                Reset</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Not Registred? <a href="http://www.jquery2dotnet.com">Register here</a></div>
            </div>
        </div>
    </div>
</div>






		

	</body>
</html>