<?php
  require("Connect.php");

  if($connection != null){
    $query = "SELECT * FROM furniture_table ORDER BY furnitureRating DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row['furnitureID'] . "\n";
        echo $row['furnitureName'] . "\n";
        echo $row['furnitureLength'] . "\n";
        echo $row['furnitureWidth'] . "\n";
        echo $row['furnitureHeight'] . "\n";
        echo $row['furnitureRating'] . "\n";
        echo $row['furniturePrice'] . "\n";
        echo $row['furnitureStock'] . "\n";
        echo $row['furniturePicture'] . "\n";
        echo $row['furnitureDescription'] . "\n";
      }
    }
  }
?>
