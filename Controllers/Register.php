<?php
require_once("../Models/userDetails.php");
require_once("../Models/customerCRUD.php");

session_start();

$user = new customer();
$verify = $user->createCustomer();

if($verify != null){
	
	echo "Registration Success";
	header( "Location: ../loginnew.php");
} else {

	echo "Invalid credentials or not activated";
	header( "Location: ../registernew.php");
}
?>