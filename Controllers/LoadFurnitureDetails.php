<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT f.*, s.name AS sellerName FROM furniture AS f JOIN seller AS s ON f.sellerId = s.sellerId WHERE f.furnitureId = " . $furnitureId;
    $furnitureDetailsResult = mysqli_query($connection, $query);
  }
?>
