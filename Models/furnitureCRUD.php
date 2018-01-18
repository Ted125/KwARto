<?php

//require("SQL_Connect.php");
//include("Database.php");
include("userDetails.php");
//include("furniture_imageCRUD.php");
//include("furniture_specificationCRUD.php");
include("furniture_stockCRUD.php");
//include("furniture_packageCRUD.php");

class furniture{
    private $furnitureId;
    private $name;
    private $description;
    private $warrantyId;
    private $model;
    private $color;
    private $weight;
    private $weightUnit;
    private $length;
    private $width;
    private $height;
    private $sizeUnit;
    private $packageLength;
    private $packageWidth;
    private $packageHeight;
    private $packageSizeUnit;
    private $price;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $modelName;
    private $discount;
    private $saleStart;
    private $saleEnd;
    private $live;
    private $status;
    private $categoryId;
    private $sellerId;
    private $versionOf;

    const DB_TABLE = "furniture";
    const DB_TABLE_PK = "furnitureId";

    /***************** CONSTRUCTOR ****************/

    public function __construct(){

    }

    /***************** FUNCTIONS ****************/
    
    public function createFurniture(){
        include("Database.php");
        if(isset($_SESSION['userType'])){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setName($_POST['newName']);
                    $this->setDescription($_POST['newDesc']);
                    $this->setWarrantyId($_POST['newWar']);
                    $this->setModel($_POST['newModel']);
                    $this->setColor($_POST['newColor']);              /* ok ra if null */
                    $this->setWeight($_POST['newWeight']);             /* ok ra if null */
                    $this->setWeightUnit($_POST['newWeightUnit']);      /* ok ra if null */
                    $this->setLength($_POST['newLength']);
                    $this->setWidth($_POST['newWidth']);
                    $this->setHeight($_POST['newHeight']);
                    $this->setSizeUnit($_POST['newSizeUnit']);
                    $this->setPrice($_POST['newPrice']);
                    $this->setModelName($_POST['newModelName']);
                    $this->setDiscount($_POST['newDiscount']);
                    $this->setCategoryId($_POST['newCategoryId']);
                    $this->setSellerId($_POST['newSellerId']);
                    $this->setVersionOf($_POST['newVersionOf']);
                    $create = "INSERT INTO furniture
                    ( 
                    name,
                    description,
                    warrantyId,
                    model,
                    color,
                    weight,
                    weightUnit,
                    length,
                    width,
                    height,
                    sizeUnit,
                    price,
                    modelName,
                    discount,
                    categoryId,
                    sellerId,
                    versionOf
                    )
                    VALUES
                    ('".$this->getName()."',
                    '".$this->getDescription()."',
                    '".$this->getWarrantyId()."',
                    '".$this->getModel()."',
                    '".$this->getColor()."',
                    '".$this->getWeight()."',
                    '".$this->getWeightUnit()."',
                    '".$this->getLength()."',
                    '".$this->getWidth()."',
                    '".$this->getHeight()."',
                    '".$this->getSizeUnit()."',
                    '".$this->getPrice()."',
                    '".$this->getModelName()."',
                    '".$this->getDiscount()."',
                    '".$this->getCategoryId()."',
                    '".$this->getSellerId()."',
                    '".$this->getVersionOf()."'
                )";
                echo $create;
                $result = mysqli_query($connection, $create);   

                $this->setFurnitureId($connection->insert_id);
                mysqli_close($connection);
                echo "<h1> after result in userDetails.php ".$this->getFurnitureId()."</h1>";
                return $this->getFurnitureId();
                echo "hello";
                }
            }else{
            echo 'only sellers can add furniture';
        }
    }else{
        echo 'no session found';
        }
    return $result;
    }

    public function displayFurniture($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnitureId);
        $result = null;
        if($connection){
                //$result = NULL;
            $query ="SELECT *
            FROM  furniture
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

    public function displayAllFurnitures(){
        require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
                //$result = NULL;
            $query ="SELECT
            f.furnitureId AS furnitureId,
            s.name AS sellerName,
            f.name AS furnitureName,
            f.description AS furnitureDesc,
            w.name AS warrantyName,
            f.model,
            f.color,
            f.weight,
            f.weightUnit,
            f.length,
            f.width,
            f.height,
            f.sizeUnit,
            f.packageLength,
            f.packageWidth,
            f.packageHeight,
            f.packageSizeUnit,
            f.price,
            f.modelName,
            f.discount,
            f.saleStart,
            f.saleEnd,
            f.dateAdded AS dateAddedFurniture,
            f.dateUpdated AS dateUpdatedFurniture,
            f.live,
            f.status,
            c.name AS categoryName,
            f.sellerId AS sellerId,
            f.versionOf,
            fi.image AS thumbnailPic
            FROM  furniture f 
            INNER JOIN seller s ON f.sellerId = s.sellerId
            INNER JOIN category c ON f.categoryId = c.categoryId 
            INNER JOIN warranty w ON w.warrantyId = f.warrantyId
            INNER JOIN furniture_image fi ON fi.furnitureId = f.furnitureId AND fi.thumbnail = '1'
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

    public function displayAllSellerFurnitures(){
        require("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
                //$result = NULL;
            $query ="SELECT distinct 
                        f.furnitureId AS furnitureId, 
                        f.name AS furnitureName, 
                        f.description AS furnitureDesc, 
                        f.model, 
                        f.color, 
                        f.weight, 
                        f.weightUnit, 
                        f.length, 
                        f.width, 
                        f.height, 
                        f.sizeUnit, 
                        f.packageLength, 
                        f.packageWidth, 
                        f.packageHeight, 
                        f.packageSizeUnit, 
                        f.price, 
                        f.modelName, 
                        f.discount, 
                        f.saleStart, 
                        f.saleEnd, 
                        f.live, 
                        f.status, 
                        f.sellerId AS sellerId, 
                        f.versionOf 
                        FROM furniture f INNER JOIN seller s 
                        WHERE f.sellerId = ".$_SESSION['sellerId']."

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

    public function activateFurniture($furnitureId){
        require("Database.php");
        if(isset($_SESSION['userType'])){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $query = "UPDATE furniture
                    SET live = '1'
                    WHERE furnitureId = '".$this->getFurnitureId()."'
                    ";
                    $result = mysqli_query($connection, $query);

                    return $result;
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only sellers can activate their own furniture';
            }
        }else{
            echo 'no session';
        }
    return null;
    }

    public function deactivateFurniture($furnitureId){
        require("Database.php");
        if(isset($_SESSION['userType'])){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $query = "UPDATE furniture
                    SET live = '0'
                    WHERE furnitureId = '".$this->getFurnitureId()."'
                    ";
                    $result = mysqli_query($connection, $query);

                    return $result;
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only sellers can activate their own furniture';
            }
        }else{
            echo 'no session';
        }
    return null;
    }

    public function banFurniture($furnitureId){
        require("Database.php");
        if(isset($_SESSION)){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'admin') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $query = "UPDATE furniture
                    SET status = '0', live = '0'
                    WHERE furnitureId = '".$this->getFurnitureId()."'
                    ";
                    $result = mysqli_query($connection, $query);
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only admins can ban furniture';
            }
        }else{
            echo 'no session';
        }
        return $result;
    }   

    public function unbanFurniture($furnitureId){
        require("Database.php");
        if(isset($_SESSION)){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'admin') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $query = "UPDATE furniture
                    SET status = '1'
                    WHERE furnitureId = '".$this->getFurnitureId()."'
                    ";
                    $result = mysqli_query($connection, $query);
                }else{
                    echo 'no connection';
                }
            }else{
                echo 'only admins can unban furniture';
            }
        }else{
            echo 'no session';
        }
        return $result;
    }

    /* IN PROGRESS SELECT THING
    SELECT *
    FROM furniture a
    JOIN furniture_image b ON a.furnitureId = a.furnitureId 
    JOIN furniture_package c ON c.furnitureId = a.furnitureId
    JOIN furniture_specification d  ON d.furnitureId = a.furnitureId
    JOIN furniture_stock e ON e.furnitureId = a.furnitureId
    JOIN warranty f ON f.warrantyId = a.warrantyId
    WHERE a.furnitureId = 1;
    */

    /***************** SETTERS AND GETTERS ****************/

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
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

    public function getWarrantyId(){
        return $this->warrantyId;
    }

    public function setWarrantyId($warrantyId){
        $this->warrantyId = $warrantyId;
    }

    public function getModel(){
        return $this->model;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getWeightUnit(){
        return $this->weightUnit;
    }

    public function setWeightUnit($weightUnit){
        $this->weightUnit = $weightUnit;
    }

    public function getLength(){
        return $this->length;
    }

    public function setLength($length){
        $this->length = $length;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setWidth($width){
        $this->width = $width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getSizeUnit(){
        return $this->sizeUnit;
    }

    public function setSizeUnit($sizeUnit){
        $this->sizeUnit = $sizeUnit;
    }

    public function getPackageLength(){
        return $this->packageLength;
    }

    public function setPackageLength($packageLength){
        $this->packageLength = $packageLength;
    }

    public function getPackageWidth(){
        return $this->packageWidth;
    }

    public function setPackageWidth($packageWidth){
        $this->packageWidth = $packageWidth;
    }

    public function getPackageHeight(){
        return $this->packageHeight;
    }

    public function setPackageHeight($packageHeight){
        $this->packageHeight = $packageHeight;
    }

    public function getPackageSizeUnit(){
        return $this->packageSizeUnit;
    }

    public function setPackageSizeUnit($packageSizeUnit){
        $this->packageSizeUnit = $packageSizeUnit;
    }    

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
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

    public function getModelName(){
        return $this->modelName;
    }

    public function setModelName($modelName){
        $this->modelName = $modelName;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount($discount){
        $this->discount = $discount;
    }

    public function getSaleStart(){
        return $this->saleStart;
    }

    public function setSaleStart($saleStart){
        $this->saleStart = $saleStart;
    }

    public function getSaleEnd(){
        return $this->saleEnd;
    }

    public function setSaleEnd($saleEnd){
        $this->saleEnd = $saleEnd;
    }

    public function getLive(){
        return $this->live;
    }

    public function setLive($live){
        $this->live = $live;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($live){
        $this->status = $status;
    }

    public function getStockId(){
        return $this->stockId;
    }

    public function setStockId($stockId){
        $this->stockId = $stockId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }

    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }

    public function getSellerId(){
        return $this->sellerId;
    }

    public function setSellerId($sellerId){
        $this->sellerId = $sellerId;
    }

    public function getVersionOf(){
        return $this->versionOf;
    }

    public function setVersionOf($versionOf){
        $this->versionOf = $versionOf;
    }

}
?>