<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_specification WHERE furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["specId"] . "\n";
        echo $row["specification"] . "\n";
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
