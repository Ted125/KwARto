<?php
  require("Connect.php");

  if($connection){
    $question = $_POST["question"];
    $active = $_POST["active"];
    $customerId = $_POST["customerId"];
    $furnitureId = $_POST["furnitureId"];

    $query = "INSERT INTO question (question, active, customerId, furnitureId) VALUES('" . $question . "', " . $active . ", " . $customerId . ", " . $furnitureId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
