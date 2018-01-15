<?php
  require("Connect.php");

  if($connection){
    $parentId = $_POST["parentId"];

    $query = "";

    if($parentId != -1){
      $query = "SELECT * FROM location WHERE parentLocationId = " . $parentId;
    }else{
      $query = "SELECT * FROM location WHERE parentLocationId IS NULL";
    }


    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["locationId"] . "\n";
        echo $row["name"] . "\n";
        echo $row["type"] . "\n";

        if($row["parentLocationId"] != null){
          echo $row["parentLocationId"] . "\n";
        }else{
          echo "-1";
        }
      }
    }
  }
?>
