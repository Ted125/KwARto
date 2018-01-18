<?php
  require("Connect.php");

  if($connection){
    $status = $_POST["status"];
    $orderId = $_POST["orderId"];

    $query = "INSERT INTO order_status (status, orderId) VALUES('" . $status . "', " . $orderId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
