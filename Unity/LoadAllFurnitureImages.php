<?php
  require("Connect.php");

  if($connection){
    $id = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_image WHERE furnitureId = " . $id;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureImageId"] . "\n";
        echo $row["image"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["addedBy"] . "\n";
        echo $row["updatedBy"] . "\n";
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
