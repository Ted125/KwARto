<?php
  require("Connect.php");

  if($connection){
    $recipientId = $_POST["recipientId"];

    $query = "UPDATE notification SET seen = 1 WHERE seen = 0 AND recipientId = " . $recipientId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
