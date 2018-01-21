<?php
  require("Connect.php");

  if($connection){
    $notification = $_POST["notification"];
    $type = $_POST["type"];
    $senderId = $_POST["senderId"];
    $recipientId = $_POST["recipientId"];

    $query = "INSERT INTO notification (notification, type, senderId, recipientId) VALUES('" . $notification . "', '" . $type . "', " . $senderId . " , " . $recipientId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
