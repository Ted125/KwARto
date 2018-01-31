<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT f.*, i.image AS imageName FROM wishlist AS w JOIN furniture AS f ON w.furnitureId = f.furnitureId LEFT JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND w.customerId = " . $customerId;
    $wishlistResult = mysqli_query($connection, $query);
  }
?>
