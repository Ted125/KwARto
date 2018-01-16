<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT COUNT(reviewId) AS count FROM review WHERE furnitureId = " . $furnitureId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["count"] . "\n";
    }
  }
?>
