<?php
  require_once("../Models/furniture_stockCRUD.php");

  session_start();
  
  $furn = new furniture_stock();
  $verify = $furn->createFurnitureStock($_POST['furnitureId'], $_POST['quantityAmount']);
  if($verify != null){
    echo "Successfully Restocked";

  } else {
        
    echo "Invalid credentials or not activated";
  }

  header( "Location: ../prodsmanu.php" );

?>