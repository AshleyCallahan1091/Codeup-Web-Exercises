<?php

	$park_name = "";
	$park_location = "";
	$park_date = "";
	$park_area = "";
	$park_description = "";

	if(Input::isPost()){

		try {
			$park_name = Input::getString('park_name');
		} catch (Exception $e) {
			echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
		}

		try {
			$park_location = Input::getString('park_location');
		} catch (Exception $e) {
			echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
		}

		try {
			$park_date = Input::getNumber('park_date');
		} catch (Exception $e) {
			echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
		}

		try {
			$park_area = Input::getNumber('park_area');
		} catch (Exception $e) {
			echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
		}
		
		try {
			$park_description = Input::getString('park_description');
		} catch (Exception $e) {
			echo 'An error occurred: ' . $e->getMessage() . PHP_EOL;
		}
		
		
		if ($park_name != null && $park_location != null && $park_date != null && $park_area != null && $park_description != null) {

		
			$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
			VALUES (:name, :location, :date_established, :area_in_acres, :description)";

			$stmt = $dbc->prepare($query);

			$stmt->execute(array(':name' => $park_name, ':location' => $park_location, ':date_established' => $park_date, ':area_in_acres' => $park_area, ':description' => $park_description));
		}
	}

	return [
		'park_name' => $park_name,
		'park_location' => $park_location,
		'park_date' => $park_date,
		'park_area' => $park_area,
		'park_description' => $park_description
		];
	

echo "I am still run no matter what.\n";
	

