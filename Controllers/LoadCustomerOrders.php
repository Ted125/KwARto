<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT * FROM customer_order WHERE customerId = " . $customerId . " ORDER BY dateUpdated DESC";
    $orderResult = mysqli_query($connection, $query);
  }
?>
