<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_specification extends furniture{
    private $specId;
    private $specification;
    private $furnitureId;

    const DB_TABLE = "furniture_specification";
    const DB_TABLE_PK = "specId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/



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