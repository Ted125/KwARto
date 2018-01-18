<?php
  require_once("Models/userDetails.php");

  //session_start();
  
  $user = new user_details();
  $verify = $user->displayAllUsers();
  $count = 1;
  if($verify != null){
    while($row = $verify->fetch_assoc()){
      include("Access/AdminViewUsers.php");
      $count++;

    }
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
