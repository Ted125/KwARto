<?php
  require_once("Models/Database.php");

    $db = new Database();
    $connection = $db->Connect();
    $result = null;
    if($connection){
        $query = "SELECT count(*) as total_furniture 
                  FROM furniture 
                  ";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
        
        if($result != null){
            $row = $result->fetch_assoc();
            echo $row['total_furniture'];
        }else{
            echo 'null set recovered';
        }
    }else{
        echo 'Connection Error';
    }
    
?>
