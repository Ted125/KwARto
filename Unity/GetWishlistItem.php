<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM wishlist WHERE customerId = " . $customerId . " AND furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);

      if(count($row) > 0){
        echo "true";
      }else{
        echo "false";
      }
    }else{
      echo "false";
    }
  }
?>
