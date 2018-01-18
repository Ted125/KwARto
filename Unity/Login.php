<?php
  require("Connect.php");

  if($connection){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user_details WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["userId"] . "\n";

        if($row["username"] != null){
          echo $row["username"] . "\n";
        }else{
          echo $row["email"] . "\n";
        }

        echo $row["password"] . "\n";
        echo $row["userType"] . "\n";
        echo $row["userStatus"] . "\n";
        echo $row["email"] . "\n";

        if($row["mobileNumber"] != null){
          echo $row["mobileNumber"] . "\n";
        }else{
          echo "None" . "\n";
        }

        if($row["image"] != null){
          echo $row["image"] . "\n";
        }else{
          echo "None" . "\n";
        }

        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
      }
    }
  }
?>
