<?php 
require("SQL_Connect.php");
include("Database.php");

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

    public function createFurniturePackage($furnitureId){
        if(isset($_SESSION)){
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setItem($_POST['item']);
                    $this->setFurnitureId($furnitureId);
                    $create = "INSERT INTO furniture_package
                    ( 
                    status
                    furnitureId
                    )
                    VALUES
                    ('".$this->getSpecification()."',
                    '".$this->getFurnitureId()."',
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