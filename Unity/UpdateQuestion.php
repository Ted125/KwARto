<?php
  require("Connect.php");

  if($connection){
    $questionId = $_POST["questionId"];
    $question = $_POST["question"];

    $query = "UPDATE question SET question = '" . $question . "' WHERE questionId = " . $questionId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
