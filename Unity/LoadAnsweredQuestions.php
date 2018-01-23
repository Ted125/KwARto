<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT q.*, CONCAT(c.firstName, ' ', c.lastName) AS customerName, f.name AS furnitureName, i.image AS imageName, s.name AS sellerName FROM question AS q JOIN customer AS c ON q.customerId = c.customerId JOIN furniture AS f ON q.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId JOIN seller AS s ON f.sellerId = s.sellerId WHERE i.thumbnail = 1 AND NOT ISNULL(q.answer) AND q.customerId = " . $customerId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["questionId"] . "\n";
        echo $row["question"] . "\n";
        echo $row["customerName"] . "\n";
        echo $row["datePosted"] . "\n";
        echo $row["furnitureName"] . "\n";
        echo $row["imageName"] . "\n";
        echo $row["furnitureId"] . "\n";
        echo $row["sellerName"] . "\n";
        echo $row["dateAnswered"] . "\n";
        echo $row["answer"] . "\n";
      }
    }
  }
?>
