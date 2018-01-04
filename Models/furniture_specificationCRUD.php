<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_specification{
    private $specId;
    private $specification;
    private $furnitureId;

    const DB_TABLE = "furniture_specification";
    const DB_TABLE_PK = "specId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurnitureSpecification($furnitureId){
        if(isset($_SESSION)){
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setSpecification($_POST['specification']);
                    $this->setFurnitureId($furnitureId);
                    $create = "INSERT INTO furniture_specification
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
                 echo 'only sellers can add furniture specifications';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/
    
    public function getSpecId(){
        return $this->specId;
    }

    public function setUserId($specId){
        $this->specId = $specId;
    }

    public function getSpecification(){
        return $this->specification;
    }

    public function setSpecification($specification){
        $this->specification = $specification;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>