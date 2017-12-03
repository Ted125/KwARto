<?php require_once("Database.php");;
    
    class customer extends user_details{
        private $customerId;
        private $firstName;
        private $middleName;
        private $lastName;
        private $birthdate;

        const DB_TABLE = "customer";
        const DB_TABLE_PK = "customerId";
    }
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS ****************/

    public function createCustomer($userId){
        setUserType('customer');
        setUserId(createUser());
        setFirstName($_POST['firstName']);
        setMiddleName($_POST['middleName']);
        setLastName($_POST['lastName']);
        setBirthdate($_POST['birthdate']);
        if(!isset($_SESSION)){
            setAddedBy($userId);
            setUserStatus('inactive');
        }else{
            setAddedBy($_SESSION['userId']);
            setUserStatus('active');
        }
        $create = "INSERT INTO customer
        ( 
            customerId,
            firstName,
            middleName,
            lastName,
            birthdate,
            userId
        )
        VALUES
        ('" "','".getFirstName()."','".getMiddleName()."','".getLastName()."','".getBirthdate()."','".getUserId()."')";
    
        $result = mysqli_query($mysqli, $create);

        return result;
    }

    public function updateCustomer(){
        if(isset($_SESSION)){
            if(getUserType($_SESSION['userType']) == 'customer'){
                setCustomerId($_SESSION['customerId'];
                setUserId($_SESSION['userId']);
            }else if(getUserType($_SESSION['userType']) == 'admin'){
                setCustomerId($_POST['customerId'];
                setUserId($_POST['userId']);
            }    
            /*CUSTOMER DETAILS*/
            setFirstName($_POST['firstName']);
            setMiddleName($_POST['middleName']);
            setLastName($_POST['lastName']);
            setBirthdate($_POST['birthdate']);
            /*USER DETAILS*/
            setPassword($_POST['password']);
            setGender($_POST['gender']);
            setEmail($_POST['email']);
            setMobileNumber($_POST['mobileNumber']);
            setAddress($_POST['address']);
            setUpdatedBy($_SESSION['userId']);

            /* UPDATE CUSTOMER TABLE */
            
            $update1 = "UPDATE customer
                        SET
                            firstName = '".getFirstName()."',
                            middleName = '".getMiddleName()."',
                            lastName = '".getLastName()."',
                            birthdate = '".getBirthdate()."'
                        WHERE customerId = '".getCustomerId()."'";	
            $result1 = mysqli_query($mysqli, $update);
            
            /* UPDATE USER_DETAILS TABLE */
        
            $update2 = "UPDATE user_details
                        SET
                           `password` = '".getPassword()."',
                            gender = '".getGender()."',
                            email = '".getEmail()."',
                            mobileNumber = '".getMobileNumber()."',
                            address = '".getAddress()."',
                            updatedBy = '".getUpdatedBy()."',
                       WHERE userID = '".getUserId()."'";
            $result2 = mysqli_query($mysqli, $update);    
        }else{
            echo "no session"
        }
    }

    public function readUser(){
        $query = mysqli_query($mysqli, "SELECT userID, userStatus, course, userType, 
                                             firstName, lastName, middleInitial, userPic, email, birthdate,
                                        FROM  user_table
                                        WHERE userID='".$userID."'
                                       ");
        $result = mysqli_fetch_array($query);
    }

    public function readCustomer(){
        setCustomerId($_POST['customerId']); 
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
                 WHERE c.customerId ='".getCustomerId()."' && c.userId = u.userId
                ");
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

?>