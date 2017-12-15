<?

require("SQL_Connect.php");
include("Database.php");
include("userDetails.php");
  class user_details{
    private $furnitureId;
    private $name;
    private $description;
    private $length;
    private $width;
    private $height;
    private $rating;
    private $price;
    private $unit;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;
    private $modelName;
    private $discount;
    private $stockId;
    private $categoryId;
    private $sellerId;

    const DB_TABLE = "user_table";
    const DB_TABLE_PK = "userId";

    /***************** CONSTRUCTOR ****************/

    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurniture(){
        if(isset($_SESSION)){
            $result = NULL;
            $db = new Database();
            $connection = $db->Connect();
            if($connection){
                $furniture = new furniture();
                $this->setName($_POST['name']);
                $this->setDescription($_POST['description']);
                $this->setLength($_POST['length']);
                $this->setWidth($_POST['width']);
                $this->setHeight($_POST['height']);
                $this->setRating('5');
                $this->setPrice($_POST['price']);
                $this->setUnit($_POST['unit']);
                $this->setModelName($_POST['modelName']);
                $this->setDiscount('0');
                //$this->setStockId()
                $this->setCategoryId($_POST['categoryId']);
                $this->setSellerId($_SESSION['sellerId']);
                $create = "INSERT INTO furniture
                ( 
                name,
                description,
                length,
                width,
                height,
                rating,
                price,
                unit,
                modelName,
                discount,
                "/*stockId,*/"
                categoryId,
                sellerId
                )
                VALUES
                ('".$this->getDescription()."',
                '".$this->getLength()."',
                '".$this->getWidth()."',
                '".$this->getHeight()."',
                '".$this->getRating()."',
                '".$this->getPrice()."',
                '".$this->getUnit()."',
                '".$this->getModelName()."',
                '".$this->getDiscount()."',
                '"/*.$this->getStockId()*/."',
                '".$this->getCategoryId()."',
                '".$this->getSellerId()."')";

                $result = mysqli_query($connection, $create);
                
            }
        }else{
            echo 'no session';
        }

        return result;

    }

    public function updateFurniture($field, $newData){
        if(isset($_SESSION && $_SESSION['userType'] == 'seller'){
            $db = new Database();
            $connection = $db->Connect();
            if($connection){
                $this->setFurnitureId($_POST['furnitureId']);
                $create = "UPDATE furniture
                           SET  '".$field."' = '".$newData."'
                    WHERE 
                    furnitureId = '".$this->getFurnitureId()."'";
                $result = mysqli_query($connection, $create);
                mysqli_close($connection);
            }else{
                echo 'no db connection';
            }
        }else{
            echo 'no session or not a seller';
        }
    }
        
    public function deleteFurniture($furnitureId){
        $result = NULL;
        if(isset($_SESSION){
            if($this->getUserType($_SESSION['userType']) != 'customer'){
                $this->setFurnitureId($furnitureId);
                 $delete = " DELETE 
                                FROM  furniture
                                WHERE  furnitureId = '".$this->getFurnitureId()."'
                              ";
                    $result = mysqli_query($connection, $delete);
                    mysqli_close($connection);
                }else{
                    echo 'only admins and sellers can delete furniture';
                }
            }else{
                echo 'no session';
            }
            return result
        }

    public function readFurniture(){
        $this->setFurnitureId($_POST['furnitureId']); 
        $query ="SELECT
        furnitureId,
        name,
        description,
        length,
        width,
        height,
        rating,
        price,
        unit,
        modelName,
        discount,
        categoryId,
        sellerId
        FROM  furniture
        WHERE furnitureId ='".$this->getFurnitureId()."'
        ";
        $row = mysqli_query($mysqli, $query);
        $result = mysqli_fetch_array($row);

        return result;
    }

    }
    /***************** SETTERS AND GETTERS ****************/*/

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

    public function setHeight(){
        $this->height = $height;
    }

    public function getRating(){
        return $this->getRating;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice(){
        $this->price = $price;
    }

    public function getUnit(){
        return $this->unit;
    }

    public function setUnit($unit){
        $this->unit = $unit;
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
        $this->sellerId = $sellerId
    }

  }
?>