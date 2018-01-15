<?php
  require("Connect.php");

  if($connection){
    $orderId = $_POST["orderId"];

    $query = "SELECT f.furnitureId, f.name, f.description, f.model, f.color, f.weight, f.weightUnit, f.length, f.width, f.height, f.sizeUnit, f.packageLength, f.packageWidth, f.packageHeight, f.packageSizeUnit, f.price, f.dateAdded, f.dateUpdated, f.addedBy, f.updatedBy, f.modelName, f.discount, f.sellerId FROM order_item AS i JOIN furniture_stock AS s ON i.stockId = s.stockId JOIN furniture AS f ON s.furnitureId = f.furnitureId WHERE i.orderId = " . $orderId;
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["furnitureId"] . "\n";
        echo $row["name"] . "\n";
        echo $row["description"] . "\n";

        if($row["model"] != null){
          echo $row["model"] . "\n";
        }else{
          echo "None" . "\n";
        }

        if($row["color"] != null){
          echo $row["color"] . "\n";
        }else{
          echo "None" . "\n";
        }

        echo $row["weight"] . "\n";
        echo $row["weightUnit"] . "\n";
        echo $row["length"] . "\n";
        echo $row["width"] . "\n";
        echo $row["height"] . "\n";
        echo $row["sizeUnit"] . "\n";
        echo $row["packageLength"] . "\n";
        echo $row["packageWidth"] . "\n";
        echo $row["packageHeight"] . "\n";
        echo $row["packageSizeUnit"] . "\n";
        echo $row["price"] . "\n";
        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["addedBy"] . "\n";
        echo $row["updatedBy"] . "\n";
        echo $row["modelName"] . "\n";
        echo $row["discount"] . "\n";
        echo $row["sellerId"] . "\n";
      }
    }
  }
?>
