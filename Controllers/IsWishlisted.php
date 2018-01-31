<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM wishlist WHERE customerId = " . $customerId . " AND furnitureId = " . $furnitureId;
    $wishlistedResult = mysqli_query($connection, $query);
  }
?>
