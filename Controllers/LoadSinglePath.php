<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $categoryId = $_POST["categoryId"];

    $query = "SELECT parent.*
              FROM category AS node,
              category AS parent
              WHERE node.lft BETWEEN parent.lft AND parent.rgt
              AND node.categoryId = " . $categoryId .
              " ORDER BY parent.lft";
    $singlePathResult = mysqli_query($connection, $query);
  }
?>
