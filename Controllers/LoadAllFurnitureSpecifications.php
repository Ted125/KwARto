<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM furniture_specification WHERE furnitureId = " . $furnitureId;
    $specResult = mysqli_query($connection, $query);
  }
?>
