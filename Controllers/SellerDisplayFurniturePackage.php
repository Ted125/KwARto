<?php
  require_once("Models/furniture_packageCRUD.php");

  //session_start();
  
  $furn = new furniture_package();
  $verifyPackage = $furn->displayFurniturePackage($_POST['furnitureId']);
  $count = 1;
  if($verifyPackage != null){
    while($pack = $verifyPackage->fetch_assoc()){
      echo '<div>
              <span style="font-size: 18px;">Package '.$count.'</span>
              <input type="text" class="form-control" name="package1" value="'.$pack['item'].'" disabled><br>
            </div>
            ';
      $count++;

    }
  } else {
        //inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>