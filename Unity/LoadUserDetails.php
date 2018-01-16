<?php
  require("Connect.php");

  if($connection){
    $userId = $_POST["userId"];

    $query = "SELECT * FROM user_details WHERE userId = " . $userId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["userId"] . "\n";
        echo $row["username"] . "\n";
        echo $row["password"] . "\n";
        echo $row["userType"] . "\n";
        echo $row["userStatus"] . "\n";
        echo $row["email"] . "\n";
        echo $row["mobileNumber"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["addedBy"] . "\n";
        echo $row["updatedBy"] . "\n";
        echo $row["image"] . "\n";
        echo $row["address"] . "\n";
      }
    }
  }
?>
