<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result  = null;
        if($connection){
        $qry = "SELECT s.name as seller_name, count(fs.stockId) as stock_sold
                FROM seller s 
                INNER JOIN furniture f ON f.sellerId = s.sellerId 
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
              echo "['".$row['seller_name']."',"; 
              echo $row['stock_sold']."],";
        }
?>