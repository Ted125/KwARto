<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result = null;
        if($connection){

        $qry = "SELECT DATE_FORMAT(fs.dateAdded, '%M %Y') as date, sum(f.price) as total_sales
                FROM seller s, furniture f, furniture_stock fs
                WHERE s.sellerId = 1 AND fs.furnitureId = f.furnitureId AND fs.status = 'sold'
                GROUP BY MONTH(fs.dateAdded), YEAR(fs.dateAdded)
                ORDER BY Year(fs.dateAdded), MONTH(fs.dateAdded)";
        $result = mysqli_query($connection, $qry);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row = $result->fetch_assoc()){ 
              echo "['".$row['date']."',"; 
              echo $row['total_sales']."],";
        }
?>