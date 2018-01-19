<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $parentId = $_POST["parentId"];

    $query = "";

    if($parentId != -1){
      $query = "SELECT * FROM location WHERE parentLocationId = " . $parentId;
    }else{
      $query = "SELECT * FROM location WHERE parentLocationId IS NULL";
    }


    $locationResult = mysqli_query($connection, $query);

    if($locationResult != null){
      while($row = mysqli_fetch_assoc($locationResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
