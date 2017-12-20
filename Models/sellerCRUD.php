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
        $this->setUserType('seller');
        $this->setUserId(createUser());
        $this->setName($_POST['name']);
        $this->setDescription($_POST['description']);
        if(!isset($_SESSION)){
            $this->setAddedBy($userId);
            $this->setUserStatus('inactive');
        }else{
            $this->setAddedBy($_SESSION['userId']);
            $this->setUserStatus('active');
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

    public function updateSeller($field, $newData){
        $this->setUserType($_SESSION['userType'];
        $this->setUserId($_SESSION['userId']);
        if(isset($_SESSION)){
            if(!strcmp($this->getUserType(),'customer') == 0){
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $create = "UPDATE seller
                               SET  '".$field."' = '".$newData."'
                               WHERE customer.userId = '".$this->getUserId()."'";
                    $result = mysqli_query($connection, $create);
                    mysqli_close($connection);
                }else{
                    echo 'no db connection';
                }
            }else{
                echo 'customers are not allowed to update sellers';
            }
        }else{
            echo 'no session';
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