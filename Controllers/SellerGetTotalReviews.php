<?php
  require_once("Models/reviewCRUD.php");
  ob_start();
  //session_start();

  $furn = new review();
  $temp = $furn->displayTotalSellerReviews($_SESSION['sellerId']);
  if($temp != null){
    $reviews= $temp->fetch_assoc();
  } else {

    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
