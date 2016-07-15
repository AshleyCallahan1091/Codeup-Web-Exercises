<?php

	function pageController(){
		$data = [];
		$data['adjectives'] = ['pearl', 'clear', 'rough', 'ice', 'moon', 'blurred', 'light', 'glass', 'piercing', 'wild'];
		$data['nouns'] = ['ink', 'water', 'grass', 'mask', 'shield', 'boot', 'moon', 'ribbon', 'soldier', 'sailboat'];
		$data['adjective'] = array_rand ( $data['adjectives'], 1 );
		$data['noun'] = array_rand ( $data['nouns'], 1 );
		return $data;
	}

	extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="assets/ico/favicon.png">

		<title>Name Generator</title>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles -->
		<link href="assets/css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/modernizr.custom.js"></script>

		<!-- Custom Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
	</head>
	<body data-spy="scroll" data-offset="0" data-target="#theMenu">
		<!-- ========== HEADER SECTION ========== -->
		<section id="home" name="home"></section>
		<div id="headerwrap">
			<div class="container">
				<br>
				<div class="row">
					<h1><?php echo $adjectives[$adjective] . " " . $nouns[$noun] ?></h1>
					<br>
					<h3></h3>
					<br>
					<br>
					<div class="col-lg-6 col-lg-offset-3">
					</div>
				</div>
			</div>
		</div>
		<!-- ========== CAROUSEL SECTION ========== --> 
		<section id="portfolio" name="portfolio"></section>
		<div id="f">
		</div>  
		<!-- Bootstrap core JavaScript
		================================================== -->
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
