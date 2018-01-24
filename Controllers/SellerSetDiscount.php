<?php
  require_once("../Models/furnitureCRUD.php");

  session_start();
  
  $furn = new furniture();
  $verify = $furn->newDiscount($_POST['furnitureId']);
  if($verify != null){
    echo "Successfully Inserted Discount";

  } else {
        
    echo "Invalid credentials or not activated";
  }

  header( "Location: ../prodsmanu.php" );

?>