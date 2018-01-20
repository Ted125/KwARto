<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];
    $customerId = $_POST["customerId"];

    $query = "SELECT * FROM furniture_stock WHERE status = 'on_hold' AND furnitureId = " . $furnitureId . " AND customerId = " . $customerId . " LIMIT 1 ";
    $onHoldStockResult = mysqli_query($connection, $query);

    $rows = array();

    if($onHoldStockResult != null){
      while($row = mysqli_fetch_assoc($onHoldStockResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
