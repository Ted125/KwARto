<?php
  require_once("../Models/furnitureCRUD.php");
  ob_start();
  session_start();

  if(strcmp($_POST['dateStart'], $_POST['comDateStart']) < 0){
    header( "Location: ../prodsmanu.php?discounterror=1" );
    die();
  }

  if(strcmp($_POST['dateStart'], $_POST['dateEnd']) > 0){
    header( "Location: ../prodsmanu.php?discounterror=2" );
    die();
  }

  $furn = new furniture();
  $verify = $furn->newDiscount($_POST['furnitureId']);
  if($verify != null){
    echo "Successfully Inserted Discount";

  } else {

    echo "Invalid credentials or not activated";
  }

  header( "Location: ../prodsmanu.php" );

?>
