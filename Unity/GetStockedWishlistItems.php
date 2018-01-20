<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT * FROM furniture_stock AS s JOIN wishlist AS w ON s.furnitureId = w.furnitureId WHERE s.status = 'available' AND w.customerId = " . $customerId . " GROUP BY s.furnitureId";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
