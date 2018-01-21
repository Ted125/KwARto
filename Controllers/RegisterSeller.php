<?php
require_once("../Models/userDetails.php");
require_once("../Models/sellerCRUD.php");

session_start();

$seller = new seller();
$verify = $seller->createSeller();

if($verify != null){

	echo "Registration Success";
	header( "Location: ../loginnew.php");
} else {

	echo "Invalid credentials or not activated";
	header( "Location: ../registernewSeller.php");
	
}
?>