<?php 

require_once '../src/Input.php';

	function pageController (){
		return [
		'counter' => Input::get('counter', 0),
		];
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