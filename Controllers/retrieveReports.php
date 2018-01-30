<?php
include_once("../Models/Database.php");

    $db = new Database();
    $connection = $db->connect();
    if($connection){
        $qry = "SELECT count(*) as new_customers 
                FROM user_details 
                WHERE userType = 'customer' AND dateAdded >= DATE(NOW())"
        mysqli_close($connection);  
        $result = mysqli_query($connection, $qry);
    }else{
        echo 'no connection';
    }

    return $result;

?>