<?php

$uploaddir = 'C:/xampp/htdocs/Capstone-Project/Resources/Images/Users/';
$fileExtension = '.jpg';
//$uploadfile = $uploaddir . basename('dummyname') . $fileExtension;
$uploadfile = $uploaddir . basename($_SESSION['userId']) . $fileExtension;    //user id will be the name of prof pics
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