<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT COUNT(s.furnitureId) AS numItems, SUM(f.price * (1 - f.discount / 100)) AS subtotal, SUM(f.weight) AS totalWeight, f.sellerId FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId LEFT JOIN wishlist AS w ON f.furnitureId = w.furnitureId WHERE i.thumbnail = 1 AND s.status = 'on_hold' AND s.customerId = " . $customerId . " GROUP BY f.sellerId";
    $aggregateResult = mysqli_query($connection, $query);

    $rows = array();

    if($aggregateResult != null){
      while($row = mysqli_fetch_assoc($aggregateResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>