<?php
  require_once("Models/feedbackCRUD.php");

  //session_start();
  
  $feed = new feedback();
  $verify = $feed->displayAllFeedback();
  $count = 1;
  if($verify != null){
    while($row = $verify->fetch_assoc()){
      include("Access/AdminViewComments.php");
      $count++;
    }
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "<p class='text-center'>There are no comments/feedbacks at this time.</p>";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>