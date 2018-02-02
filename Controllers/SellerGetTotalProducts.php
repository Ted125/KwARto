<?php
  require_once("Models/Database.php");
  ob_start();
    $db = new Database();
    $connection = $db->Connect();
    $result = null;
    if($connection){
        $query = "SELECT count(*) as total_furniture
                  FROM furniture WHERE sellerId = ".$_SESSION['sellerId']."
                  ";
        $result = mysqli_query($connection, $query);
        mysqli_close($connection);

        if($result != null){
            $total_furniture = $result->fetch_assoc();
        }else{
            echo 'null set recovered';
        }
    }else{
        echo 'Connection Error';
    }

?>
