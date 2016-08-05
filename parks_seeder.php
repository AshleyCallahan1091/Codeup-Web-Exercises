<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$parks = [
	['name' => 'Acadia','location' => 'Maine','date_established' => '1919-02-26','area_in_acres' => '47389.67', 'description' => 'pretty',],
	['name' => 'American Samoa','location' => 'American Samoa','date_established' => '1988-10-31','area_in_acres' => '9000.00', 'description' => 'pretty',],
	['name' => 'Arches','location' => 'Utah','date_established' => '1929-04-12','area_in_acres' => '76518.98', 'description' => 'pretty',],
	['name' => 'Badlands','location' => 'South Dakota','date_established' => '1978-11-10','area_in_acres' => '242755.94', 'description' => 'pretty',],
	['name' => 'Big Bend','location' => 'Texas','date_established' => '1944-06-12','area_in_acres' => '801163.21', 'description' => 'pretty',],
	['name' => 'Biscayne','location' => 'Florida','date_established' => '1980-06-28','area_in_acres' => '172924.07', 'description' => 'pretty',],
	['name' => 'Black Canyon of the Gunnison','location' => 'Colorado','date_established' => '1999-10-21','area_in_acres' => '32950.03', 'description' => 'pretty',],
	['name' => 'Bryce Canyon','location' => 'Utah','date_established' => '1928-02-25','area_in_acres' => '35835.08', 'description' => 'pretty',],
	['name' => 'Canyonlands','location' => 'Utah','date_established' => '1964-09-12','area_in_acres' => '337597.83', 'description' => 'pretty',],
	['name' => 'Capitol Reef','location' => 'Utah','date_established' => '1971-12-18','area_in_acres' => '241904.26', 'description' => 'pretty',],
	['name' => 'Carlsbad Caverns','location' => 'New Mexico','date_established' => '1930-05-14','area_in_acres' => '46766.45', 'description' => 'pretty',],
	['name' => 'Channel Islands','location' => 'California','date_established' => '1980-03-05','area_in_acres' => '249561.00', 'description' => 'pretty',],
	['name' => 'Congaree','location' => 'South Carolina','date_established' => '2003-11-10','area_in_acres' => '26545.86', 'description' => 'pretty',],
	['name' => 'Crater Lake','location' => 'Oregon','date_established' => '1902-05-22','area_in_acres' => '183224.05', 'description' => 'pretty',],
	['name' => 'Cuyahoga Valley','location' => 'Ohio','date_established' => '2000-10-11','area_in_acres' => '32860.73', 'description' => 'pretty',],
	['name' => 'Death Valley','location' => 'California','date_established' => '1994-10-31','area_in_acres' => '3372401.96', 'description' => 'pretty',],
	['name' => 'Denali','location' => 'Alaska','date_established' => '1917-02-26','area_in_acres' => '4740911.72', 'description' => 'pretty',],
	['name' => 'Dry Tortugas','location' => 'Florida','date_established' => '1992-10-26','area_in_acres' => '64701.22', 'description' => 'pretty',],
	['name' => 'Everglades','location' => 'Florida','date_established' => '1934-05-30','area_in_acres' => '1508537.90', 'description' => 'pretty',],
	['name' => 'Gates of the Arctic','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '7523897.74', 'description' => 'pretty',],
	['name' => 'Glacier','location' => 'Montana','date_established' => '1910-05-11','area_in_acres' => '1013572.41', 'description' => 'pretty',],
	['name' => 'Glacier Bay','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '3224840.31', 'description' => 'pretty',],
	['name' => 'Grand Canyon','location' => 'Arizona','date_established' => '1919-02-26','area_in_acres' => '1217403.32', 'description' => 'pretty',],
	['name' => 'Grand Teton','location' => 'Wyoming','date_established' => '1929-02-26','area_in_acres' => '309994.66', 'description' => 'pretty',],
	['name' => 'Great Basin','location' => 'Nevada','date_established' => '1986-10-27','area_in_acres' => '77180.00', 'description' => 'pretty',],
	['name' => 'Great Sand Dunes','location' => 'Colorado','date_established' => '2004-09-13','area_in_acres' => '42983.74', 'description' => 'pretty',],
	['name' => 'Great Smoky Mountains','location' => 'North Carolina','date_established' => '1934-06-15','area_in_acres' => '521490.13', 'description' => 'pretty',],
	['name' => 'Guadalupe Mountains','location' => 'Texas','date_established' => '1966-10-15','area_in_acres' => '86415.97', 'description' => 'pretty',],
	['name' => 'Haleakalā','location' => 'Hawaii','date_established' => '1916-08-01','area_in_acres' => '29093.67', 'description' => 'pretty',],
	['name' => 'Hawaii Volcanoes','location' => 'Hawaii','date_established' => '1916-08-01','area_in_acres' => '323431.38', 'description' => 'pretty',],
	['name' => 'Hot Springs','location' => 'Arkansas','date_established' => '1921-03-04','area_in_acres' => '5549.75', 'description' => 'pretty',],
	['name' => 'Isle Royale','location' => 'Michigan','date_established' => '1940-04-03','area_in_acres' => '571790.11', 'description' => 'pretty',],
	['name' => 'Joshua Tree','location' => 'California','date_established' => '1994-10-31','area_in_acres' => '789745.47', 'description' => 'pretty',],
	['name' => 'Katmai','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '3674529.68', 'description' => 'pretty',],
	['name' => 'Kenai Fjords','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '669982.99', 'description' => 'pretty',],
	['name' => 'Kings Canyon','location' => 'California','date_established' => '1940-03-04','area_in_acres' => '461901.20', 'description' => 'pretty',],
	['name' => 'Kobuk Valley','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '1750716.50', 'description' => 'pretty',],
	['name' => 'Lake Clark','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '2619733.21', 'description' => 'pretty',],
	['name' => 'Lassen Volcanic','location' => 'California','date_established' => '1916-08-09','area_in_acres' => '106372.36', 'description' => 'pretty',],
	['name' => 'Mammoth Cave','location' => 'Kentucky','date_established' => '1941-07-01','area_in_acres' => '52830.19', 'description' => 'pretty',],
	['name' => 'Mesa Verde','location' => 'Colorado','date_established' => '1906-06-29','area_in_acres' => '52121.93', 'description' => 'pretty',],
	['name' => 'Mount Rainier','location' => 'Washington','date_established' => '1899-03-02','area_in_acres' => '235625.00', 'description' => 'pretty',],
	['name' => 'North Cascades','location' => 'Washington','date_established' => '1968-10-02','area_in_acres' => '504780.94', 'description' => 'pretty',],
	['name' => 'Olympic','location' => 'Washington','date_established' => '1938-06-29','area_in_acres' => '922650.86', 'description' => 'pretty',],
	['name' => 'Petrified Forest','location' => 'Arizona','date_established' => '1962-12-09','area_in_acres' => '93532.57', 'description' => 'pretty',],
	['name' => 'Pinnacles','location' => 'California','date_established' => '2013-01-10','area_in_acres' => '26605.73', 'description' => 'pretty',],
	['name' => 'Redwood','location' => 'California','date_established' => '1968-10-02','area_in_acres' => '112512.05', 'description' => 'pretty',],
	['name' => 'Rocky Mountain','location' => 'Colorado','date_established' => '1915-01-26','area_in_acres' => '265828.41', 'description' => 'pretty',],
	['name' => 'Saguaro','location' => 'Arizona','date_established' => '1994-10-14','area_in_acres' => '91439.71', 'description' => 'pretty',],
	['name' => 'Sequoia','location' => 'California','date_established' => '1890-09-25','area_in_acres' => '404051.17', 'description' => 'pretty',],
	['name' => 'Shenandoah','location' => 'Virginia','date_established' => '1926-05-22','area_in_acres' => '199045.23', 'description' => 'pretty',],
	['name' => 'Theodore Roosevelt','location' => 'North Dakota','date_established' => '1978-11-10','area_in_acres' => '70446.89', 'description' => 'pretty',],
	['name' => 'Virgin Islands','location' => 'United States Virgin Islands','date_established' => '1956-08-02','area_in_acres' => '14688.87', 'description' => 'pretty',],
	['name' => 'Voyageurs','location' => 'Minnesota','date_established' => '1971-01-08','area_in_acres' => '218200.17', 'description' => 'pretty',],
	['name' => 'Wind Cave','location' => 'South Dakota','date_established' => '1903-01-09','area_in_acres' => '28295.03', 'description' => 'pretty',],
	['name' => 'Wrangell–​St. Elias','location' => 'Alaska','date_established' => '1980-12-02','area_in_acres' => '8323147.59', 'description' => 'pretty',],
	['name' => 'Yellowstone','location' => 'Wyoming','date_established' => '1872-03-01','area_in_acres' => '2219790.71', 'description' => 'pretty',],
	['name' => 'Yosemite','location' => 'California','date_established' => '1890-10-01','area_in_acres' => '761266.19', 'description' => 'pretty',],
	['name' => 'Zion','location' => 'Utah','date_established' => '1919-11-19','area_in_acres' => '146597.60', 'description' => 'pretty',],
];


// foreach ($parks as $park) {
//     $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

//     $dbc->exec($query);
//        echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }

// PDO::PARAM_BOOL — boolean data type
// 	PDO::PARAM_INT — integer data type
// 	PDO::PARAM_STR — string data type
// 	PDO::PARAM_NULL — null data type


	$stmt = $dbc->exec('TRUNCATE national_parks;');

	$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

	foreach ($parks as $park) {
		$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
		$stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
		$stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
		$stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_STR);
		$stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

		$stmt->execute();
}