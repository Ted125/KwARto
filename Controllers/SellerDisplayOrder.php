<?php
  require_once("Models/userDetails.php");
  require_once("Models/customerCRUD.php");

  //session_start();
  
  $cust = new customer();
  $verify = $cust->readCustomerOrder($_SESSION['sellerId']);
  $count = 1;
  if($verify != null){
    while($row = $verify->fetch_assoc()){
      include("Access/SellerViewOrder.php");
      $count++;

    }
  } else {
        //inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
