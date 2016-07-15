<?php 

function pageController (){
	$data = [];
	
	

	if (isset($_GET['counter'])) {
		$data['counter'] = $_GET['counter'];

	} else {
		$data['counter'] = 0;

	}

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Score: <?= $counter ?>  </h1>
	<a  href="pong.php?outcome=hit&counter=<?= $counter + 1 ?>">Hit!</a>
	<a  href="pong.php?outcome=miss&counter=<?= $counter = 0 ?>">Miss!</a>


</body>
</html>