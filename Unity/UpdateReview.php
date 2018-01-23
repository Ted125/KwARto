<?php
  require("Connect.php");

  if($connection){
    $reviewId = $_POST["reviewId"];
    $rating = $_POST["rating"];
    $title = $_POST["title"];
    $body = $_POST["body"];

    $query = "UPDATE review SET rating = " . $rating . ", title = '" . $title . "', body = '" . $body . "' WHERE reviewId = " . $reviewId;
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
