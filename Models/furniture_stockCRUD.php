<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_stock{
    private $stockId;
    private $status;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $furnitureId;

    const DB_TABLE = "furniture_stock";
    const DB_TABLE_PK = "stockId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/
    
    public function createFurnitureStock($furnitureId){
        if(isset($_SESSION)){
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setStockId('available');
                    $this->setFurnitureId($furnitureId);
                    $create = "INSERT INTO furniture_stock
                    ( 
                    status
                    furnitureId
                    )
                    VALUES
                    ('".$this->getStatus()."',
                    '".$this->getFurnitureId()."'
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only sellers can add furniture stock';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function boughtFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            $query = "SELECT stockId, status, dateAdded, addedBy, updatedBy, dateUpdated, furnitureId 
            FROM furniture_stock x, furniture y
            WHERE x.furnitureId = 'y.".$this->getFurnitureId()."' && x.status = 'available'  
            ";
            $result = mysqli_query($connection, $query);
            mysqli_close($connection);
            //$row = $result->fetch_assoc();
        } else {
            echo "Connection Error";
        }        
        return $result;  
    }

    public function displayAvailableFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            $query ="SELECT COUNT (*) AS 'Available Stock'
            FROM  furniture_stock x, furniture y
            WHERE x.furnitureId = 'y.".$this->getFurnitureId()."' && x.status = 'available'  
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

    public function displayOnHoldFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            $query ="SELECT COUNT (*) AS 'On Hold Stock'
            FROM  furniture_stock x, furniture y
            WHERE x.furnitureId = 'y.".$this->getFurnitureId()."' && x.status = 'on_hold'  
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

    public function displaySoldFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            $query ="SELECT COUNT (*) AS 'Sold Stock'
            FROM  furniture_stock x, furniture y
            WHERE x.furnitureId = 'y.".$this->getFurnitureId()."' && x.status = 'sold'  
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
    	

    /************ SETTERS AND GETTERS ************/
    
    public function getStockId(){
        return $this->stockId;
    }

    public function setStockId($stockId){
        $this->stockId = $stockId;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
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

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}
?>