<?php
  require_once("../Models/userDetails.php");
  require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();

  $customer = new customer();
  echo $_POST['updateFName'];
  $verify = $customer->updateCustomerMult($_POST['updateFName'], $_POST['updateLName'], $_POST['updateBDay']);
  include('UploadUserImage.php');

    $_SESSION['firstName'] = $_POST['updateFName'];
    $_SESSION['lastName'] = $_POST['updateLName'];
    $_SESSION['birthdate'] = $_POST['updateBDay'];

 header( "Location: ../profile.php" );
?>
