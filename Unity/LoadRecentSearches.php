<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT *
              FROM search_history
              WHERE customerId = " . $customerId .
              " AND searchId IN
              (
                SELECT MAX(searchId)
                FROM search_history
                GROUP BY value
              )
              ORDER BY dateAdded DESC
              LIMIT 10";
    $result = mysqli_query($connection, $query);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["value"] . "\n";
      }
    }
  }
?>
