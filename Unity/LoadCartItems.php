<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT furnitureId FROM furniture_stock WHERE status = 'on_hold' AND customerId = " . $customerId . " GROUP BY furnitureId";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureId"] . "\n";
      }
    }
  }
?>
