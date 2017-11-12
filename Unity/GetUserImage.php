<?php
  require("Connect.php");

  if($connection != null){
    $userId = $_GET['userId'];

    $query = "SELECT userPic FROM " . "user_table" . " WHERE userID = '" . $userId . "';";
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);

      header("Location: ../Resources/Images/Users/" . $row['userPic']);
    }
  }
?>
