<?php
  require("Connect.php");

  if($connection){
    $query = "SELECT * FROM search_history GROUP BY value ORDER BY COUNT(value) DESC LIMIT 10";
    $result = mysqli_query($connection, $query);

    if($result){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["value"] . "\n";
      }
    }
  }
?>
