<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "DELETE FROM search_history WHERE customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
