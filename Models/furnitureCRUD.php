<?php

//require("SQL_Connect.php");
//include("Database.php");
//include("userDetails.php");
//include("furniture_imageCRUD.php");
//include("furniture_specificationCRUD.php");
//include("furniture_stockCRUD.php");
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
        if(isset($_SESSION['userType'])){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    //$furniture = new furniture();
                    $this->setName($_POST['name']);
                    $this->setDescription($_POST['description']);
                    $this->setWarrantyId($_POST['warrantyId']);
                    $this->setModel($_POST['model']);
                    $this->setColor($_POST['color']);              /* ok ra if null */
                    $this->setWeight($_POST['weight']);             /* ok ra if null */
                    $this->setWeightUnit($_POST['weightUnit']);      /* ok ra if null */
                    $this->setLength($_POST['length']);
                    $this->setWidth($_POST['width']);
                    $this->setHeight($_POST['height']);
                    $this->setSizeUnit($_POST['sizeUnit']);
                    $this->setPrice($_POST['price']);
                    $this->setModelName($_POST['modelName']);
                    $this->setDiscount($_POST['discount']);
                    $this->setSaleStart($_POST['saleStart']);
                    $this->setSaleEnd($_POST['saleEnd']);
                    $this->setCategoryId($_POST['categoryId']);
                    $this->setSellerId($_SESSION['sellerId']);
                    $this->setVersionOf($_POST['versionOf']);
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
                    saleStart,
                    saleEnd, 
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
                    '".$this->getWeightUnit()."',
                    '".$this->getLength()."',
                    '".$this->getWidth()."',
                    '".$this->getHeight()."',
                    '".$this->getSizeUnit()."',
                    '".$this->getPrice()."',
                    '".$this->getModelName()."',
                    '".$this->getDiscount()."',
                    '".$this->getCategoryId()."',
                    '".$this->getSellerId()."'
                    '".$this->getVersionOf()."'
                )";
                $result = mysqli_query($connection, $create);   
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
        furniture.furnitureId AS furnitureId,
        seller.name AS sellerName,
        furniture.name AS furnitureName,
        seller.description AS sellerDesc,
        furniture.description AS furnitureDesc,
        warrantyId,
        model,
        color,
        weight,
        weightUnit,
        length,
        width,
        height,
        sizeUnit,
        packageLength,
        packageWidth,
        packageHeight,
        packageSizeUnit,
        price,
        modelName,
        discount,
        saleStart,
        saleEnd,
        live,
        categoryId,
        furniture.sellerId AS sellerId,
        versionOf
        FROM  furniture INNER JOIN seller ON furniture.sellerId = seller.sellerId
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

public function deleteFurniture($furnitureId){
    if(isset($_SESSION)){
        $this->setUserType($_SESSION['userType']);
        if(strcmp($this->getUserType(),'seller') == 0){
            $result = NULL;
            $db = new Database();
            $connection = $db->Connect();
            if($connection){
                $this->setFurnitureId($furnitureId);
                deleteAllFurnitureImage($this->getFurnitureId());
                deleteAllFurniturePackage($this->getFurnitureId());
                deleteAllFurnitureSpecification($this->getFurnitureId());
                deleteAllFurnitureStock($this->getFurnitureId());
                $delete = "DELETE
                FROM furniture
                WHERE furnitureId = '".$this->getFurnitureId()."'
                ";
                $result = mysqli_query($mysqli, $delete);
            }else{
                echo 'no connection';
            }
        }else{
            echo 'only sellers can delete their own furniture';
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

    public function setLength(){
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