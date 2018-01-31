<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "INSERT INTO wishlist (customerId, furnitureId) VALUES(" . $customerId . ", " . $furnitureId . ")";
    $addToWishlistResult = mysqli_query($connection, $query);

    $rows = array();

    if($addToWishlistResult){
      $rows[] = "true";
    }else{
      $rows[] = "false";
    }

    print json_encode($rows);
  }
?>
