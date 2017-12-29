<?php 
require("SQL_Connect.php");
include("Database.php");

class warranty{
    private $warrantyId;
    private $name;
    private $description;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;

    const DB_TABLE = "warranty";
    const DB_TABLE_PK = "warrantyId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        parent::__construct();
    }

    /***************** FUNCTIONS ****************/



    /************ SETTERS AND GETTERS ************/
    
    public function getWarrantyId(){
        return $this->warrantyId;
    }

    public function setWarrantyId($warrantyId){
        $this->warrantyId = $warrantyId;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
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

}

?>