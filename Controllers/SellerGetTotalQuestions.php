<?php
  require_once("Models/questionCRUD.php");

  //session_start();
  
  $furn = new question();
  $temp = $furn->displayTotalSellerQuestions($_SESSION['sellerId']);
  if($temp != null){
    $questions = $temp->fetch_assoc();
  } else {

    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>