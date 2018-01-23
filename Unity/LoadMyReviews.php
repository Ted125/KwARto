<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT r.*, f.name AS furnitureName, i.image AS imageName FROM review AS r JOIN furniture AS f ON r.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND customerId = " . $customerId . " ORDER BY dateAdded DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["reviewId"] . "\n";
        echo $row["rating"] . "\n";
        echo $row["title"] . "\n";
        echo $row["body"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["furnitureName"] . "\n";
        echo $row["imageName"] . "\n";
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
