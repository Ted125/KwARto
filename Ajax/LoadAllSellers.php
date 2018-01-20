<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $query = "SELECT * FROM seller";
    $sellerResult = mysqli_query($connection, $query);

    $rows = array();

    if($sellerResult != null){
      while($row = mysqli_fetch_assoc($sellerResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
