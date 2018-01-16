<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];
    $customerId = $_POST["customerId"];

    $query = "UPDATE furniture_stock SET status = 'available', customerId = null WHERE furnitureId = " . $furnitureId . " AND customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
