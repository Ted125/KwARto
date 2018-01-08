<?php
require('Models/Database.php');

$uploaddir = 'C:/xampp/htdocs/Capstone-Project/Resources/Images/Furniture/';
$fileExtension = '.jpg';
//$uploadfile = $uploaddir . basename('dummyname') . $fileExtension;

$ctr = 0;

$db = new Database();
$connection = $db->Connect();
$result = null;
if($connection){
    $result = mysqli_query($connection, "SELECT * FROM furniture_image WHERE furnitureId = '".$_POST['furnitureId']."'");
    $num_rows = mysqli_num_rows($result);
    $ctr = $num_rows + 1;

$uploadfile = $uploaddir . basename("'".$_POST['furnitureId']."'_'".$ctr."'") . $fileExtension;    //furniture name is furniture ID + nth image
echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}
/*
echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";
*/
?> 