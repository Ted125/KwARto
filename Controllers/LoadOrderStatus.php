<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $orderId = $_POST["orderId"];

    $query = "SELECT * FROM order_status WHERE orderId = " . $orderId . " ORDER BY dateUpdated DESC LIMIT 1";
    $orderStatusResult = mysqli_query($connection, $query);
  }
?>
