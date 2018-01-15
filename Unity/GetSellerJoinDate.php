<?php
  require("Connect.php");

  if($connection){
    $sellerId = $_POST["sellerId"];

    $query = "SELECT u.dateAdded AS joinDate FROM seller AS s JOIN user_details AS u ON s.userId = u.userId WHERE s.sellerId = " . $sellerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["joinDate"] . "\n";
      }
    }
  }
?>
