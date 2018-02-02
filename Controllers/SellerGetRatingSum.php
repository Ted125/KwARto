<?php
  require_once("Models/reviewCRUD.php");
  ob_start();
  //session_start();

  $furn = new review();
  $temp = $furn->displaySumRatings($_SESSION['sellerId']);
  if($temp != null){
    $ratingSum = $temp->fetch_assoc();
  } else {

    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
