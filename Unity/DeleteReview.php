<?php
  require("Connect.php");

  if($connection){
    $reviewId = $_POST["reviewId"];

    $query = "DELETE FROM review WHERE reviewId = " . $reviewId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
