<?php
  require("Connect.php");

  if($connection != null){
    $furnitureID = $_POST['furnitureId'];

    $query = "SELECT furniturePicture FROM " . "furniture_table" . " WHERE furnitureID = '" . $furnitureID . "';";
    $result = mysqli_query($connection, $query);

    if($result != null){
      $row = mysqli_fetch_assoc($result);

      header("Location: ../Resources/Images/Furnitures/" . $row['furniturePicture']);
    }
  }
?>
