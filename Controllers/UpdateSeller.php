<?php
  require_once("../Models/userDetails.php");
  //require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();
  include("../Models/Database.php");
  
  if(!empty($_POST['newData']) && strcmp($_POST['newData'], $_POST['comData']) == 0){
    $user = new user_details();
    $verify = $user->updateUser($_POST['field'], $_POST['newData']);
  } else {
    echo "Cannot update";
    header('Location: ../manuprofile.php?error=1');
    die();
  }

  if($verify == true){
    $_SESSION[$_POST['field']] = $_POST['newData'];
    header('Location: ../manuprofile.php');
    die();
  } else {
      	//inform user that the input is not valid
   echo "Invalid credentials or not activated";
   header('Location: ../manuprofile.php?error=0');
 }


?>
