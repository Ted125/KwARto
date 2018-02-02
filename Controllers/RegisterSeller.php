<?php
require_once("../Models/userDetails.php");
require_once("../Models/sellerCRUD.php");
ob_start();
session_start();

$seller = new seller();
$verify = $seller->createSeller();

if($verify != null){
	echo '<script type="text/javascript">alert("Registered successfully. Please wait until an administrator has activated your account. Thank you!");</script>';
    header("Refresh: 0; ../loginnew.php");
} else {
	echo '<script type="text/javascript">alert("Something went wrong! Please try again later.");</script>';
    header("Refresh: 0; ../registernewSeller.php");
}
?>
