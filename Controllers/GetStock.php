<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT COUNT(stockId) AS num FROM furniture_stock WHERE status = 'available' AND furnitureId = " . $furnitureId;
    $stockResult = mysqli_query($connection, $query);
  }
?>
