<?php
  require_once("Models/furniture_stockCRUD.php");
  ob_start();
  //session_start();

  $furn = new furniture_stock();
  $temp = $furn->displayTotalSales($_SESSION['sellerId']);
  if($temp != null){
    $stock_sold= $temp->fetch_assoc();
  } else {

    echo "Invalid credentials or not activated";
  }

 //header( "Location: http://localhost/capstone-project/" );
?>
