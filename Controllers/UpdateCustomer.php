<?php
  require_once("../Models/userDetails.php");
  require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();

  $customer = new customer();
  $verify = $customer->updateCustomer($_POST['field'], $_POST['newData']);

  /*$user = new user_details();
  $verify2 = $user->updateUser($_POST['field'], $_POST['newData']);
  */
  if($verify != null && $verify2 != null){
    $_SESSION[$_POST['field']] = $_POST['newData'];

  } else {
      	//inform user that the input is not valid
   echo "Invalid credentials or not activated";
 }

 //header( "Location: http://localhost/capstone-project/profile.php" );
?>
