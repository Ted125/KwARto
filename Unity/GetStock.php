<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT COUNT(stockId) AS num FROM furniture_stock WHERE status = 'available' AND furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["num"] . "\n";
    }
  }
?>
