<?php
require('../Models/furnitureCRUD.php');
require('../Models/furniture_imageCRUD.php');
session_start();

$user = new furniture();

$verify = $user->createFurniture();
echo $verify;

if ($verify != null || $verify >= 0) {
  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '\Capstone-Project\Resources\Images\Furniture\\'.$verify.'\\')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '\Capstone-Project\Resources\Images\Furniture\\'.$verify.'\\', 0777, true);
  }
  $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '\Capstone-Project\Resources\Images\Furniture\\'.$verify.'\\';
  $fileExtension = '.jpg';

  $furnImg = new furniture_image();
  $fiName = $furnImg->countAllImages($uploaddir);
  $uploadfile = $uploaddir . basename("1") . $fileExtension;    //image naame will be the id of user
  
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    echo "NEWDATA: ".$_FILES['image']['tmp_name']; 
    echo $uploaddir;

    
    $verify2 = $furnImg->createFurnitureImage($verify);
    if($verify != null){
      echo "Successfully queried";
    } else {
      echo "Error query";
    }
  } else {
    echo "Upload Fail";
    echo "......uploadfile:->>>".$uploadfile;
  }
  
} else {
    echo "Connection failed";
}
   

//header('Location: '.$_SERVER['HTTP_REFERER']);
?> 