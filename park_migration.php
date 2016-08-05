<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop = 'DROP TABLE IF EXISTS national_parks;';

$dbc->exec($drop);

$create = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established date,
    area_in_acres double,
    description VARCHAR (200),
    PRIMARY KEY (id)
)';


$dbc->exec($create);