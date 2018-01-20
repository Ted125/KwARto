<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT IFNULL(SUM((f.price * (1 - f.discount / 100))), 0) AS total FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId WHERE s.status = 'on_hold' AND s.customerId = " . $customerId;
    $subtotalResult = mysqli_query($connection, $query);

    $rows = array();

    if($subtotalResult != null){
      while($row = mysqli_fetch_assoc($subtotalResult)){
          $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
