<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT COUNT(s.furnitureId) AS numItems, f.*, SUM(f.weight) AS totalWeight, i.image FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND s.status = 'on_hold' AND s.customerId = " . $customerId . " GROUP BY s.furnitureId";
    $cartResult = mysqli_query($connection, $query);

    $rows = array();

    if($cartResult != null){
      while($row = mysqli_fetch_assoc($cartResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
