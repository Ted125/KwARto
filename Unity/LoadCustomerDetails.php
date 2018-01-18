<?php
  require("Connect.php");

  if($connection){
    $userId = $_POST["userId"];

    $query = "SELECT * FROM customer WHERE userId = " . $userId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["customerId"] . "\n";
        echo $row["firstName"] . "\n";
        echo $row["middleName"] . "\n";
        echo $row["lastName"] . "\n";
        echo $row["birthdate"] . "\n";
        echo $row["userId"] . "\n";
      }
    }
  }
?>
