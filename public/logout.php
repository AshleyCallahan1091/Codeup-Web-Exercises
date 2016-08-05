<?php

 require_once "../src/auth.php";
 require_once "../src/Input.php";

function pageController() {
	session_start();
	Auth::logout();


}
pageController();

var_dump($_SESSION);