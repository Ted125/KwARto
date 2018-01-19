<?php 
// require("SQL_Connect.php");
// include("Database.php");
// include("userDetails.php");

class furniture_image{
    private $furnitureImageId;
    private $image;
    private $furnitureId;
    private $dateAdded;
    private $dateUpdated;
    private $addedBy;
    private $updatedBy;

    const DB_TABLE = "furniture_image";
    const DB_TABLE_PK = "furnitureImageId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){
        
    }

    /***************** FUNCTIONS ****************/

    public function createFurnitureImage($furnId){
        if(isset($_SESSION['userType'])){
            $user = new user_details();
            $user->setUserType($_SESSION['userType']);
            if(strcmp($user->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnId);
                    $ctr = 0;
                    $result = mysqli_query($connection, "SELECT COUNT(*) FROM furniture_image WHERE furnitureId = '".$this->getFurnitureId()."'");
                    $num_rows = mysqli_num_rows($result);
                    $ctr = $num_rows;
                    $this->setImage($ctr.".jpg");
                    if($ctr == 1){
                        $this->setThumbnail('1');
                    } else {
                        $this->setThumbnail('0');
                    }
                    
                    
                    $this->setAddedBy($_SESSION['sellerId']);
                    $this->setUpdatedBy($_SESSION['sellerId']);
                    $create = "INSERT INTO furniture_image
                    ( 
                    image,
                    thumbnail,
                    addedBy,
                    updatedBy,
                    furnitureId
                    )
                    VALUES
                    ('".$this->getImage()."',
                    '".$this->getThumbnail()."',
                    '".$this->getAddedBy()."',
                    '".$this->getUpdatedBy()."',
                    '".$this->getFurnitureId()."'
                    )";
                    
                    $result = mysqli_query($connection, $create);   
                }
            }else{
                 echo 'only sellers can add furniture image';
            }
        }else{
            echo 'no session found';
        }
        return $result;
    }

    public function displayFurnitureImage($furnitureId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFurnitureId($furnituredId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  furniture_image
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

    public function deleteFurnitureImage($furnituredId){}

    public function deleteAllFurnitureImage($furnitureId){
        if(isset($_SESSION)){
            $this->setUserType($_SESSION['userType']);
            if(strcmp($this->getUserType(),'seller') == 0){
                $result = NULL;
                $db = new Database();
                $connection = $db->Connect();
                if($connection){
                    $this->setFurnitureId($furnitureId);
                    $delete = "DELETE
                               FROM furniture_image
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

    public function countAllImages($link){
        $fi = new FilesystemIterator($link, FilesystemIterator::SKIP_DOTS);
        printf("There were %d Files", iterator_count($fi));

        return iterator_count($fi)+1;
    }
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

    public function getThumbnail(){
        return $this->thumbnail;
    }

    public function setThumbnail($thumbnail){
        $this->thumbnail = $thumbnail;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
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