<?php
require_once("../Models/userDetails.php");
require_once("../Models/customerCRUD.php");

  session_start();
  $customer = new customer();
  $verify = $customer->changeOrderState($_SESSION['sellerId'], $_POST['state'], $_POST['orderId']);

  if($verify != null){
     echo "Success";
  } else {
   echo "Invalid credentials or not activated";
 }

 header( "Location: ../manutrans.php" );
?>