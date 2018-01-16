<?php
  require("Connect.php");

  if($connection){
    $furnitureId = $_POST["furnitureId"];

    $query = "SELECT * FROM review AS r JOIN customer AS c ON r.customerId = c.customerId WHERE r.furnitureId = " . $furnitureId . " ORDER BY r.dateAdded DESC, r.likes DESC, r.reviewId DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["reviewId"] . "\n";
        echo $row["rating"] . "\n";
        echo $row["likes"] . "\n";
        echo $row["title"] . "\n";
        echo $row["body"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["firstName"] . ' ' . $row["lastName"] . "\n";
      }
    }
  }
?>
