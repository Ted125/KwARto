<?php
  require_once("Models/furniture_imageCRUD.php");

  //session_start();
  
  $furn = new furniture_image();
  $temp = $furn->displayFurnitureImage($row['furnitureId']);
  if($temp != null){
    $furnImg = $temp->fetch_assoc();
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>