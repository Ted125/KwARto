<?php
  require("Connect.php");

  if($connection){
    $query = "SELECT * FROM furniture";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureId"] . "\n";
        echo $row["name"] . "\n";
        echo $row["description"] . "\n";
        echo $row["length"] . "\n";
        echo $row["width"] . "\n";
        echo $row["height"] . "\n";
        echo $row["price"] . "\n";
        echo $row["unit"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["addedBy"] . "\n";
        echo $row["updatedBy"] . "\n";
        echo $row["modelName"] . "\n";
        echo $row["discount"] . "\n";
      }
    }
  }
?>
