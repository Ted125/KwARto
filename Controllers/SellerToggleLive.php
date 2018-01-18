<?php
  require_once("../Models/furnitureCRUD.php");

  session_start();
  
  $furn = new furniture();

  if(strcmp($_POST['status'], '1') == 0){
    $verify = $furn->deactivateFurniture($_POST['furnitureId']);
  } else {
    $verify = $furn->activateFurniture($_POST['furnitureId']);
  }
  

  if($verify != null){
    
    echo "Successfully Changed";
  } else {
        //inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

  header('Location: '.$_SERVER['HTTP_REFERER']);
?>
