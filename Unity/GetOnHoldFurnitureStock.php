<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];
    $customerId = $_POST["customerId"];

    $query = "SELECT * FROM furniture_stock WHERE status = 'on_hold' AND furnitureId = " . $furnitureId . " AND customerId = " . $customerId . " LIMIT 1 ";
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["stockId"] . "\n";
    }
  }
?>
