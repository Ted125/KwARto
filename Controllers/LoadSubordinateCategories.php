<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $categoryId = $_POST["categoryId"];

    $query = "SELECT node.*, (COUNT(parent.name) - (sub_tree.depth + 1)) AS depth
              FROM category AS node,
                      category AS parent,
                      category AS sub_parent,
                      (
                              SELECT node.name, (COUNT(parent.name) - 1) AS depth
                              FROM category AS node,
                                      category AS parent
                              WHERE node.lft BETWEEN parent.lft AND parent.rgt
                                      AND node.categoryId = " . $categoryId . "
                              GROUP BY node.name
                              ORDER BY node.lft
                      )AS sub_tree
              WHERE node.lft BETWEEN parent.lft AND parent.rgt
                      AND node.lft BETWEEN sub_parent.lft AND sub_parent.rgt
                      AND sub_parent.name = sub_tree.name
              GROUP BY node.name
              HAVING depth = 1
              ORDER BY node.lft";
    $subordinateCategoriesResult = mysqli_query($connection, $query);
  }
?>
