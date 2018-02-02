<?php
require_once("../Models/userDetails.php");
require_once("../Models/customerCRUD.php");
ob_start();
session_start();

$user = new customer();
$verify = $user->createCustomer();

if($verify != null){

	echo '<script type="text/javascript">alert("Registered successfully. Thank you for joining the kwARto family!");</script>';
	header("Refresh: 0; ../loginnew.php");

} else {
	echo '<script type="text/javascript">alert("Something went wrong! Please try again later.");</script>';
    header("Refresh: 0; ../register.php");
}
?>
