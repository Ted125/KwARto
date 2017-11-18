<?php
	
  // require_once("../Models/User.php");

  // session_start();
  // new Login();

  // class Login{
  //   public function __construct(){
  //     $user = new User();
  //     $user->Login();

  //     $_SESSION['username'] = "Niggy";

	 //  header( "Location: http://localhost/capstone-project/" );
  //   }

  // }
	session_start();
	$_SESSION['username'] = "Niggy";

	header( "Location: http://localhost/capstone-project/" );
?>
