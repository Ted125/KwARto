<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $orderId = $_POST["orderId"];

    $query = "SELECT COUNT(f.furnitureId) AS quantity, f.furnitureId, f.name, oi.*, i.image FROM order_item AS oi JOIN furniture_stock AS s ON oi.stockId = s.stockId JOIN furniture AS f ON s.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND oi.orderId = " . $orderId . " GROUP BY f.furnitureId";
    $orderItemResult = mysqli_query($connection, $query);
  }
?>
