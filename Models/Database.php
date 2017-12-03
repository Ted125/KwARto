<?php
  class Database{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "kwarto_db";
    private $connection;

    public function __construct(){

    }

    public function Connect(){
      $connection = mysqli_connect($this->server, $this->username, $this->password, $this->databaseName);

    	// if (!$connection) {
    	// 	return false;
    	// }

     //  return true;
      return $connection;
    }
  }
?>
