<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];
    $customerId = $_POST["customerId"];

    $query = "UPDATE furniture_stock SET status = 'sold' WHERE status = 'on_hold' AND furnitureId = " . $furnitureId . " AND customerId = " . $customerId;
    $removeCartItemResult = mysqli_query($connection, $query);

    if($removeCartItemResult){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
