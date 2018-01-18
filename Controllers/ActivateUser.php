<?php
  require_once("../Models/userDetails.php");

  session_start();
  
  $user = new user_details();
  $verify = $user->activateUser($_POST['userId']);
  if($verify != null){
      header("refresh:0;../usersmgt.php");
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Activate failed";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>