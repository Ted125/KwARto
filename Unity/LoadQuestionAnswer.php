<?php
  require("Connect.php");

  if($connection){
    $id = $_POST["questionId"];

    $query = "SELECT q.answer, s.name AS sellerName, q.dateAnswered FROM question AS q JOIN furniture AS f ON q.furnitureId = f.furnitureId JOIN seller AS s ON f.sellerId = s.sellerId WHERE q.questionId = " . $id;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){

        if($row["answer"] != null){
          echo "true" . "\n";
        }else{
          echo "false" . "\n";
        }

        echo $row["answer"] . "\n";
        echo $row["sellerName"] . "\n";
        echo $row["dateAnswered"] . "\n";
      }
    }
  }
?>
