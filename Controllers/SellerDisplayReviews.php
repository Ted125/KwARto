<?php
  require_once("Models/reviewCRUD.php");

  //session_start();
  
  $furn = new review();
  $verify = $furn->displayAllSellerReview();
  $count = 1;
  if($verify != null){
    while($row = $verify->fetch_assoc()){
      include("Access/SellerViewReviews.php");
      $count++;

    }
  } else {
        //inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
