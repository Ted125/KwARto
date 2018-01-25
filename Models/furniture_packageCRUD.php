<?php 

class furniture_package{
    private $packId;
    private $item;
    private $furnitureId;

    const DB_TABLE = "furniture_package";
    const DB_TABLE_PK = "packId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurniturePackage($package ,$furnitureId){
        //include("Database.php");
        if(isset($_SESSION)){
            $user = new user_details;
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'seller') == 0){
                echo $package."<br>";
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setItem($package);
                    $this->setFurnitureId($furnitureId);
                    $create = "INSERT INTO furniture_package
                    ( 
                    item,
                    furnitureId
                    )
                    VALUES
                    ('".$this->getItem()."',
                    '".$this->getFurnitureId()."'
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only sellers can add furniture items to the package';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function displayFurniturePackage($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  furniture_package
            WHERE furnitureId = '".$this->getFurnitureId()."'
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

    public function deleteAllFurniturePackage($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $delete = "DELETE
                               FROM furniture_package
                               WHERE furnitureId = '".$this->getFurnitureId()."'
                              ";
                    $result = mysqli_query($mysqli, $delete);
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only sellers can delete their own furniture';
            }
        }else{
            echo 'no session';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/
    
    public function getPackId(){
        return $this->packId;
    }

    public function setFurnitureImageId($packId){
        $this->packId = $packId;
    }

    public function getItem(){
        return $this->item;
    }

    public function setItem($item){
        $this->item = $item;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>