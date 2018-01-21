<?php
  require("Connect.php");

  if($connection){
    $customerId = $_POST["customerId"];

    $query = "SELECT q.*, CONCAT(c.firstName, ' ', c.lastName) AS customerName, f.name AS furnitureName, i.image AS imageName FROM question AS q JOIN customer AS c ON q.customerId = c.customerId JOIN furniture AS f ON q.furnitureId = f.furnitureId JOIN furniture_image AS i ON f.furnitureId = i.furnitureId WHERE i.thumbnail = 1 AND ISNULL(q.answer) AND q.customerId = " . $customerId;
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
      }
    }
  }
?>
