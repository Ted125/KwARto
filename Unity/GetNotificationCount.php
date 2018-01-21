<?php
  require("Connect.php");

  if($connection){
    $recipientId = $_POST["recipientId"];

    $query = "SELECT COUNT(notificationId) AS num FROM notification WHERE seen = 0 AND recipientId = " . $recipientId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["num"] . "\n";
      }
    }
  }
?>
