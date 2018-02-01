<?php
  require_once("../Models/userDetails.php");
  //require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();
  include("../Models/Database.php");
  
  if(strcmp($_POST['newData'], $_POST['comData']) == 0 || strcmp($_POST['newData'], "") == 0){
    $user = new user_details();
    $verify = $user->updateUser($_POST['field'], $_POST['newData']);
  } else {
    echo "Cannot update";
    header('Location: ../profile.php?error=1');
  }

  if($verify == true){
    $_SESSION[$_POST['field']] = $_POST['newData'];

  } else {
      	//inform user that the input is not valid
   echo "Invalid credentials or not activated";
 }

 header('Location: ../profile.php');
?>
