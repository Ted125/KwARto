<?php
  require_once("../Models/userDetails.php");

  session_start();
  
  $user = new user_details();
  $verify = $user->deactivateUser($_POST['userId']);
  echo $_POST['userId'];
  if($verify != null){
    header('Location: '.$_SERVER['HTTP_REFERER']);
  } else {
    echo "Deactivate failed";
  }
?>