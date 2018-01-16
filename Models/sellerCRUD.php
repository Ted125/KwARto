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
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $userDetails = new user_details();
            $userType = "seller";
            $this->setUserType('seller');
            $this->setUserId($this->createUser());
            $this->setName($_POST['name']);
            $this->setDescription($_POST['description']);
            if(!isset($_SESSION)){
                $this->setAddedBy('NULL');
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
            ('".getName()."',
            '".getDescription()."',
            '".getUserId()."')
            ";

            echo $create;
            $result = mysqli_query($connection, $create);
        }else{
            echo 'no connection'
        }
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

    public function readAllSellers($rownum){
        $offset = 0;
        $offset = ($rownum - 1) * 10;
        $query = "  SELECT
                    s.sellerId
                    s.name,
                    s.description,
                    s.userId,
                    u.username,
                    u.userType,
                    u.status,
                    u.gender,
                    u.email,
                    u.mobileNumber,
                    u.image,
                    u.address
                    FROM seller s inner join user_details u on u.userId = s.userId
                    order by u.userId
                    Limit 10
                    OFFSET '".."'
                ";
        $rows = mysqli_query($mysqli, $query);
        $result = mysql_fetch_array($row);
    
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

    public function setDescription(){
        $this->description = $description;
    }
?>