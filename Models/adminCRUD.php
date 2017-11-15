<?php require("SQL_Connect.php");

    class admin extends user{
        private $adminID;
    }

    public function __construct(){

    }

    public function createAdmin(){
        $adminID = $_SESSION['userID'];
        $userStatus = 'Activated';
        $userType = 'admin';
        $addedTimeStamp = $updatedTimeStamp = NOW();
        $query = "INSERT INTO user_table
        ( 
            userID, 
            userName, 
            userStatus, 
            userPassword, 
            userType, 
            firstName, 
            lastName, 
            middleInitial, 
            userPic,
            gender, 
            email, 
            birthDate,
            addedTimeStamp,
            updatedTimeStamp,
            addedBy
        )
        VALUES
        ('" "','".$userName."','".$userStatus."','".$userPassword."','".$userType."','".$firstName."','".$lastName."',
        '".$middleInitial."','".$userPic."','".$email."','".$birthDate."','".$addedTimeStamp."','".$updatedTimeStamp."','".$adminID."')";
    }

    public function deactivateUser(){
        $updatedTimeStamp = NOW();
        $update = "UPDATE user_table
                   SET userStatus = "'Not_Activated'",
                       updatedTimeStamp = "'$updatedTimeStamp'"
        
                    WHERE userID = '".$userID."' ";
        $result = mysqli_query($mysqli, $update);
    
        return result;
    }
    
    public function deleteUser(){
		$delete= "DELETE
				  FROM user_table
				  WHERE userID = '".$userID."' && userStatus = 'Not_Activated' 
				 ";	
		$result = mysqli_query($mysqli, $delete);
        if(mysqli_num_rows($result) == 1){
            alert("Delete: Succesful");
        }else{
            alert("Delete: Fail")
        }s
        return result;
    }
?>