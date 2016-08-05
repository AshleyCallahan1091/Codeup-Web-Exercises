<?php

	$park_name = Input::get('park_name');
	$park_location = Input::get('park_location');
	$park_date = Input::get('park_date');
	$park_area = Input::get('park_area');
	$park_description = Input::get('park_description');


	


	if ($park_name != null && $park_location != null && $park_date != null && $park_area != null && $park_description != null) {

		$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
		VALUES (:name, :location, :date_established, :area_in_acres, :description)";

	$stmt = $dbc->prepare($query);

	$stmt->execute(array(':name' => $park_name, ':location' => $park_location, ':date_established' => $park_date, ':area_in_acres' => $park_area, ':description' => $park_description));

		
	}

	
	return [
		'park_name' => $park_name,
		'park_location' => $park_location,
		'park_date' => $park_date,
		'park_area' => $park_area,
		'park_description' => $park_description
	];

