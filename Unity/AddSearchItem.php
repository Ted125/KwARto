<?php
  require("Connect.php");

  if($connection){
    $value = $_POST["value"];
    $customerId = $_POST["customerId"];

    $query = "INSERT INTO search_history (value, customerId) VALUES('" . $value . "', " . $customerId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
