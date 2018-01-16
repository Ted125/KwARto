<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $id = $_POST["questionId"];

    $query = "SELECT q.answer, s.name AS sellerName, q.dateAnswered FROM question AS q JOIN furniture AS f ON q.furnitureId = f.furnitureId JOIN seller AS s ON f.sellerId = s.sellerId WHERE q.questionId = " . $id;
    $answerResult = mysqli_query($connection, $query);
  }
?>
