<?php
  require_once("../Models/userDetails.php");
  require_once("../Models/sellerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();
  include("../Models/Database.php");
  
  if(!empty($_POST['updateName']) && !empty($_POST['updateDesc']) && !empty($_POST['updateMobile'])){
    $user = new seller();
    $verify = $user->updateSellerMult();
    include('UploadUserImage.php');
  }

  if($verify != null){
    $_SESSION['name'] = $_POST['updateName'];
    $_SESSION['description'] = $_POST['updateDesc'];
    $_SESSION['mobileNumber'] = $_POST['updateMobile'];
    header('Location: ../manuprofile.php');
    die();
  } else {
      	//inform user that the input is not valid
   echo "Invalid credentials or not activated";
   header('Location: ../manuprofile.php?error=0');
 }


?>
