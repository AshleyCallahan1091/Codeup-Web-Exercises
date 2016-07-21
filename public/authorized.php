 <?php 
 function pageController (){

 	session_start();

 	$reset = isset($_GET['reset']) ? $_GET['reset'] : 0;

 	if (!isset($_SESSION['logged_in_user'])){
 		header('Location: login.php');
 		exit();
 	} elseif ($reset == 1) {
 		session_destroy();
		session_unset($_SESSION['logged_in_user']);
		session_regenerate_id(true);
 		header('Location: login.php');
 	}
 	return ['reset' => $reset];
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
		<div class="alert alert-success">
		  <strong>Success!</strong> Welcome!
		</div>
		<a href='authorized.php?reset=1'><button class="buttons">Log Out</button></a>








		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/login.js'></script>
	</body>
</html>