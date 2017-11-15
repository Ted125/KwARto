<?php require("SQL_Connect.php");
    
    class user{
        private $userID;
        private $userName;
        private $userStatus;
        private $userPassword;
        private $userType;
        private $firstName;
        private $lastName;
        private $middleInitial;
        private $userPic;
        private $gender;
        private $email;
        private $birthdate;
        private $addedTimeStamp;
        private $updatedTimeStamp;
        private $addedBy;
    }
    
    public function __construct(){
        
    }

    public function createUser(){ 
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
        '".$middleInitial."','".$userPic."','".$email."','".$birthDate."','".$addedTimeStamp."','".$updatedTimeStamp."','".$addedBy."')";
    }

    public function updateUser(){
        $updatedTimeStamp = NOW();
        $update = "UPDATE user_table
        SET
            userName = '".$userName."',
            userPassword = '".$userPassword."',
            course = '".$course."',
            userType = '".$userType."',
            firstName = '".$firstName."',
            lastName = '".$lastName."',
            middleInitial = '".$middleInitial."',
            userPic = '".$userPic."',
            email = '".$email."',
            birthdate = '".$birthdate."',
            updatedTimeStamp = '".$updatedTimeStamp."',
        
        WHERE userID = '".$userID."'";	
        $result = mysqli_query($mysqli, $update);
        
        return result;
    }

    public function readUser(){
        $query = mysqli_query($mysqli, "SELECT userID, userStatus, course, userType, 
                                             firstName, lastName, middleInitial, userPic, email, birthdate,
                                        FROM  user_table
                                        WHERE userID='".$userID."'
                                       ");
        $result = mysqli_fetch_array($query);
    }
?>