<?php
  require("Connect.php");

  if($connection){
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $birthdate = $_POST["birthdate"];
    $userId = $_POST["userId"];

    $query = "INSERT INTO customer (firstName, middleName, lastName, birthdate, userId) VALUES('" . $firstName . "', '" . $middleName . "', '" . $lastName . "', '" . $birthdate . "', " . $userId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
