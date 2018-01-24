<?php
require_once("../Models/userDetails.php");
include("../Models/Database.php");
session_start();

$seller = new user_details();
$verify = $seller->createUser("admin");

if($verify != null){

	echo "Registration Success";
	header( "Location: ../adminnew.php");
} else {

	echo "Invalid credentials or not activated";
	header( "Location: ../adminnew.php");
	
}
?>