<?php
  require_once("../Models/furnitureCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();

  $furn = new furniture();
  $verify = $furn->updateFurniture($_POST['furnitureId']);

  if($verify != null){
    // $_SESSION['firstName'] = $_POST['updateFName'];
    // $_SESSION['lastName'] = $_POST['updateLName'];
    // $_SESSION['birthdate'] = $_POST['updateBDay'];
    echo "Successfully updated Furniture ->".$_POST['furnitureId'];
  } else {
    echo "Failed to update Furniture ->".$_POST['furnitureId'];
  }

 header( "Location: ../prodsmanu.php" );
?>