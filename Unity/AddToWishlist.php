<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "INSERT INTO wishlist (customerId, furnitureId) VALUES(" . $customerId . ", " . $furnitureId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
