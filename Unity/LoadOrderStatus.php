<?php
  require("Connect.php");

  if($connection){
    $orderId = $_POST["orderId"];

    $query = "SELECT * FROM order_status WHERE orderId = " . $orderId . " ORDER BY dateUpdated DESC LIMIT 1";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["orderStatusId"] . "\n";
        echo $row["status"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["orderId"] . "\n";
      }
    }
  }
?>
