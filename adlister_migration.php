<?php

require_once __DIR__ . '/User.php';
require_once 'db_connect.php';


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$drop = 'DROP TABLE IF EXISTS users;';

$dbc->exec($drop);

$create = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(20) NOT NULL,
    password VARCHAR(25) NOT NULL,
    PRIMARY KEY (id)
)';


$dbc->exec($create);