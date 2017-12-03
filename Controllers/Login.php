<?php
	
  require_once("../Models/User.php");

  session_start();
  // new Login();

  // class Login{
  //   public function __construct(){
  //     $user = new User();
  //     $verify = $user->Login($_POST['loginEmail'], $_POST['loginPassword']);

  //     if($verify != null){

  //     	echo $_SESSION['username'] = $verify->userName;
  //     } else {
  //     	//inform user that the input is not valid
  //     	echo "Not logged in";
  //     }

  //     //header( "Location: http://localhost/capstone-project/" );
  //   }

  // }

  $user = new User();
      $verify = $user->Login($_POST['loginEmail'], $_POST['loginPassword']);

      if($verify != null){

      	echo $_SESSION['username'] = $verify;
      } else {
      	//inform user that the input is not valid
      	echo "Not logged in";
      }

      header( "Location: http://localhost/capstone-project/" );
?>
