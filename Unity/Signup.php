<?php
  require("Connect.php");

  if($connection != null){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $middleInitial = "A";
    $username = "Username";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $userType = $_POST["userType"];
    $userPic = "1.jpg";

    $query = "INSERT INTO user_table (firstName, lastName, middleInitial, userName, email, userPassword, userType, userPic) VALUES('" . $firstName . "', '" . $lastName . "', '" . $middleInitial . "', '" . $username . "', '" . $email . "', '" . $password . "', '" . $userType . "', '" . $userPic . "');";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
      //return true;
    }else{
      echo "false";
      //return false;
    }
  }else{
    echo "false";
    //return false;
  }
?>
