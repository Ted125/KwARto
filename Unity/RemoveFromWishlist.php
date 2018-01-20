<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "DELETE FROM wishlist WHERE customerId = " . $customerId . " AND furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
