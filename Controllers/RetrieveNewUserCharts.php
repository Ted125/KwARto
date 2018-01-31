<?php
include_once("../Models/Database.php");
    $monthnum = date_parse_from_format("m/d/Y", $_GET['datereport']);
    $db = new Database();
    $connection = $db->connect();
    if($connection){
        $qry = "SELECT count(userId) as new_customers, 
                FROM user_details  
                WHERE userType = 'customer' AND EXTRACT(month from user_details.dateAdded) = '".$monthnum['month']."'";
        mysqli_close($connection);  
        $result = mysqli_query($connection, $qry);
        echo json_encode($result);
    }else{
        echo 'no connection';
    }
?>