<?php
require_once('../Models/Database.php');

if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Documents/Seller//'.$_SESSION['sellerId'].'//')) {
    mkdir($_SERVER['DOCUMENT_ROOT'] . '/Capstone-Project/Resources/Documents/Seller//'.$_SESSION['sellerId'].'//', 0777, true);
}

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/Capstone-Project/Resources/Documents/Seller//' . $_SESSION['sellerId'] . '//';
$fileExtension = '.jpg';

$uploadfile = $uploaddir . basename("".$_SESSION['sellerId']."_busiper") . $fileExtension;    

$db = new Database();
$connection = $db->Connect();
$result = null;
if($connection){
    $result = mysqli_query($connection, "UPDATE seller SET busi_permit = 1 WHERE sellerId = '".$_SESSION['sellerId']."'");
}

if (move_uploaded_file($_FILES['newData2']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}
?> 