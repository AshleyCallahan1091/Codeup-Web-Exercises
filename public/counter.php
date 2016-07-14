<?php 

function pageController (){

	$data['counter'] = 0;
	$data['up'] = "false";
	$data['down'] = "false";


	

		if($data['up']){
			$data['counter']++;
		} elseif($data['down'] = "false";){
			$data['counter']--;
		}



	






	return $data;
}


extract(pageController());




?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<h1>Counter: <?= $counter ?>  </h1>
	<a method="GET" href="counter.php?name=<?= $up; ?>">Up!</a>
	<a method="GET" href="counter.php?name=<?= $down; ?>">Down!</a>

</body>
</html>





