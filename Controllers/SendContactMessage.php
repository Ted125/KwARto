<?php
  require_once("../Models/feedbackCRUD.php");

  //session_start();
  
  $feed = new feedback();
  $verify = $feed->createFeedback();
  if($verify != null){
    echo '<script type="text/javascript">alert("Message Successfully Sent. We will reply to you as soon as possible!");</script>';
    header('Refresh: 0; '.$_SERVER['HTTP_REFERER']);
  } else {
    echo "Error occured while sending feedback";
  }

?>
