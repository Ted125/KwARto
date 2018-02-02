<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result = null;
        if($connection){

        $qry = "SELECT DISTINCT f.name as furnitureName, count(fs.stockId) as furniture_sold
                FROM seller s
                INNER JOIN furniture f ON f.sellerId = s.sellerId
                INNER JOIN furniture_stock fs ON fs.furnitureId = f.furnitureId
                WHERE s.sellerId = 1 AND fs.status = 'sold' 
                GROUP BY f.name
                ORDER BY furniture_sold desc";
        $result = mysqli_query($connection, $qry);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row = $result->fetch_assoc()){ 
              echo "['".$row['furnitureName']."',"; 
              echo $row['furniture_sold']."],";
        }
?>