<?php
require_once("../Models/userDetails.php");
include("../Models/Database.php");
session_start();

$user = new user_details();
echo $_POST['registerUsername'];
$verify = $user->createAdmin();

if($verify != null){

	echo "Registration Success";
	header( "Location: ../adminnew.php?success=1");
} else {

	echo "Invalid credentials or not activated";
	header( "Location: ../adminnew.php?error=1");
	
}
?>