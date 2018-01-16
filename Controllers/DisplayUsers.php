<?php
  require_once("Models/userDetails.php");

  //session_start();
  
  $user = new user_details();
  $verify = $user->DisplayAllUsers();

  if($verify != null){
    while($row = $verify->fetch_assoc()){
      echo "
        <tr>
            <th>".$row['userId']."</th>
            <th>".$row['username']."</th>
            <th>".$row['userType']."</th>
            <th>".$row['userStatus']."</th>
            <th>".$row['email']."</th>
            <th>".$row['mobileNumber']."</th>
            <th>".$row['dateAdded']."</th>
        </tr>
      ";
    }
  } else {
      	//inform user that the input is not valid
    //$_SESSION['loginAlert'] = "Email or Password does not match, try again.";
    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
