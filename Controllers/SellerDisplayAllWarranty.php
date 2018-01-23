<?php
  require_once("Models/warrantyCRUD.php");

  //session_start();
  
  $user = new warranty();
  $temp = $user->displayAllWarranty();
  if($temp != null){
    while($war = $temp->fetch_assoc()){
      echo '<option value="'.$war['warrantyId'].'">
                '.$war['name'].'
            </option>
            ';
    }
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>