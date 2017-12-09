<?php
require_once("../Models/userDetails.php");
require_once("../Models/customerCRUD.php");

session_start();

$user = new customer();
//$verify = $user->Login($_POST['loginEmail'], $_POST['loginPassword']);
$verify = $user->debug();
/*
$_POST["registerFName"];
$_POST["registerMName"];
$_POST["registerLName"];
$_POST["registerBDay"];
$_POST["registerUsername"];
$_POST["registerPassword"];
$_POST["registerEmail"];
$_POST["registerPhone"];

$_POST["registerGender"];
$_POST["registerImage"];
$_POST["registerAddress"];

registerFName
registerMName
registerLName
registerBDay
registerUsername
registerPassword
registerEmail
registerPhone

//Not Present as of yet
registerGender
registerImage
registerAddress
*/

if($verify != null){
	//$_SESSION['userId'] = $verify['userId'];
	//$_SESSION['username'] = $verify['username'];
        //$_SESSION['userType'] = getUserType($verify['userType']);
} else {
      	//inform user that the input is not valid
	echo "Invalid credentials or not activated";
}

//header( "Location: http://localhost/capstone-project/" );
?>