<?php
  require_once("Database.php");

  class User extends Database{
    private $userID;
    private $userName;
    private $isActivated;
    private $userPassword;
    private $userType;
    private $firstName;
    private $lastName;
    private $middleInitial;
    private $userPic;
    private $email;
    private $birthdate;
    private $addedTimestamp;
    private $updatedTimestamp;
    private $addedBy;

    const DB_TABLE = "user_table";
    const DB_TABLE_PK = "userID";

    public function __construct(){
      parent::__construct();
    }

    public function Login(){
      if($this->Connect()){
        $query = "SELECT * FROM " . DB_TABLE . " WHERE userName = " . $userName ." AND userPassword = " . $userPassword;
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
          header('Location: ' . "www.google.com");
          echo "<h1>LOGGED IN!</h1>";
        }else{
          echo "USER NOT FOUND!";
        }

        return result;
      }
    }
  }
?>
