<?php
  require("Connect.php");

  if($connection != null){
    $email = $_GET['email'];
    $password = $_GET['password'];

    $query = "SELECT * FROM " . "user_table" . " WHERE email = '" . $email ."' AND userPassword = '" . $password . "';";
    $result = mysqli_query($connection, $query);

    if($result != null && mysqli_num_rows($result) == 1){

      while($row = mysqli_fetch_assoc($result)){
        echo $row['userID'] . "\n";
        echo $row['userName'] . "\n";
        echo $row['isActivated'] . "\n";
        echo $row['userPassword'] . "\n";
        echo $row['firstName'] . "\n";
        echo $row['lastName'] . "\n";
        echo $row['middleInitial'] . "\n";
        echo $row['email'] . "\n";
        echo $row['userPic'] . "\n";
      }
    }else{
      return null;
    }
  }
?>
