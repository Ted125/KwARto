<?php
  require_once("../Models/feedbackCRUD.php");

  //session_start();
  
  $feed = new feedback();
  $verify = $feed->createFeedback();
  if($verify != null){
    //alert("Message Successfully Sent");
    //echo "<script type='text/javascript'>alert('$msg');</script>";
    echo '<script type="text/javascript">alert("Message Successfully Sent");</script>';
    header('Refresh: 0; '.$_SERVER['HTTP_REFERER']);
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Error occured while sending feedback";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
