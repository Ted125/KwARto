<?php
  require("Connect.php");

  if($connection){
    $id = $_POST["furnitureId"];

    $query = "SELECT q.questionId, q.question, CONCAT(c.firstName, ' ', c.lastName) AS customerName, q.datePosted FROM question AS q JOIN customer AS c ON q.customerId = c.customerId WHERE q.furnitureId = " . $id . " ORDER BY q.datePosted DESC, q.questionId DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["questionId"] . "\n";
        echo $row["question"] . "\n";
        echo $row["customerName"] . "\n";
        echo $row["datePosted"] . "\n";
      }
    }
  }
?>
