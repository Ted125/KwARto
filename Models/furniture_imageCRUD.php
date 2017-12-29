<?php 
require("SQL_Connect.php");
include("Database.php");

class furniture_image{
    private $furnitureImageId;
    private $image;
    private $furnitureId;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $furnitureId;

    const DB_TABLE = "furniture_image";
    const DB_TABLE_PK = "furnitureImageId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
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

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }

}

?>