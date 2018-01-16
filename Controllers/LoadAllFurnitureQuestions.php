<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $id = $_POST["furnitureId"];

    $query = "SELECT q.questionId, q.question, CONCAT(c.firstName, ' ', c.lastName) AS customerName, q.datePosted FROM question AS q JOIN customer AS c ON q.customerId = c.customerId WHERE q.furnitureId = " . $id . " ORDER BY q.datePosted DESC, q.questionId DESC";
    $questionResult = mysqli_query($connection, $query);
  }
?>
