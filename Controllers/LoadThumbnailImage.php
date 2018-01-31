<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $id = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_image WHERE thumbnail = 1 AND furnitureId = " . $id;
    $thumbnailResult = mysqli_query($connection, $query);
  }
?>
