<?php
require('../Models/furnitureCRUD.php');
session_start();
$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/Resources/Models';
// $uploaddir = 'C:/xampp/htdocs/Capstone-Project/Resources/Models';
$fileExtension = '.obj';
//$uploadfile = $uploaddir . basename('dummyname') . $fileExtension;


$user = new furniture();
$verify = $user->createFurniture();
echo $verify;
if ($verify != null || $verify >= 0) {

  //$_POST['newData'] = 'Resources/Models/' . basename($verify) . $fileExtension;
  $uploadfile = $uploaddir . basename($verify) . $fileExtension;    //image naame will be the id of furn
  
  if (move_uploaded_file($_FILES['newData']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";

    

  // echo "FIELD: ".$_POST['field'];
  // echo "NEWDATA: ".$_POST['newData']; 
  // require_once("../Models/userDetails.php");

    
  } else {
      echo "Upload failed";
  }
} else {
    echo "Connection failed";
}
   

//header( "Location: ../upload.php" );
?> 