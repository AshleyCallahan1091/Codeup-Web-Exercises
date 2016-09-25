<?php

require_once 'User.php';

$steverogers = new User();

$steverogers->name = 'Steve Rogers';
$steverogers->email = 'steverogers@shield.com';
$steverogers->password = password_hash('watchyourlanguageasshole', PASSWORD_DEFAULT);

// var_dump($steverogers->email);
// var_dump($steverogers->test);
// var_dump($steverogers);



$steverogers->save();

var_dump($steverogers);


//use 
//$steverogers = User::find('id#');
//then change by:
//$steverogers->name = ghruisehguies
//etc;
//$steverogers->save();