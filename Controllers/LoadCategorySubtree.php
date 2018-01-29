<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $categoryId = $_POST["categoryId"];

    $query = "SELECT node.*
              FROM category AS node,
              category AS parent
              WHERE node.lft BETWEEN parent.lft AND parent.rgt
              AND parent.categoryId = " . $categoryId . "
              GROUP BY node.categoryId
              ORDER BY node.lft";
    $categorySubtreeResult = mysqli_query($connection, $query);
  }
?>
