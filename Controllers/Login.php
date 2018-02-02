<?php
  //echo $_SERVER['DOCUMENT_ROOT'];
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/userDetails.php");
  ob_start();
  session_start();

  $user = new user_details();

  $verify = $user->login($_POST['loginEmail'], md5($_POST['loginPassword']));

  if($verify != null && strcmp($verify['userStatus'], 'banned') != 0){
    if(strcmp($verify['userType'], 'admin') == 0){
      $_SESSION['username'] = $verify['username'];
    }
      $_SESSION['userId'] = $verify['userId'];
      $_SESSION['email'] = $verify['email'];
      $_SESSION['userType'] = $verify['userType'];
      $_SESSION['mobileNumber'] = $verify['mobileNumber'];
      $_SESSION['dateAdded'] = $verify['dateAdded'];
      $_SESSION['image'] = $verify['image'];
    if(strcmp($verify['userType'], 'customer') == 0){
      $_SESSION['customerId'] = $verify['customerId'];
      $_SESSION['firstName'] = $verify['firstName'];
      $_SESSION['middleName'] = $verify['middleName'];
      $_SESSION['lastName'] = $verify['lastName'];
      $_SESSION['birthdate'] = $verify['birthdate'];
    } else if(strcmp($verify['userType'], 'seller') == 0){
      $_SESSION['sellerId'] = $verify['sellerId'];
      $_SESSION['description'] = $verify['description'];
      $_SESSION['name'] = $verify['name'];
      $_SESSION['description'] = $verify['description'];
    }

    switch($_SESSION['userType']){
      case "customer":
        header("Location: ../index.php");
        die();
        break;
      case "seller":
        header("Location: ../manuindex.php");
        die();
        break;
      case "admin":
        header("Location: ../admindex.php");
        die();
        break;
    }

  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    session_unset();
    session_destroy();
    echo "Invalid credentials or not activated";
    header("Location: ../loginnew.php?error=1");
  }
?>
