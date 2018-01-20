<?php
  require_once("Models/furnitureCRUD.php");

  //session_start();
  
  $furn = new furniture();  

  $verify = $furn->DisplayAllFurnitures();

  $count = 1;
  if($verify != null){
    while($row = $verify->fetch_assoc()){

    $furnAvail = new furniture_stock();
    $furnSold = new furniture_stock();
    $furnHold = new furniture_stock();

    $countAvail = $furnAvail->displayAvailableFurnitureStock($row['furnitureId']);
    $countSold = $furnSold->displaySoldFurnitureStock($row['furnitureId']);
    $countHold = $furnHold->displayOnHoldFurnitureStock($row['furnitureId']);

    $qtyAvail = $countAvail->fetch_assoc();
    $qtySold = $countSold->fetch_assoc();
    $qtyHold = $countHold->fetch_assoc();

    include("Access/AdminViewFurnitures.php");
    $count++;

    }
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
