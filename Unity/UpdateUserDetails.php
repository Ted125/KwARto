<?php
  require("Connect.php");

  if($connection){
    $mobileNumber = $_POST["mobileNumber"];
    $email = $_POST["email"];
    $userId = $_POST["userId"];

    $query = "UPDATE user_details SET mobileNumber = '" . $mobileNumber . "', email = '" . $email . "' WHERE userId = " . $userId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
