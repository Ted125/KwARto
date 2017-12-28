<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_image extends furniture{
    private $furnitureImageId;
    private $image;
    private $furnitureId;

    const DB_TABLE = "furniture_image";
    const DB_TABLE_PK = "furnitureImageId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/



    /************ SETTERS AND GETTERS ************/
    
    public function getFurnitureImageId(){
        return $this->furnitureImageId;
    }

    public function setFurnitureImageId($furnitureImageId){
        $this->furnitureImageId = $furnitureImageId;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>