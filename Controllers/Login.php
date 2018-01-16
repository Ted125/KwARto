<?php
  require_once("../Models/userDetails.php");
  //require_once("../Models/userDetails.php");
  //require_once("../Models/customerCRUD.php");
  //require_once("../Models/sellerDetails.php");

  session_start();
  // new Login();

  // class Login{
  //   public function __construct(){
  //     $user = new User();
  //     $verify = $user->Login($_POST['loginEmail'], $_POST['loginPassword']);

  //     if($verify != null){

  //     	echo $_SESSION['username'] = $verify->userName;
  //     } else {
  //     	//inform user that the input is not valid
  //     	echo "Not logged in";
  //     }

  //     //header( "Location: http://localhost/capstone-project/" );
  //   }
  // }

  $user = new user_details();
  $verify = $user->Login($_POST['loginEmail'], md5($_POST['loginPassword']));

  if($verify != null){
    $_SESSION['userId'] = $verify['userId'];
    $_SESSION['username'] = $verify['username'];
    $_SESSION['email'] = $verify['email'];
    $_SESSION['userType'] = $verify['userType'];
    $_SESSION['gender'] = $verify['gender'];
    $_SESSION['mobileNumber'] = $verify['mobileNumber'];
    $_SESSION['dateAdded'] = $verify['dateAdded'];
    $_SESSION['address'] = $verify['address'];
    $_SESSION['firstName'] = $verify['firstName'];
    $_SESSION['middleName'] = $verify['middleName'];
    $_SESSION['lastName'] = $verify['lastName'];
    $_SESSION['birthdate'] = $verify['birthdate'];
    $_SESSION['image'] = $verify['image'];
    header( "Location: http://localhost/capstone-project/" );
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
    header( "Location: http://localhost/capstone-project/login.php" );
 }

 //header( "Location: http://localhost/capstone-project/" );
?>
