<?php require_once("SQL_Connect.php");;
    
    Connect();

    class seller extends user_details{
        private $sellerId;
        private $name;
        private $description;

        const DB_TABLE = "seller";
        const DB_TABLE_PK = "sellerId";
    }
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS *****************/

    public function createSeller($userId){
        setUserType('seller');
        setUserId(createUser());
        setName($_POST['name']);
        setDescription($_POST['description']);
        if(!isset($_SESSION)){
            setAddedBy($userId);
            setUserStatus('inactive');
        }else{
            setAddedBy($_SESSION['userId']);
            setUserStatus('active');
        }
        $create = "INSERT INTO seller
        ( 
            sellerId,
            `name`,
            `description`,
            userId
        )
        VALUES
        ('" "','".getName()."','".getDescription()."','".getUserId()."')";

        return result;
    }

    public function updateSeller(){
        if(isset($_SESSION)){
            if(getUserType($_SESSION['userType']) == 'seller'){
                setSellerId($_SESSION['sellerId'];
                setUserId($_SESSION['userId']);
                setUpdatedBy($_SESSION['userId']);
            }else if(getUserType($_SESSION['userType']) == 'admin'){
                setCustomerId($_POST['sellerId'];
                setUserId($_POST['userId']);
                setUpdatedBy($_SESSION['userId'])
            }    
            /*SELLER DETAILS*/
            setName($_POST['name']);
            setDescription($_POST['description']);
            /*USER DETAILS*/
            setPassword($_POST['password']);
            setGender($_POST['gender']);
            setEmail($_POST['email']);
            setMobileNumber($_POST['mobileNumber']);
            setAddress($_POST['address']);

            $update1 = "UPDATE customer
            SET
                firstName = '".getName()."',
                description = '".getDescription()."'
            WHERE sellerId = '".getSellerId()."'";	
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
            echo "no session";
        }
    }

    /************ SETTERS AND GETTERS ************/

    public function getSellerId(){
        return $this->sellerId;
    }

    public function setSellerId($sellerId){
        $this->sellerId = $sellerId;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription(){
        $this->description = $description;
    }
?>