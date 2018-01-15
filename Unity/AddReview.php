<?php
  require("Connect.php");

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
      echo "true";
    }else{
      echo "false";
    }
  }
?>
