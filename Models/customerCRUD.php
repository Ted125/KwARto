<?php 
class customer extends user_details{
    private $customerId;
    private $firstName;
    private $middleName;
    private $lastName;
    private $birthdate;
    private $userId;

    const DB_TABLE = "customer";
    const DB_TABLE_PK = "customerId";
    
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/
    
    public function debug($field, $newData){
        $create = "UPDATE customer
                SET 
                ".$field." = ".$newData."
                WHERE 
                customer.userId = ".$_SESSION['userId']."";
        echo $create;
        /*sample code here*/
    }

    public function createCustomer(){
        include("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $userDetails = new user_details();
            $userType = "customer";
            $this->setUserId($userDetails->createUser($userType));
            $this->setFirstName($_POST["registerFName"]);
            $this->setMiddleName($_POST["registerMName"]);
            $this->setLastName($_POST["registerLName"]);
            $this->setBirthdate($_POST["registerBDay"]);
            $create = "INSERT INTO customer
            ( 
            firstName,
            middleName,
            lastName,
            birthdate,
            userId
            )
            VALUES
            ('".$this->getFirstName()."',
            '".$this->getMiddleName()."',
            '".$this->getLastName()."',
            '".$this->getBirthdate()."',
            '".$this->getUserId()."'
            )";
            
            echo $create;
            $result = mysqli_query($connection, $create);
            
            if($result){
                return result;
            } else {
                return null;
            }
        } else{
            echo "Connection Error on Customer";
        }
    }

    public function updateCustomer($field, $newData){
        include("Database.php");
        
        $this->setUserType($_SESSION['userType']);
        $this->setUserId($_SESSION['userId']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'customer') == 0){
            $db = new Database();
            $connection = $db->Connect();
            if($connection){

                $create = "UPDATE customer
                           SET  '".$field."' = '".$newData."'
                           WHERE customer.userId = ".$this->getUserId()."";
                $result = mysqli_query($connection, $create);
                mysqli_close($connection);
            }else{
                echo 'no db connection';
            }
        }else{
            echo 'no session';
        }
    }

    public function updateCustomerMult($fName, $lName, $bDay){
        include("Database.php");
        
        $this->setUserType($_SESSION['userType']);
        $this->setUserId($_SESSION['userId']);
        if(isset($_SESSION) && strcmp($this->getUserType(),'customer') == 0){
            $db = new Database();
            $connection = $db->Connect();
            if($connection){

                $create = "UPDATE customer
                           SET  firstName = '".$fName."', lastName = '".$lName."', birthdate = '".$bDay."'
                           WHERE customer.userId = ".$this->getUserId()."";
                $result = mysqli_query($connection, $create);
                echo $create." ";
                echo $result;
                mysqli_close($connection);
                return $result;
            }else{
                echo 'no db connection';
                return null;
            }
        }else{
            echo 'no session';
            return null;
        }
    }

    public function readCustomer(){
        $this->setCustomerId($_POST['customerId']); 
        $query ="SELECT
        c.firstName,
        c.middleName,
        c.lastName,
        c.birthdate,
        u.username,
        u.userType,
        u.status,
        u.gender,
        u.email,
        u.mobileNumber,
        u.image,
        u.address
        FROM  customer c, user_details u
        WHERE c.customerId ='".$this->getCustomerId()."' && c.userId = u.userId
        ";
        $row = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_array($row);

        return result;
    }

    /***************** SETTERS AND GETTERS ****************/


    public function getCustomerId(){
        return $this->customerId;
    }

    public function setCustomerId($customerId){
        $this->customerId = $customerId;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getMiddleName(){
        return $this->middleName;
    }

    public function setMiddleName($middleName){
        $this->middleName = $middleName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }
}
?>