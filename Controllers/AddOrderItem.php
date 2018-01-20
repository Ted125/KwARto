<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $originalPrice = $_POST["originalPrice"];
    $discount = $_POST["discount"];
    $orderId = $_POST["orderId"];
    $stockId = $_POST["stockId"];

    $query = "INSERT INTO order_item (originalPrice, discount, orderId, stockId) VALUES(" . $originalPrice . ", " . $discount . ", " . $orderId . ", " . $stockId . ")";
    $addOrderItemResult = mysqli_query($connection, $query);

    if($addOrderItemResult){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
