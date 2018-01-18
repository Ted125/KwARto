<?php
  require_once("../Models/furnitureCRUD.php");

  //session_start();
  
  $furn = new furniture();

  $verify = $furn->activateFurniture();

  if($verify != null){
    
    echo "Successfully Changed";
  } else {
        //inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
