<?php
  require("Connect.php");

  if($connection){
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $birthdate = $_POST["birthdate"];
    $customerId = $_POST["customerId"];

    $query = "UPDATE customer SET firstName = '" . $firstName . "', middleName = '" . $middleName . "', lastName = '" . $lastName . "', birthdate = '" . $birthdate . "' WHERE customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
