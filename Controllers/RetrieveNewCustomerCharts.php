<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result = null;
        if($connection){

        $qry = "SELECT DATE_FORMAT(dateAdded, '%M %Y') as date,count(userId) as customers 
                FROM user_details 
                WHERE userType = 'customer'
                GROUP BY MONTH(dateAdded), YEAR(dateAdded)
	        ORDER BY Year(dateAdded),month(dateAdded)";
        $result = mysqli_query($connection, $qry);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row = $result->fetch_assoc()){ 
              echo "['".$row['date']."',"; 
              echo $row['customers']."],";
        }
?>