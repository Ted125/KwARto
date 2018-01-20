<?php
  require_once("Models/Database.php");

    $db = new Database();
    $connection = $db->Connect();
    $result = null;
    if($connection){
        $query = "SELECT count(*) as pend_trans 
                  FROM customer_order 
                  WHERE paid = 0  OR state = 'pending'";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);
        
        if($result != null){
            $row = $result->fetch_assoc();
            echo $row['pend_trans'];
        }else{
            echo 'null set recovered';
        }
    }else{
        echo 'Connection Error';
    }
    
?>
