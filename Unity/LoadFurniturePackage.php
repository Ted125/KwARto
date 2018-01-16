<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_package WHERE furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["packId"] . "\n";
        echo $row["item"] . "\n";
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
