<?php
  require_once("Models/userDetails.php");

  //session_start();
  
  $user = new user_details();
  $verify = $user->countPendingSellers();
  if($verify != null){
    $row = $verify->fetch_assoc();
    echo $row['pend_sellers'];
  }
?>
