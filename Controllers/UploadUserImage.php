<?php

if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/User//'.$_SESSION['userId'].'//')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/User//'.$_SESSION['userId'].'//', 0777, true);
  }

$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Images/User//'.$_SESSION['userId'].'//';
$fileExtension = '.jpg';

$uploadfile = $uploaddir . basename($_SESSION['userId']) . $fileExtension;    //image naame will be the id of user

if (move_uploaded_file($_FILES['newData']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";

  $_POST['newData'] = $_SESSION['userId'] . $fileExtension;

  echo "NEWDATA: ".$_POST['newData']; 
  require_once("../Models/userDetails.php");

  $user = new user_details();
  $verifyImage = $user->updateUser('image', $_POST['newData']);

  $_SESSION['image'] = $_POST['newData'];

} else {
   echo "Upload failed";
   echo $uploadfile;
}

//header( "Location: ../profile.php" );
?> 