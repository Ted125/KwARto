<?php
  require("Connect.php");

  if($connection){
    $orderNumber = $_POST["orderNumber"];
    $customerId = $_POST["customerId"];

    $query = "SELECT orderId FROM customer_order WHERE orderNumber = '" . $orderNumber . "' AND customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["orderId"] . "\n";
    }
  }
?>
