<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $question = $_POST["question"];
    $active = $_POST["active"];
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "INSERT INTO question (question, active, customerId, furnitureId) VALUES('" . $question . "', " . $active . ", " . $customerId . ", " . $furnitureId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      header("Location: ../single.php?singleFurnitureId=" . $furnitureId);
    }else{
      echo "Error uploading question!";
    }
  }
?>
