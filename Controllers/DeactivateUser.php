<?php
  require_once("../Models/userDetails.php");

  session_start();
  
  $user = new user_details();
  $verify = $user->deactivateUser($_POST['userId']);
  if($verify != null){
      header("refresh:0;../usersmgt.php");
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Deactivate failed";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>