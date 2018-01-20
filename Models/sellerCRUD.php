<?php 


    class seller extends user_details{
        private $sellerId;
        private $name;
        private $description;
        private $userId;

        const DB_TABLE = "seller";
        const DB_TABLE_PK = "sellerId";
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS *****************/

    public function createSeller(){
        include("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $userDetails = new user_details();
            $userType = "seller";
            $this->setUserId($userDetails->createUser($userType));
            $this->setName($_POST['registerName']);
            $this->setDescription($_POST['registerDesc']);
            $create = "INSERT INTO seller
            ( 
                name,
                description,
                userId
            )
            VALUES
            ('".$this->getName()."',
            '".$this->getDescription()."',
            '".$this->getUserId()."')
            ";

            echo $create;
            $result = mysqli_query($connection, $create);
        }else{
            echo 'no connection';
        }
        return $result;
    }

    public function updateSeller($field, $newData){
        $this->setUserType($_SESSION['userType']);
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

    public function readAllSellers($rownum){
    $offset = 0;
    $offset = ($rownum - 1) * 10;
    $query = "  SELECT
                    s.sellerId,
                    s.name,
                    s.description,
                    s.userId,
                    u.userType,
                    u.userStatus,
                    u.email,
                    u.mobileNumber,
                    u.image,
                    u.dateAdded,
                    u.addedBy,
                    u.userId   
                    FROM seller s inner join user_details u on u.userId = s.userId
                    order by u.userId
                    Limit 10
                    OFFSET '".$offset."'
                ";
    $rows = mysqli_query($mysqli, $query);
    $result = mysql_fetch_array($row);
    
        return $result;
    }

    public function readAllPendingSellers(){
        include_once("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            $query = "  SELECT
                        s.sellerId,
                        s.name,
                        s.description,
                        s.userId,
                        u.userType,
                        u.userStatus,
                        u.email,
                        u.mobileNumber,
                        u.image,
                        u.dateAdded,
                        u.addedBy,
                        u.userId        
                        FROM seller s inner join user_details u on u.userId = s.userId
                        where u.userStatus = 'inactive'
                    ";
            $result = mysqli_query($connection, $query);
            mysqli_close($connection);
        }
        return $result;
    }

    public function countAllPendingSellers(){
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            $query = "  SELECT count (*) AS pending_sellers  
                        FROM seller s inner join user_details u on u.userId = s.userId
                        where u.userStatus = 'inactive'
                    ";
            $result = mysqli_query($connection, $query);
            mysqli_close($connection);
        }
        return $result;
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

    public function setDescription($description){
        $this->description = $description;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

}
?>