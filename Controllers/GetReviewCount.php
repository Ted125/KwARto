<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT COUNT(reviewId) AS num FROM review WHERE furnitureId = " . $furnitureId;
    $reviewCountResult = mysqli_query($connection, $query);
  }
?>
