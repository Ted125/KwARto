<?php
  require("Connect.php");

  if($connection){
    $recipientId = $_POST["recipientId"];

    $query = "SELECT * FROM notification WHERE recipientId = " . $recipientId . " ORDER BY dateAdded DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["notificationId"] . "\n";
        echo $row["notification"] . "\n";
        echo $row["type"] . "\n";
        echo $row["seen"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["senderId"] . "\n";
        echo $row["recipientId"] . "\n";
      }
    }
  }
?>
