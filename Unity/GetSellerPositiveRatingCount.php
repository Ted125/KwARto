<?php
  require("Connect.php");

  if($connection){
    $sellerId = $_POST["sellerId"];

    $query = "SELECT COUNT(rating) AS positiveRatingCount FROM review AS r JOIN furniture AS f ON r.furnitureId = f.furnitureId JOIN seller AS s ON f.sellerId = s.sellerId WHERE r.rating >= 3 AND r.rating <= 5 AND s.sellerId = " . $sellerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["positiveRatingCount"] . "\n";
      }
    }
  }
?>
