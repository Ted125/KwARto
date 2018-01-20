<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT f.*, i.image AS imageName FROM wishlist AS w JOIN furniture AS f ON w.furnitureId = f.furnitureId LEFT JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND w.customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureId"] . "\n";
        echo $row["name"] . "\n";
        echo $row["price"] . "\n";
        echo $row["discount"] . "\n";
        echo $row["imageName"] . "\n";
      }
    }
  }
?>
