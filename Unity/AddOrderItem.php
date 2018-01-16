<?php
  require("Connect.php");

  if($connection){
    $originalPrice = $_POST["originalPrice"];
    $discount = $_POST["discount"];
    $orderId = $_POST["orderId"];
    $stockId = $_POST["stockId"];

    $query = "INSERT INTO order_item (originalPrice, discount, orderId, stockId) VALUES(" . $originalPrice . ", " . $discount . ", " . $orderId . ", " . $stockId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
