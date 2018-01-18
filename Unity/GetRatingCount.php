<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];
    $rating = $_POST["rating"];

    $query = "SELECT COUNT(reviewId) AS count FROM review WHERE furnitureId = " . $furnitureId . " AND rating = " . $rating;
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);
      echo $row["count"] . "\n";
    }
  }
?>
