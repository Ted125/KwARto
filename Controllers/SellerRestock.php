<?php
  require_once("../Models/furniture_stockCRUD.php");

  session_start();
  if(strcmp($_POST['quantityAmount'], "0") < 0){
    header( "Location: ../prodsmanu.php?restockerror=1" );
    die();
  }
  $furn = new furniture_stock();
  $verify = $furn->createFurnitureStock($_POST['furnitureId'], $_POST['quantityAmount']);
  if($verify != null){
    echo "Successfully Restocked";

  } else {
        
    echo "Invalid credentials or not activated";
  }

  header( "Location: ../prodsmanu.php" );

?>