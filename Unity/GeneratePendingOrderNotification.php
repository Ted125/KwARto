<?php
  require("Connect.php");

  if($connection){
    $orderId = $_POST["orderId"];

    $query = "SELECT u.userId AS recipientId, f.name AS furnitureName FROM order_item AS i JOIN furniture_stock AS s ON i.stockId = s.stockId JOIN furniture AS f ON s.furnitureId = f.furnitureId JOIN seller AS se ON f.sellerId = se.sellerId JOIN user_details AS u ON se.userId = u.userId WHERE i.orderId = " . $orderId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["recipientId"] . "\n";
        echo $row["furnitureName"] . "\n";
      }
    }
  }
?>
