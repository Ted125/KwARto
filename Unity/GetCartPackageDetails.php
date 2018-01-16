<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT f.packageLength, f.packageWidth, f.packageHeight, f.weight FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId WHERE s.status = 'on_hold' AND s.customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["packageLength"] . "\n";
      echo $row["packageWidth"] . "\n";
      echo $row["packageHeight"] . "\n";
      echo $row["weight"] . "\n";
    }
  }
?>
