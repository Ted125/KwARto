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

    public function createWarrantyId(){
        if(isset($_SESSION)){
            if(strcmp($this->getUserType(),'admin') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setName($_POST['name']);
                    $this->setDescription($_POST['description']);
                    $this->setAddedBy($_SESSION['userId']);
                    $this->setUpdatedBy($_SESSION['userId']);
                    $create = "INSERT INTO warranty
                    ( 
                    name,
                    description,
                    addedBy,
                    updatedBy
                    )
                    VALUES
                    ('".$this->getName()."',
                    '".$this->getDescription()."',
                    '".$this->getAddedBy()."',
                    '".$this->getUpdatedBy()."'
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only admins can add warranties';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function displayWarranty($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  furniture_package
            WHERE furnitureId = '".$this->getFurnitureId()."'
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

    public function deleteWarranty($warrantyId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'admin') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setWarrantyId($warrantyId);
                    $delete = "DELETE
                               FROM warranty
                               WHERE warrantyId = '".$this->getWarrantyId()."'
                              ";
                    $result = mysqli_query($mysqli, $delete);
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only admins can delete warranties';
            }
        }else{
            echo 'no session';
        }
        return $result;
    }

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