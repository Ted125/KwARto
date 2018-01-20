<?php
  require_once("Models/Database.php");

    $db = new Database();
    $connection = $db->Connect();
    $result = null;
    if($connection){
        $query = "SELECT count(*) as reviews
                  FROM review 
                  ";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
        
        if($result != null){
            $row = $result->fetch_assoc();
            echo $row['reviews'];
        }else{
            echo 'null set recovered';
        }
    }else{
        echo 'Connection Error';
    }
    
?>