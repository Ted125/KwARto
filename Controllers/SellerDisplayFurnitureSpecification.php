<?php
  require_once("Models/furniture_specificationCRUD.php");

  //session_start();
  
  $furn = new furniture_specification();
  $verifySpec = $furn->displayFurnitureSpecification($_POST['furnitureId']);
  $count = 1;
  if($verifySpec != null){
    while($spec = $verifySpec->fetch_assoc()){
      echo '<div>
              <span style="font-size: 18px;">Specification '.$count.'</span>
              <input type="text" class="form-control" name="package1" value="'.$spec['specification'].'" disabled><br>
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