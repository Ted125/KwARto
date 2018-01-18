<?php
  require_once("../Models/userDetails.php");

  session_start();
  
  $user = new user_details();
  $verify = $user->deactivateUser($_POST['userId']);
  echo $_POST['userId'];
  if($verify != null){
    header('Location: '.$_SERVER['HTTP_REFERER']);
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Deactivate failed";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>