<?php 

	function pageController (){
		$data = [];
		$data['counter'] = isset($_GET['counter']) ? $_GET['counter'] : 0;

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
		<a  href="/ping.php?outcome=hit&amp;counter=<?= $counter + 1 ?>">Hit!</a>
		<a  href="/ping.php?outcome=miss&amp;counter=<?= $counter = 0 ?>">Miss!</a>
	</body>
</html>