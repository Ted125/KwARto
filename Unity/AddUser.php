<?php
  require("Connect.php");

  if($connection){
    $password = $_POST["password"];
    $userType = $_POST["userType"];
    $userStatus = $_POST["userStatus"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];

    $query = "INSERT INTO user_details (password, userType, userStatus, email, mobileNumber) VALUES('" . $password . "', '" . $userType . "', '" . $userStatus . "', '" . $email . "', '" . $mobileNumber . "')";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
