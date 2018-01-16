<?php
  require("Connect.php");

  if($connection){
    $query = "SELECT * FROM seller";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["sellerId"] . "\n";
        echo $row["name"] . "\n";
        echo $row["description"] . "\n";
        echo $row["userId"] . "\n";
      }
    }
  }
?>
