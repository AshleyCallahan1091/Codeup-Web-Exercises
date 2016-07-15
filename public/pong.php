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

<a  href="counter.php?counter=<?= $counter + 1 ?>">Up!</a>
	<a  href="counter.php?counter=<?= $counter - 1 ?>">Down!</a>



</body>
</html>