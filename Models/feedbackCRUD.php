<?php 
include_once("Database.php");

class feedback{
    private $feedbackId;
    private $name;
    private $title;
    private $body;
    private $email;
    private $dateAdded;

    const DB_TABLE = "feedback";
    const DB_TABLE_PK = "feedbackId";

    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS ****************/

    public function createFeedback(){
        $result = NULL;
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $this->setName($_POST['name']);
            $this->setEmail($_POST['email']);
            $this->setBody($_POST['message']);
            $create = "INSERT INTO feedback
            ( 
            name,
            email,
            body
            )
            VALUES
            ('".$this->getName()."',
            '".$this->getEmail()."',
            '".$this->getBody()."'
            )";
            
            $result = mysqli_query($connection, $create);   
        }else{
            echo 'no connection';
        }
        return $result;
    }

    public function displayFeedback($feedbackId){
        $db = new Database();
        $connection = $db->Connect();
        $this->setFeedbackId($feedbackId);
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  feedback
            WHERE feedbackId = '".$this->getFeedbackId()."'
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

    public function displayAllFeedback(){
        $db = new Database();
        $connection = $db->Connect();
        $result = null;
        if($connection){
            //$result = NULL;
            $query ="SELECT *
            FROM  feedback
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


    /************ SETTERS AND GETTERS ************/
    
    public function getFeedbackId(){
        return $this->feedbackId;
    }

    public function setFeedbackId($feedbackId){
        $this->feedbackId = $feedbackId;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getBody(){
        return $this->body;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getDateAdded(){
        return $this->dateAdded;
    }

    public function setDateAdded($dateAdded){
        $this->dateAdded = $dateAdded;
    }

}

?>