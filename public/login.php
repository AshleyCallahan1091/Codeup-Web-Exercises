<?php
	function pageController(){
		session_start();
		$data = [];

		$data['username'] = "Guest";
		$data['password'] = "password";

		 $suppliedUsername = isset($_POST['username']) ? $_POST['username'] : "";
		 $suppliedPassword = isset($_POST['password']) ? $_POST['password'] : "";
		if (isset($_SESSION['logged_in_user'])){
			header("Location: authorized.php");
			exit();
		}
		elseif ($data['username'] === $suppliedUsername && $data['password'] === $suppliedPassword) {
			$_SESSION['logged_in_user'] = $data['username'];
			header("Location: authorized.php");
			exit();
		} elseif (($suppliedUsername !== "" && $suppliedUsername !== $data['username']) || ($suppliedPassword !== "" && $data['password'] !== $suppliedPassword)) {
			echo "<div class='alert alert-danger'><strong>Danger!</strong> Invalid username or password supplied!</div>";
		} 

		
		

		return $data;
	}
	extract(pageController());

?>

<!DOCTYPE html>
<html>
	<head>
		<title>POST Example</title>
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="css/login.css" rel="stylesheet">
	</head>
	<body>
		<div id="noty-holder"></div>
		<div class="container">
			<div class="row" style="margin-top:20px">
				<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form" method="POST">
						<fieldset>
							<h2>Please Sign In</h2>
							<hr class="colorgraph">
							<div class="form-group">
								<input type="name" name="username" class="form-control input-lg" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
							</div>
							<hr class="colorgraph">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/login.js'></script>

	</body>
</html>