<?php require("SQL_Connect.php");
    
    class user_details{
        private $userId;
        private $username;
        private $password;
        private $userType;
        private $userStatus;
        private $gender;
        private $email;
        private $mobileNumber;
        private $dateAdded;
        private $dateUpdated;
        private $addedBy;
        private $updatedBy;
        private $image;
        private $address;

        const DB_TABLE = "user_table";
        const DB_TABLE_PK = "userId";
    }

    /***************** CONSTRUCTOR ****************/

    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createUser(){
        setUsername($_POST['username']);
        setPassword($_POST['password']);
        setGender($_POST['gender']);
        setEmail($_POST['email']);
        setMobileNumber($_POST['mobileNumber']);
        setAddress($_POST['address']);
        if(isset($_SESSION)){
            setAddedBy($_SESSION['userId'])
        }else{
            setAddedBy("NULL");
        }
        //setImage($_POST['image']);  i dont know if i should put an image sa creation.
        setAddress($_POST['address']);
        $create = "INSERT INTO user_details
        ( 
            userID, 
            userName,
            `password`, 
            userType, 
            userStatus,
            gender,
            email, 
            mobileNumber,
            addedBy,
            `address`
        )
        VALUES
        ('""','".getUserId()."','".getUsername()."','".getPassword()."','".getUserType()."','".getUserStatus()."','
          ".getGender()."','".getEmail()."','".getMobileNumber()."','".getAddedBy()."','".getAddress()."')";
        
        $result = mysqli_query($mysqli, $create);
        $select = "SELECT * 
                   FROM  user_details 
                   WHERE userName='".getUsername()."'";
        $qry = mysqli_query($mysqli, $select);
        $row = mysqli_fetch_array($qry);
        setUserId($row[0]);
        return getUserId();
    }
    
    public function createAdmin(){
        if(isset($_SESSION) && getUserType($_SESSION['userType']) == 'admin'){
            setUserStatus('active');
            setUserType('admin');
            createUser();
        }else{
            echo 'only admins can create an admin';
        }
    }

    public function activateUser(){
        if(isset($_SESSION) && getUserType($_SESSION['userType']) == 'admin'){
            setUserId($_POST['userId']);
            $update = "UPDATE user_details
                       SET userStatus = 'active' 
                       WHERE userId = '".getUserId()."'
                      ";
            $result = mysqli_query($mysqli, $update);
        }else{
            echo 'only admins can activate a user';
        }            
    }

    public function deactiveUser(){
        if(isset($_SESSION) && getUserType($_SESSION['userType']) == 'admin'){
            setUserId($_POST['userId']);
            $update = "UPDATE user_details
                       SET userStatus = 'inactive' 
                       WHERE userId = '".getUserId()."'
                      ";
            $result = mysqli_query($mysqli, $update);
        }else{
            echo 'only admins can deactivate a user';
        }
    }

    public function deleteUser(){
        if(isset($_SESSION) && getUserType($_SESSION['userType']) == 'admin'){
            setUserId($_POST['userId']);
            $db = "user_details";
            $id = NULL;
            if(getUserType($_POST['userType'] == 'customer')){
                $db = "customer";
            }else if(getUserType($_POST['userType'])){
                $db = "seller";
            }	
            if($db != "user_details"){
                $select = "SELECT * 
                            FROM  '".$db."' x, user_details y
                            WHERE x.userId = 'y.".getUserId()."'";
                            $qry = mysqli_query($mysqli, $select);
                            $row = mysqli_fetch_array($qry);
                            $id = $row[0];

                $delete1 = "DELETE
                            FROM '".$db." ' x, user_details y
                            WHERE userID = 'x.".$id."' && y.userStatus = 'Not_Activated' 
                           ";
        
                $result1 = mysqli_query($mysqli, $delete1);
                if(mysqli_num_rows($result1) == 1){
                    alert("Delete: Succesful");
                }else{
                    alert("Delete: Fail")
                }
            }
            $delete2 = "DELETE
            FROM user_table
            WHERE userID = '".getUserId()."' && userStatus = 'Not_Activated' 
           ";

            $result2 = mysqli_query($mysqli, $delete2);
            if(mysqli_num_rows($result2) == 1){
                alert("Delete: Succesful");
            }else{
                alert("Delete: Fail")
            }
        }else{
            echo 'only admins can deactivate a user';
        }
        
        
        return result;
    }

    public function readAdmin(){
        $query ="SELECT
                        userId,
                        username,
                        userType,
                        `status`,
                        gender,
                        email,
                        mobileNumber,
                        `image`,
                        `address`
                 FROM  user_details
                 WHERE userId = '".getUserId()."'
                ");
        $row = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_array($row);

        return result;
    }

    /***************** SETTERS AND GETTERS ****************/

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUsername(){
        return $this->username; 
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getUserType(){
        return $this->userType;
    }

    public function setUserType($userType){
        $this->userType = $userType;
    }

    public function getUserStatus(){
        return $this->userStatus;
    }

    public function setUserStatus($userStatus){
        $this->userStatus = $userStatus;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getMobileNumber(){
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber){
        $this->mobileNumber = $mobileNumber;
    }

    public function getDateAdded(){
        return $this->dateAdded;
    }

    public function setDateAdded($dateAdded){
        $this->dateAdded = $dateAdded;
    }

    public function getDateUpdated(){
        return $this->dateUpdated;
    }

    public function setDateUpdated($dateUpdated){
        $this->dateUpdated = $dateUpdated;
    }

    public function getAddedBy(){
        return $this->addedBy;
    }

    public function setAddedBy($addedBy){
        $this->addedBy = $addedBy;
    }

    public function getUpdatedBy(){
        return $this->updatedBy;
    }

    public function setUpdatedBy($updatedBy){
        $this->updatedBy = $updatedBy;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }
?>