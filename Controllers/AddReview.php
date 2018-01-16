<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $rating = $_POST["rating"];
    $likes = $_POST["likes"];
    $title = $_POST["title"];
    $body = $_POST["body"];
    $addedBy = $_POST["addedBy"];
    $updatedBy = $_POST["updatedBy"];
    $furnitureId = $_POST["furnitureId"];
    $customerId = $_POST["customerId"];

    $query = "INSERT INTO review (rating, likes, title, body, addedBy, updatedBy, furnitureId, customerId) VALUES(" . $rating . ", " . $likes . ", '" . $title . "', '" . $body . "', " . $addedBy . ", " . $updatedBy . ", " . $furnitureId . ", " . $customerId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo header("Location: ../single.php?singleFurnitureId=" . $furnitureId);
    }else{
      echo "Error uploading review!";
    }
  }
?>
