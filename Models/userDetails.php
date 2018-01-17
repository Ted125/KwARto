<?php
class user_details{
    private $userId;
    private $password;
    private $userType;
    private $userStatus;
    private $email;
    private $mobileNumber;
    private $image;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;

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

    public function createUser($userType){//Create Customer
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $this->setPassword(md5($_POST['registerPassword']));
            $this->setUserType($userType);
            $this->setUserStatus("inactive");
            $this->setImage('Resources/Images/Profile/default.jpg');
            $this->setEmail($_POST['registerEmail']);
            $this->setMobileNumber($_POST['registerPhone']);
            $this->setAddedBy('NULL');
            if(isset($_SESSION)){
               $this->setAddedBy($_SESSION['userId']);
            }
            $create = "INSERT INTO user_details
            (
            password,
            userType,
            userStatus,
            email,
            mobileNumber,
            image,
            addedBy
            )
            VALUES
            ('".$this->getPassword()."',
            '".$this->getUserType()."',
            '".$this->getUserStatus()."',
            '".$this->getEmail()."',
            '".$this->getMobileNumber()."',
            '".$this->getImage()."',
            '".$this->getAddedBy()."'
            )";
            echo $create;
            $result = mysqli_query($connection, $create);

            $this->setUserId($connection->insert_id);
            mysqli_close($connection);
            echo "<h1> after result in userDetails.php ".$this->getUserId()."</h1>";
            return $this->getUserId();
        } else {
            echo "Connection Error on User Details";
        }
    }

    public function updateUser($field, $newData){
        include("Database.php");

        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            if(strcmp($field, 'password') == 0){
                $newData = md5($newData);
            }
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
        $result = null;
        $this->setUserType($_SESSION['userType']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'admin') == 0){
            $this->setUserStatus('active');
            $this->setUserType('admin');
            $result = $this->createUser($this->getUserType());
        }else{
            echo 'no session or only admins can create other admins';
        }
        return $result;
    }

    public function activateUser($userId){
        include_once("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'admin') == 0){
                $this->setUserId($userId);
                $update = "UPDATE user_details
                        SET userStatus = 'active'
                        WHERE userId = '".$this->getUserId()."'
                        ";
                $result = mysqli_query($connection, $update);
            }else{
                echo 'no session or only admins can activate a user';
            }
        }else{
            echo 'no connection';
        }
        return $result;
    }

    public function deactivateUser($userId){
        include_once("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'admin') == 0){
                $this->setUserId($userId);
                $update = "UPDATE user_details
                        SET userStatus = 'banned'
                        WHERE userId = '".$this->getUserId()."'
                        ";
                $result = mysqli_query($connection, $update);
            }else{
                echo 'no session or only admins can deactivate a user';
            }
        }else{
            echo 'no connection';
        }
        return $result;
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

    public function login($sessionEmail, $sessionPassword){
        require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $query = "SELECT userType
                      FROM user_details
                      WHERE email = '".$sessionEmail."' AND  password = '".$sessionPassword."'";
            if($result = mysqli_query($connection, $query)){
                $rowcount=mysqli_num_rows($result);
                if($rowcount == 1){
                    $row = $result->fetch_assoc();
                    if(strcmp($row['userType'], "customer") == 0){
                        return $this->LoginCustomer($sessionEmail, $sessionPassword);
                    } else if(strcmp($row['userType'], "admin") == 0){
                        return $this->LoginAdmin($sessionEmail, $sessionPassword);
                    } else if(strcmp($row['userType'], "seller") == 0){
                        return $this->LoginSeller($sessionEmail, $sessionPassword);
                    }
                }
            }
        }
    }

    public function loginCustomer($sessionEmail, $sessionPassword){
        //require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $row = null;
        if($connection){
          //If possible please replace query name  with sql name, plox
          $query = "SELECT user_details.userId AS userId, customerId, email, userType, mobileNumber, image, dateAdded, firstName, middleName, lastName, birthdate

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
          }else{
            echo 'not found';
          }
        }
        return $row;
    }

      public function loginAdmin($sessionEmail, $sessionPassword){
        //require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $row = null;
        if($connection){
          //If possible please replace query name  with sql name, plox
          $query = "SELECT userId, email, userType, mobileNumber, dateAdded
          FROM user_details
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
          }else{
            echo 'not found';
          }
        }
        return $row;
      }

    public function loginSeller($sessionEmail, $sessionPassword){
        //require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $row = null;
        if($connection){
          //If possible please replace query name  with sql name, plox
          $query = "SELECT user_details.userId AS userId, sellerId, email, userType, mobileNumber, dateAdded, name, description
          FROM user_details INNER JOIN seller ON user_details.userId = seller.userId
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
          }else{
            echo 'not found';
          }
        }
        return $row;
      }

    public function displayAllUsers(){
        require_once("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT
            u.userId,
            c.customerId,
            u.userType,
            u.userStatus,
            u.email,
            u.mobileNumber,
            u.dateAdded,
            c.firstName,
            c.middleName,
            c.lastName,
            c.birthdate,
            u.image
            FROM  user_details u INNER JOIN customer c
            WHERE u.userId = c.userId;
            ";
            $result = mysqli_query($connection, $query);

            //$row = mysqli_fetch_array($result);
            mysqli_close($connection);
            //$row = $result->fetch_assoc();
        } else {
            echo "Connection Error";
        }
        return $result;
    }

    public function displayAllSellers(){
        require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT
            u.userId,
            u.userType,
            u.userStatus,
            u.email,
            u.mobileNumber,
            u.dateAdded,
            s.description,
            s.name
            FROM  user_details u INNER JOIN seller s
            WHERE u.userId = s.userId && u.userStatus != 'inactive';
            ";
            $result = mysqli_query($connection, $query);

            //$row = mysqli_fetch_array($result);
            mysqli_close($connection);
            //$row = $result->fetch_assoc();
        } else {
            echo "Connection Error";
        }
        return $result;
    }

    public function displayUser($userId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setUserId($userId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT
            userId,
            userType,
            userStatus,
            email,
            mobileNumber,
            dateAdded
            FROM  user_details
            WHERE userId = '".$this->getUserId()."'
            ";
            $result = mysqli_query($connection, $query);

            //$row = mysqli_fetch_array($result);
            mysqli_close($connection);
            //$row = $result->fetch_assoc();
        } else {
            echo "Connection Error";
        }
        return $result;
    }

    /***************** SETTERS AND GETTERS ****************/

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId){
        $this->userId = $userId;
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

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
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

}
?>
