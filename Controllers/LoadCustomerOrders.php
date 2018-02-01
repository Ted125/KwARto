<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT co.*, s.name AS sellerName FROM customer_order AS co JOIN seller AS s ON co.sellerId = s.sellerId WHERE co.customerId = " . $customerId . " ORDER BY co.dateUpdated DESC";
    $orderResult = mysqli_query($connection, $query);
  }
?>
