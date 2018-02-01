<?php
  require_once("../Models/userDetails.php");
  require_once("../Models/sellerCRUD.php");
  session_start();
  
  $user = new user_details();
  $verify = $user->deactivateUser($_POST['userId']);
  if(isset($_POST['userType']) && strcmp($_POST['userType'], 'seller') ==0 ){
    $seller = new seller();
    $verify2 = $seller->banAllSellerFurniture($_POST['userId']);
  }
  echo $_POST['userId'];
  if($verify != null){
    header('Location: '.$_SERVER['HTTP_REFERER']);
  } else {
    echo "Deactivate failed";
  }
?>