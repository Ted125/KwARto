<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_stock WHERE status = 'available' AND furnitureId = " . $furnitureId . " LIMIT 1 ";
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["stockId"] . "\n";
    }
  }
?>
