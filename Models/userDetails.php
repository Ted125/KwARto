<?php 
include("Database.php");

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


    /***************** CONSTRUCTOR ****************/

    public function __construct(){

    }

    /***************** FUNCTIONS ****************/
    public function debug($field, $newData){
        $create = "UPDATE user_details
                SET 
                ".$field." = '".$newData."'
                WHERE 
                user_details.userId = ".$_SESSION['userId']."";
        echo $create;

        /*sample code here*/
    }

    public function createUser($userType){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $this->setUsername($_POST['registerUsername']);
            $this->setPassword($_POST['registerPassword']);
            $this->setUserType($userType);
            $this->setGender($_POST['registerGender']);
            $this->setEmail($_POST['registerEmail']);
            $this->setMobileNumber($_POST['registerPhone']);
            $this->setAddress("Sample Address");
            // if(isset($_SESSION)){
            //     $this->setAddedBy($_SESSION['userId']);
            // }else{
            //     $this->setAddedBy("NULL");
            // }
            //$this->setImage($_POST['image']);  i dont know if i should put an image sa creation.
            $create = "INSERT INTO user_details
            ( 
            username,
            password, 
            userType, 
            userStatus,
            gender,
            email, 
            mobileNumber,
            addedBy,
            address
            )
            VALUES
            ('".$this->getUsername()."','".$this->getPassword()."','".$this->getUserType()."','".$this->getUserStatus()."','
            ".$this->getGender()."','".$this->getEmail()."','".$this->getMobileNumber()."','".$this->getAddedBy()."','".$this->getAddress()."')";

            $result = mysqli_query($connection, $create);

            // $select = "SELECT * 
            // FROM  user_details 
            // WHERE userName='".$this->getUsername()."'";//there must be other way
            // $qry = mysqli_query($connection, $select);
            // $row = mysqli_fetch_array($qry);
            // $this->setUserId($row[0]);

            $this->setUserId($connection->insert_id);
            mysqli_close($connection);
            echo "<h1> after result in userDetails.php ".$this->getUserId()."</h1>";
            return $this->getUserId();
        }
    }

    public function updateUser($field, $newData){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $create = "UPDATE user_details
                SET 
                ".$field." = '".$newData."'
                WHERE 
                user_details.userId = ".$_SESSION['userId']."";
            $result = mysqli_query($connection, $create);
            
            if(mysqli_affected_rows($connection) > 0){
                mysqli_close($connection);
                return true;
            } else {
                mysqli_close($connection);
                return false;
            }
        }
    }

    public function createAdmin(){
        $result;
        $this->setUserType($_SESSION['userType']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'admin') == 0){
            $this->setUserStatus('active');
            $this->setUserType('admin');
            $result = $this->createUser();
        }else{
            echo 'only admins can create an admin';
        }
        return result;
    }

    public function activateUser(){
        $this->setUserType($_SESSION['userType']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'admin') == 0){
            $this->setUserId($_POST['userId']);
            $update = "UPDATE user_details
            SET userStatus = 'active' 
            WHERE userId = '".$this->getUserId()."'
            ";
            $result = mysqli_query($mysqli, $update);
        }else{
            echo 'only admins can activate a user';
        }            
    }

    public function deactiveUser(){
        $this->setUserType($_SESSION['userType']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'admin') == 0){
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

    public function deleteUser($userId){
        $this->setUserType($_SESSION['userType']);
        $this->setUserId($userId);
        if(isset($_SESSION) && strcmp($this->getUserType(),'admin') == 0){
            $this->setUserId($userId);
            $table = "user_details";
            $id = NULL;
            $this->setUserType($_POST['userType']);
            if(!strcmp($this->getUserType(),'customer') == 0){
                $table = "customer";
            }else if(strcmp($this->getUserType(), 'seller' ) == 0){
                $table = "seller";
            }	
            if($table != "user_details"){
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    // Getting seller or customer ID
                    $select = "SELECT * 
                               FROM  '".$table."' x, user_details y
                               WHERE x.userId = 'y.".$this->getUserId()."'";
                    
                    $qry = mysqli_query($mysqli, $select);
                    $row = mysqli_fetch_array($qry);
                    $id = $row[0];

                    // Actual deletion of customer or seller
                    $delete1 = "DELETE
                                FROM '".$table." ' x, user_details y
                                WHERE userID = 'x.".$id."' && y.userStatus = 'inactive' 
                                ";

                    $result1 = mysqli_query($mysqli, $delete1);
                    if(mysqli_num_rows($result1) == 1){
                        echo 'Delete: Success';
                    }else{
                        echo 'Delete: Failed or Cancelled';
                    }
                }else{
                    echo 'no db connection';
                }
            }
            // Deletion from user_details
            $delete2 = "DELETE
                        FROM user_details
                        WHERE userID = '".$this->getUserId()."' && userStatus = 'inactive' 
                        ";
            $result2 = mysqli_query($mysqli, $delete2);
            if(mysqli_num_rows($result2) == 1){
                echo 'Delete: Success';
            }else{
                echo 'Delete: Failed or Cancelled';
            }
        }else{
            echo 'only admins can delete a user';
        }

        return result;
    }

    public function Login($sessionEmail, $sessionPassword){
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
          //If possible please replace query name  with sql name, plox
          $query = "SELECT user_details.userId AS userId, username, email, userType, gender, mobileNumber, dateAdded, address, firstName, middleName, lastName, birthdate 
          FROM user_details INNER JOIN customer ON customer.userId = user_details.userId 
          WHERE email = '".$sessionEmail."' AND  password = '".$sessionPassword."'";
          //echo $this->DB_TABLE.$sessionEmail.$sessionPassword;
          echo "||".$query;
          $rowcount = 0;
          if($result = mysqli_query($connection, $query)){
            //return number of result
            $rowcount=mysqli_num_rows($result);
            echo "ROWCOUNT=".$rowcount;
          } else {
            echo "Connection Error";
          }
          mysqli_close($connection);
          if($rowcount == 1){
            // header('Location: ' . "www.google.com");
            // echo "<h1>LOGGED IN!</h1>";
            //return the data from the Query
            $row = $result->fetch_assoc();
            return $row;
          }else{
            return null;
          }
        }
      }

    public function readAdmin(){
        $result = NULL;
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
        WHERE userId = '".$this->getUserId()."'
        ";
        $row = mysqli_query($mysqli, $query);
        if(mysqli_num_rows($row) == 1){        
            $result = mysqli_fetch_array($row);
        }
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
}
?>