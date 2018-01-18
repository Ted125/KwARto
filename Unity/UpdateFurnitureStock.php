<?php
  require("Connect.php");

  if($connection){
    $status = $_POST["status"];
    $customerId = $_POST["customerId"];
    $stockId = $_POST["stockId"];

    $query = "UPDATE furniture_stock SET status = '" . $status . "', customerId = " . $customerId . " WHERE stockId = " . $stockId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
