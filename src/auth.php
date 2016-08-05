  <?php

require_once 'log.php';
require_once 'contacts-manager-app/functions.php';



class Auth {
	public static $username = 'Guest';
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password){
		if ($username === self::$username && password_verify($password, self::$password)) {
			$_SESSION['logged_in_user'] = session_id();
			$loginSuccessful = new Log();
			$loginSuccessful->info("User $username has logged in!");
			return true;
		} elseif ($username === null && $password === null){
			
			return null;
		} else {
			$loginUnsuccessful = new Log();
			$loginUnsuccessful->error("User $username has failed to log in!");
			return false;
		}
	}

	public static function check(){
		return isset($_SESSION['logged_in_user']);
		
	}

	public static function user(){
		return self::$username;
	}  


	public static function logout(){
		
		session_unset($_SESSION);
		session_destroy();
		self::redirect("login.php");
		
		
	}

	public static function redirect ($location){
		header("Location: $location");
		exit();
	}

  }



  

