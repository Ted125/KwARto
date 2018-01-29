<?php 
    class category{
        private $categoryId;
        private $name;
        private $lft;
        private $rgt;

        const DB_TABLE = "category";
        const DB_TABLE_PK = "categoryId";
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS *****************/

    public function displayAllCategory(){
        //include("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $query ="SELECT *
                FROM  category
                ";

            $result = mysqli_query($connection, $query);
        }else{
            echo 'no connection';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/

    public function getCategoryId(){
        return $this->categoryId;
    }

    public function setCategoryId($categoryId){
        $this->categoryId = $categoryId;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLft(){
        return $this->lft;
    }

    public function setLft($lft){
        $this->lft = $lft;
    }

    public function getRgt(){
        return $this->rgt;
    }

    public function setRgt($rgt){
        $this->rgt = $rgt;
    }

}
?>