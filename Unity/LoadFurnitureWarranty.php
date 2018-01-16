<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT w.name AS warrantyName, w.description AS warrantyDescription FROM furniture AS f JOIN warranty AS w ON f.warrantyId = w.warrantyId WHERE furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["warrantyName"] . "\n";
        echo $row["warrantyDescription"] . "\n";
      }
    }
  }
?>
