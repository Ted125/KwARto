<?php
  //echo $_SERVER['DOCUMENT_ROOT'];
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/userDetails.php");

  session_start();

  $user = new user_details();

  $verify = $user->login($_POST['loginEmail'], md5($_POST['loginPassword']));

  if($verify != null){
    $_SESSION['userId'] = $verify['userId'];
    $_SESSION['email'] = $verify['email'];
    $_SESSION['userType'] = $verify['userType'];
    $_SESSION['mobileNumber'] = $verify['mobileNumber'];
    $_SESSION['dateAdded'] = $verify['dateAdded'];

    if(strcmp($verify['userType'], 'customer') == 0){
      $_SESSION['firstName'] = $verify['firstName'];
      $_SESSION['middleName'] = $verify['middleName'];
      $_SESSION['lastName'] = $verify['lastName'];
      $_SESSION['birthdate'] = $verify['birthdate'];
      $_SESSION['image'] = $verify['image'];
    }

    switch($_SESSION['userType']){
      case "customer":
        header("Location: ../index.php");
        break;
      case "seller":
        header("Location: ../manuindex.php");
        break;
      case "admin":
        header("Location: ../admindex.php");
        break;
    }

  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    session_unset();
    session_destroy();
    echo "Invalid credentials or not activated";
    header("Location: ..loginnew.php");
  }
?>
