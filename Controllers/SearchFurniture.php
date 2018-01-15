<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Models/Database.php");

  $db = new Database();
  $connection = $db->Connect();

  if($connection){
    $categoryId = $_POST["categoryId"];
    $sellerId = $_POST["sellerId"];
    $minPrice = $_POST["minPrice"];
    $maxPrice = $_POST["maxPrice"];
    $minDiscount = $_POST["minDiscount"];
    $maxDiscount = $_POST["maxDiscount"];
    $minRating = $_POST["minRating"];
    $maxRating = $_POST["maxRating"];
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
              		SELECT * from furniture_stock WHERE status = 'available'
              	) AS s ON f.furnitureId = s.furnitureId
              ),
              category AS parent
              WHERE node.lft
              BETWEEN parent.lft
              AND parent.rgt
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
        }

        switch($sortOrder){
          case " ascending":
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
  }
?>
