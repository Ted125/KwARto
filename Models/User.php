<?php
  require_once("Database.php");

  class User extends Database{
    private $userID;
    private $userName;
    private $userStatus;
    private $userPassword;
    private $userType;
    private $firstName;
    private $lastName;
    private $middleInitial;
    private $userPic;
    private $email;
    private $birthdate;
    private $addedTimeStamp;
    private $updatedTimestamp;
    private $addedBy;

    const DB_TABLE = "user_details";
    const DB_TABLE_PK = "userID";

    public function __construct(){
      parent::__construct();
    }

    public function Login($sessionEmail, $sessionPassword){
      $connection = $this->Connect();
      if($connection){

        //If possible please replace query name  with sql name, plox
        $query = "SELECT user_details.userId AS userId, username, email, userType, gender, mobileNumber, dateAdded, address, firstName, middleName, lastName, birthdate FROM user_details INNER JOIN customer ON customer.userId = user_details.userId WHERE email = '".$sessionEmail."' AND  password = '".$sessionPassword."'";

        //echo $this->DB_TABLE.$sessionEmail.$sessionPassword;
        echo "||".$query;
        $rowcount = 0;
        if($result = mysqli_query($connection, $query)){
          //return number of result
          $rowcount=mysqli_num_rows($result);
          echo "ROWCOUNT=".$rowcount;
        } else {
          echo "Connection Error";
        }
        
        mysqli_close($connection);
        if($rowcount == 1){
          // header('Location: ' . "www.google.com");
          // echo "<h1>LOGGED IN!</h1>";
          //return the data from the Query
          $row = $result->fetch_assoc();
          return $row;
        }else{
          return null;
        }

      }
    }
  }
?>
