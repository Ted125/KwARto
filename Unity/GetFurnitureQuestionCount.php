<?php
  require("Connect.php");

  if($connection){
    $id = $_POST["furnitureId"];

    $query = "SELECT COUNT(questionId) AS numQuestions FROM question WHERE furnitureId = " . $id;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["numQuestions"] . "\n";
      }
    }
  }
?>
