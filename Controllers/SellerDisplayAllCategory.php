<?php
  require_once("Models/categoryCRUD.php");

  //session_start();
  
  $category = new category();
  $temp_cat = $category->displayAllCategory();
  if($temp_cat != null){
    while($cat = $temp_cat->fetch_assoc()){
      echo '<option value="'.$cat['categoryId'].'">
                '.$cat['name'].'
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