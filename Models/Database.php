<?php
  class Database{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "interiar_db";
    private $connection;

    public function __construct(){

    }

    public function Connect(){
      $connection = mysqli_connect($server, $username, $password, $databaseName);

    	if (!connection) {
    		return false;
    	}

      return true;
    }
  }
?>
