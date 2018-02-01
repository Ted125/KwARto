<?php
require('../Models/furnitureCRUD.php');
require('../Models/furniture_packageCRUD.php');
require('../Models/furniture_specificationCRUD.php');
require('../Models/furniture_imageCRUD.php');
session_start();


$user = new furniture();
$package = new furniture_package();
$spec = new furniture_specification();
$furnImg = new furniture_image();

$verify = $user->createFurniture();

for($p = 1; $p <= 5; $p++){
  if(isset($_POST['package'.$p.''])){
    if($package->createFurniturePackage($_POST['package'.$p.''], $verify) == NULL){
      echo $p." failed to insert<br>";
    }
  } else {
    echo $p." is not available<br>";
  }
}

for($p = 1; $p <= 5; $p++){
  if(isset($_POST['spec'.$p.''])){
    if($spec->createFurnitureSpecification($_POST['spec'.$p.''], $verify) == NULL){
       echo $p." failed to insert<br>";
    }
  } else {
    echo $p." is not available<br>";
  }
}

$err = 0;
echo $verify;

if ($verify != null || $verify >= 0) {
  //For images upload
  if (isset($_FILES['image'])) {
    $myFile = $_FILES['image'];
    $fileCount = count($myFile["name"]);

    for ($i = 0; $i < $fileCount; $i++) {
      if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//')) {
        mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//', 0777, true);
      }

      $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/Furniture//'.$verify.'//';
      $fileExtension = '.jpg';

      
      $fiName = $furnImg->countAllImages($uploaddir);
      $uploadfile = $uploaddir . basename((string)$fiName) . $fileExtension;
      echo "THE FILE NAME WILL BE ".$fiName;

      if(move_uploaded_file($_FILES['image']['tmp_name'][$i], $uploadfile)){
        echo "Successfully uploaded ".$fiName."<br>";
        $furnImg->createFurnitureImage($verify);
      } else {
        $err = 1;
        break;
      }
    }
  }


  //For models upload
  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//', 0777, true);
  }
  $uploaddir2 = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Models//'.$verify.'//';
  //$fileExtension2 = '.asset';

  $uploadfile2 = $uploaddir2 . basename($_FILES['model']['name']);

  if ($err == 0 && move_uploaded_file($_FILES['model']['name'], $uploadfile2)) {
    echo "NEWDATA: ".$_FILES['image']['tmp_name']."<br>"; 
    echo "NEWDATA: ".$_FILES['model']['tmp_name']."<br>"; 
    echo "DIRECTORY FOR IMAGES: ".$uploaddir;
    echo "DIRECTORY FOR MODEL: ".$uploaddir2;

  } else {
    echo "Upload Fail";
    echo "......uploadfile:->>>".$uploadfile;
  }
  
} else {
    echo "Connection failed";
}
   

//header('Location: '.$_SERVER['HTTP_REFERER']);
?> 