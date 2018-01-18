<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT SUM((f.price * (1 - f.discount / 100))) AS total FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId WHERE s.status = 'on_hold' AND s.customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);

      if($row["total"] != null){
        echo $row["total"] . "\n";
      }else{
        echo "0" . "\n";
      }
    }
  }
?>
