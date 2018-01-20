<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_stock WHERE status = 'available' AND furnitureId = " . $furnitureId . " LIMIT 1 ";
    $availableStockResult = mysqli_query($connection, $query);

    $rows = array();

    if($availableStockResult != null){
      while($row = mysqli_fetch_assoc($availableStockResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
