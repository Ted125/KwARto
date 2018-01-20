<?php
  require_once("Models/furniture_stockCRUD.php");

  //session_start();
  
  $user = new furniture_stock();
  $temp = $user->displayAvailableFurnitureStock($row['furnitureId']);
  if($temp != null){
    $stockA = $temp->fetch_assoc();
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>