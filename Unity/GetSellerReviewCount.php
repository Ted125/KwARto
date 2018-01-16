<?php
  require("Connect.php");

  if($connection){
    $sellerId = $_POST["sellerId"];

    $query = "SELECT COUNT(r.reviewId) AS numReviews FROM review AS r JOIN furniture AS f ON r.furnitureId = f.furnitureId JOIN seller AS s ON f.sellerId = s.sellerId WHERE s.sellerId = " . $sellerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["numReviews"] . "\n";
      }
    }
  }
?>
