<?php
  require("Connect.php")

  if($connection){
    $query = "SELECT * FROM category WHERE rgt = lft + 1";
    $result = mysqli_fetch_assoc($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo["categoryId"] . "\n";
        echo["name"] . "\n";
      }
    }
  }
?>
