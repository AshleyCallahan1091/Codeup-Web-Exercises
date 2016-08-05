 <?php 
 require_once "../src/auth.php";
 require_once "../src/Input.php";
 
 function pageController (){

 	session_start();

 	if (!Auth::check()){
 		Auth::redirect('logout.php');
 	}

 }

pageController();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>POST Example</title>
			<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
			<link href="css/login.css" rel="stylesheet">
	</head>
	<body>
		<div class="alert alert-success">
		  <p><strong>Success!</strong> Welcome <?=Auth::user();?>!</p>
		</div>
		<a href='logout.php' >Log Out</a>








		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/login.js'></script>
	</body>
</html>