<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_package extends furniture{
    private $packId;
    private $item;
    private $furnitureId;

    const DB_TABLE = "furniture_package";
    const DB_TABLE_PK = "packId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/



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