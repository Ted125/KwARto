<?php
  require_once("../Models/userDetails.php");
  require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();

  $customer = new customer();
  $verify = $customer->updateCustomerMult($_POST['updateFName'], $_POST['updateLName'], $_POST['updateBDay']);

  /*$user = new user_details();
  $verify2 = $user->updateUser($_POST['field'], $_POST['newData']);
  */
  if($verify != null){
    $_SESSION['firstName'] = $_POST['updateFName'];
    $_SESSION['lastName'] = $_POST['updateLName'];
    $_SESSION['birthdate'] = $_POST['updateBDay'];

  } else {
      	//inform user that the input is not valid
   echo "Invalid credentials or not activated";
 }

 header( "Location: http://localhost/capstone-project/profile.php" );
?>
