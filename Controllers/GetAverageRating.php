<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT AVG(rating) AS average, COUNT(rating) AS num FROM review WHERE furnitureId = " . $furnitureId;
    $averageRatingResult = mysqli_query($connection, $query);
  }
?>
