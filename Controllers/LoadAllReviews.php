<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM review AS r JOIN customer AS c ON r.customerId = c.customerId WHERE r.furnitureId = " . $furnitureId . " ORDER BY r.dateAdded DESC, r.likes DESC, r.reviewId DESC";
    $reviewResult = mysqli_query($connection, $query);
  }
?>
