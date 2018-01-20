<?php
require('../Models/furnitureCRUD.php');
require('../Models/furniture_imageCRUD.php');
session_start();

$user = new furniture();

$verify = $user->createFurniture();
echo $verify;

if ($verify != null || $verify >= 0) {
  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//', 0777, true);
  }
  $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//';
  $fileExtension = '.jpg';

  $furnImg = new furniture_image();
  $fiName = $furnImg->countAllImages($uploaddir);
  $uploadfile = $uploaddir . basename((string)$fiName) . $fileExtension;
  echo "THE FILE NAME WILL BE ".$fiName;

  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//', 0777, true);
  }
  $uploaddir2 = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//';
  $fileExtension2 = '.asset';

  $uploadfile2 = $uploaddir2 . basename($_FILES['model']['tmp_name']) . $fileExtension2;

  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile) && move_uploaded_file($_FILES['model']['tmp_name'], $uploadfile2)) {
    echo "NEWDATA: ".$_FILES['image']['tmp_name']."<br>"; 
    echo "NEWDATA: ".$_FILES['model']['tmp_name']."<br>"; 
    echo "DIRECTORY FOR IMAGES: ".$uploaddir;
    echo "DIRECTORY FOR MODEL: ".$uploaddir2;

    
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
   

header('Location: '.$_SERVER['HTTP_REFERER']);
?> 