<?php
  require_once("Models/furniture_stockCRUD.php");
  ob_start();
  //session_start();

  $furn = new furniture_stock();
  $temp = $furn->displaySoldFurnitureStock($row['furnitureId']);
  if($temp != null){
    $stockS = $temp->fetch_assoc();
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
