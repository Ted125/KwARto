<?php
  require("Connect.php");

  if($connection){
    $questionId = $_POST["questionId"];

    $query = "DELETE FROM question WHERE questionId = " . $questionId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
