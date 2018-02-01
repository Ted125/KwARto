<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result  = null;
        if($connection){
        $qry = "SELECT f.name as furniture_name, count(fs.stockId) as stock_sold
                FROM  furniture f  
                INNER JOIN furniture_stock fs ON fs.furnitureId = f.furnitureId
                WHERE fs.status = 'sold'  
                ORDER BY stock_sold
                limit 3";
        $result = mysqli_query($connection, $qry);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row = $result->fetch_assoc()){ 
              echo "['".$row['furniture_name']."',"; 
              echo $row['stock_sold']."],";
        }
?>