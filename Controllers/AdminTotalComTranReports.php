<?php
  require_once("Models/Database.php");

    $db = new Database();
    $connection = $db->Connect();
    $result = null;
    if($connection){
        $query = "SELECT count(*) as complete_trans
                  FROM customer_order 
                  WHERE state = 'delivered' AND paid = 1
                  ";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
        
        if($result != null){
            $row = $result->fetch_assoc();
            echo $row['complete_trans'];
        }else{
            echo 'null set recovered';
        }
    }else{
        echo 'Connection Error';
    }
    
?>