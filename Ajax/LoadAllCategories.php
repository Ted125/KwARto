<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $query = "SELECT node.*, (COUNT(parent.categoryId) - 1) AS depth
              FROM category AS node,
              category AS parent
              WHERE node.lft BETWEEN parent.lft AND parent.rgt
              GROUP BY node.categoryId
              ORDER BY node.lft";
    $categoryTreeResult = mysqli_query($connection, $query);

    $rows = array();

    if($categoryTreeResult != null){
      while($row = mysqli_fetch_assoc($categoryTreeResult)){
        $rows[] = $row;
      }
    }

    print json_encode($rows);
  }
?>
