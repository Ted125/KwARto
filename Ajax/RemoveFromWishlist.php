<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "DELETE FROM wishlist WHERE customerId = " . $customerId . " AND furnitureId = " . $furnitureId;
    $removeFromWishlistResult = mysqli_query($connection, $query);

    $rows = array();

    if($removeFromWishlistResult != null){
      $rows[] = "true";
    }else{
      $rows[] = "false";
    }

    print json_encode($rows);
  }
?>
