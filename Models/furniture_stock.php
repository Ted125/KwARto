<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_stock extends furniture{
    private $stockId;
    private $status;
    private $furnitureId;

    const DB_TABLE = "furniture_image";
    const DB_TABLE_PK = "furnitureImageId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/



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

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>