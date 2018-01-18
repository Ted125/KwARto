<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT AVG(rating) AS average, COUNT(rating) AS num FROM review WHERE furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      if($row["average"] == null){
        echo "0" . "\n";
      }else{
        echo $row["average"] . "\n";
      }

      echo $row["num"] . "\n";
    }
  }
?>
