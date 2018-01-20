<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $status = $_POST["status"];
    $customerId = $_POST["customerId"];
    $stockId = $_POST["stockId"];

    $query = "UPDATE furniture_stock SET status = '" . $status . "', customerId = " . $customerId . " WHERE stockId = " . $stockId;
    $updateStockResult = mysqli_query($connection, $query);

    $rows = array();

    if($updateStockResult != null){
      $rows[] = "true";
    }else{
      $rows[] = "false";
    }

    print json_encode($rows);
  }
?>
