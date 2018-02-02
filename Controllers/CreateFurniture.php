<?php
require_once("../Models/furnitureCRUD.php");
ob_start();
session_start();

$furn = new furniture();
$verify = $furn->createFurniture();


if($verify != null){
	//$_SESSION['userId'] = $verify['userId'];
    $_SESSION['username'] = $_POST["registerUsername"];
} else {
      	//inform user that the input is not valid
	echo "Invalid credentials or not activated";

}
header( "Location: http://localhost/capstone-project/" );
