<?php 
    class question{
        private $questionId;
        private $question;
        private $answer;
        private $active;
        private $datePosted;
        private $dateAnswered;
        private $customerId;
        private $furnitureId;

        const DB_TABLE = "question";
        const DB_TABLE_PK = "questionId";
    
    /***************** CONSTRUCTOR ****************/
    
    public function __construct(){

    }

    /***************** FUNCTIONS *****************/

    public function displayAllSellerQuestion(){
        include("Database.php");
        $db = new Database();
        $connection = $db->Connect();
        if($connection){
            $query ="SELECT 
                        questionId,
                        question,
                        answer,
                        active,
                        datePosted,
                        dateAnswered,
                        question.customerId AS customerId,
                        question.furnitureId AS furnitureId,
                        sellerId,
                        name,
                        firstName,
                        middleName,
                        lastName
                        FROM  question
                        INNER JOIN furniture ON question.furnitureId = furniture.furnitureId
                        INNER JOIN customer ON question.customerId = customer.customerId
                        WHERE sellerId = ".$_SESSION['sellerId']."
                ";

            $result = mysqli_query($connection, $query);
        }else{
            echo 'no connection';
        }
        return $result;
    }

    /************ SETTERS AND GETTERS ************/
        
    public function getQuestionId(){
        return $this->questionId;
    }

    public function setQuestionId($questionId){
        $this->questionId = $questionId;
    }

    public function getQuestion(){
        return $this->question;
    }

    public function setQuestion($question){
        $this->question = $question;
    }

    public function getAnswer(){
        return $this->answer;
    }

    public function setAnswer($answer){
        $this->answer = $answer;
    }

    public function getActive(){
        return $this->active;
    }

    public function setActive($active){
        $this->active = $active;
    }

    public function getDatePosted(){
        return $this->datePosted;
    }

    public function setDatePosted($datePosted){
        $this->datePosted = $datePosted;
    }

    public function getDateAnswered(){
        return $this->dateAnswered;
    }

    public function setDateAnswered($dateAnswered){
        $this->dateAnswered = $dateAnswered;
    }

    public function getCustomerId(){
        return $this->customerId;
    }

    public function setCustomerId($customerId){
        $this->customerId = $customerId;
    }

    public function getFurnitureId(){
        return $this->furnitureId;
    }

    public function setFurnitureId($furnitureId){
        $this->furnitureId = $furnitureId;
    }
}
?>