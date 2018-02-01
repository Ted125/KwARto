<?php
  require("Connect.php");

  if($connection){
    $categoryId = $_POST["categoryId"];
    $sellerId = $_POST["sellerId"];
    $minPrice = $_POST["minPrice"];
    $maxPrice = $_POST["maxPrice"];
    $minDiscount = $_POST["minDiscount"];
    $maxDiscount = $_POST["maxDiscount"];
    $minRating = $_POST["minRating"];
    $maxRating = $_POST["maxRating"];
    $saleStart = $_POST["saleStart"];
    $saleEnd = $_POST["saleEnd"];
    $name = $_POST["name"];
    $sortValue = $_POST["sortValue"];
    $sortOrder = $_POST["sortOrder"];

    $query = "SELECT f.*
              FROM
              (
              category AS node
              JOIN furniture AS f ON node.categoryId = f.categoryId
              LEFT JOIN review AS r ON f.furnitureId = r.furnitureId
              LEFT JOIN
                (
              		SELECT * FROM furniture_stock WHERE status = 'available'
              	) AS s ON f.furnitureId = s.furnitureId
              LEFT JOIN
                (
                  SELECT * FROM furniture_stock WHERE status = 'sold'
                ) AS b ON f.furnitureId = b.furnitureId
              LEFT JOIN
                (
                  SELECT * FROM wishlist
                ) AS w ON f.furnitureId = w.furnitureId
              ),
              category AS parent
              WHERE node.lft
              BETWEEN parent.lft
              AND parent.rgt
              AND f.live = 1
              AND f.status = 1
              AND parent.categoryId = " . $categoryId;

      if($sellerId != -1){
        $query .= " AND f.sellerId = " . $sellerId;
      }

      if($minPrice != -1){
        $query .= " AND (f.price * (1 - f.discount / 100)) >= " . $minPrice;
      }

      if($maxPrice != -1){
        $query .= " AND (f.price * (1 - f.discount / 100)) <= " . $maxPrice;
      }

      if($minDiscount != -1){
        $query .= " AND f.discount >= " . $minDiscount;
      }

      if($maxDiscount != -1){
        $query .= " AND f.discount <= " . $maxDiscount;
      }

      if($saleStart != ""){
        $query .= " AND f.saleStart >= '" . $saleStart . "'";
      }

      if($saleEnd != ""){
        $query .= " AND f.saleEnd <= '" . $saleEnd . "'";
      }

      if($name != ""){
        $query .= " AND f.name LIKE '%" . $name . "%'";
      }

      $query .= " GROUP BY f.furnitureId";

      if($minRating != -1 && $maxRating != -1){
        $query .= " HAVING AVG(r.rating) >= " . $minRating .
                  " AND AVG(r.rating) <= " . $maxRating;
      }else if($minRating != -1){
        $query .= " HAVING AVG(r.rating) >= " . $minRating;
      }else if($maxRating != -1){
        $query .= " HAVING AVG(r.rating) <= " . $maxRating;
      }

      if($sortValue != ""){
        switch($sortValue){
          case "name":
          $query .= " ORDER BY f.name";
          break;
          case "price":
          $query .= " ORDER BY (f.price * (1 - f.discount / 100))";
          break;
          case "discount":
          $query .= " ORDER BY f.discount";
          break;
          case "rating":
          $query .= " ORDER BY AVG(r.rating)";
          break;
          case "stock":
          $query .= " ORDER BY COUNT(s.stockId)";
          break;
          case "arrival":
          $query .= " ORDER BY s.dateAdded";
          break;
          case "sold":
          $query .= " ORDER BY COUNT(b.stockId)";
          break;
          case "saleStart":
          $query .= " ORDER BY f.saleStart";
          break;
          case "saleEnd":
          $query .= " ORDER BY f.saleEnd";
          break;
        }

        switch($sortOrder){
          case "ascending":
          $query .= " ASC";
          break;
          case "descending":
          $query .= " DESC";
          break;
        }
      }else{
        $query .= " ORDER BY node.lft ASC";
      }

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
