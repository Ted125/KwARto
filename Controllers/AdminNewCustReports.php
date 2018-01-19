<?php
  require_once("Models/userDetails.php");

  //session_start();
  
  $user = new user_details();
  $verify = $user->countNewCustomers();
  if($verify != null){
    $row = $verify->fetch_assoc();
    echo $row['new_customers'];
  }
?>
