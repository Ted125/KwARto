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
                    $this->setStatus('available');
                    $this->setFurnitureId($furnitureId);
                    $this->setAddedBy($_SESSION['userId']);
                    $this->setUpdatedBy($_SESSION['userId']);
                    $create = "INSERT INTO furniture_stock
                    ( 
                    status
                    furnitureId
                    )
                    VALUES
                    ('".$this->getStatus()."',
                    '".$this->getFurnitureId()."',
                    '".$this->getAddedBy()."',
                    '".$this->getUpdatedBy()."'
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

    public function checkFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            $query = "SELECT *
            FROM furniture_stock 
            WHERE furnitureId = '".$this->getFurnitureId()."' && status = 'available' 
            ";
            $result = mysqli_query($connection, $query);
            mysqli_close($connection);
        } else {
            echo "Connection Error";
        }        
        return $result;  
    }

    public function purchaseFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = $avail = null;
        if($connection){
            $avail = checkFurnitureStock($this->getFurnitureId());   
            if($avail != null){
                $query = "UPDATE furniture_stocks 
                          SET status = 'on hold', customerId = '".$_SESSION['userId']."'
                          WHERE stockId = '".$avail[0]."' && order by dateAdded limit 1
                         ";
                $result = mysqli_query($connection, $query);
                mysqli_close($connection);
            // THIS WILL CALL A FUNCTION TO ADD TO CART I HAVENT MADE CART YET
            }else{
                echo "No available stock";
            }
        } else {
            echo "Connection Error";
        }        
        return $result;  
    }

    public function soldFurnitureStock($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = $avail = null;
        if($connection){
            $avail = checkFurnitureStock($this->getFurnitureId());   
            if($avail != null){
                $query = "UPDATE furniture_stocks 
                          SET status = 'sold'
                          WHERE furnitureId = '".$this->getFurnitureId()."' && customerId '".$_SESSION['userId']."'
                         ";
                $result = mysqli_query($connection, $query);
                mysqli_close($connection);
            // THIS WILL CALL A FUNCTION TO ADD TO CART I HAVENT MADE CART YET
            }else{
                echo "No available stock";
            }
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
            $query ="SELECT COUNT(*) AS sold_stock 
            FROM furniture_stock 
            WHERE furnitureId = '".$this->getFurnitureId()."' && status = 'available'
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
            $query ="SELECT COUNT(*) AS on_hold_stock 
            FROM furniture_stock 
            WHERE furnitureId = '".$this->getFurnitureId()."' && status = 'on_hold'
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
            $query ="SELECT COUNT(*) AS sold_stock 
            FROM furniture_stock 
            WHERE furnitureId = '".$this->getFurnitureId()."' && status = 'sold'
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