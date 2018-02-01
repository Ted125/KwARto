<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result1 = $result2 = $result3 = null;
        if($connection){

        $qry2 = "SELECT DATE_FORMAT(dateAdded, '%M %Y') as date,count(userId) as customers 
                FROM user_details 
                WHERE userType = 'customer'
                GROUp BY MONTH(dateAdded)
                ORDER BY YEAR(dateAdded)";
        $result2 = mysqli_query($connection, $qry2);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row2 = $result2->fetch_assoc()){ 
              echo "['".$row2['date']."',"; 
              echo $row2['customers']."],";
        }
?>