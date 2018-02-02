<?php
  require("Connect.php");

  if($connection){
    $orderNumber = $_POST["orderNumber"];
    $shippingContactPerson = $_POST["shippingContactPerson"];
    $shippingAddress = $_POST["shippingAddress"];
    $shippingLocationId = $_POST["shippingLocationId"];
    $shippingContactNumber = $_POST["shippingContactNumber"];
    $billingContactPerson = $_POST["billingContactPerson"];
    $billingAddress = $_POST["billingAddress"];
    $billingLocationId = $_POST["billingLocationId"];
    $billingContactNumber = $_POST["billingContactNumber"];
    $discount = $_POST["discount"];
    $tax = $_POST["tax"];
    $subtotalFee = $_POST["subtotalFee"];
    $shippingFee = $_POST["shippingFee"];
    $totalFee = $_POST["totalFee"];
    $customerId = $_POST["customerId"];
    $paymentId = $_POST["paymentId"];
    $sellerId = $_POST["sellerId"];

    $query = "INSERT INTO customer_order (orderNumber, shippingContactPerson, shippingAddress, shippingLocationId, shippingContactNumber, billingContactPerson, billingAddress, billingLocationId, billingContactNumber, discount, tax, subtotalFee, shippingFee, totalFee, customerId, paymentId, sellerId) VALUES('" . $orderNumber . "', '" . $shippingContactPerson . "', '" . $shippingAddress . "', " . $shippingLocationId . ", '" . $shippingContactNumber . "', '" . $billingContactPerson . "', '" . $billingAddress . "', " . $billingLocationId . ", '" . $billingContactNumber . "', " . $discount . ", " . $tax . ", " . $subtotalFee . ", " . $shippingFee . ", " . $totalFee . ", " . $customerId . ", " . $paymentId . ", " . $sellerId . ");";
    $addOrderResult = mysqli_query($connection, $query);

    if($addOrderResult != null && $addOrderResult){
      $orderId = mysqli_insert_id($connection);

      // Add Order Items
      $query = "SELECT s.*, f.price, f.discount FROM furniture_stock AS s JOIN furniture AS f ON s.furnitureId = f.furnitureId WHERE s.status = 'on_hold' AND s.customerId = " . $customerId . " AND f.sellerId = " . $sellerId;
      $onHoldStockResult = mysqli_query($connection, $query);

      if($onHoldStockResult != null){
        while($stockRow = mysqli_fetch_assoc($onHoldStockResult)){
          $_POST["originalPrice"] = $stockRow["price"];
          $_POST["discount"] = $stockRow["discount"];
          $_POST["orderId"] = $orderId;
          $_POST["stockId"] = $stockRow["stockId"];

          require("AddOrderItem.php");

          $_POST["furnitureId"] = $stockRow["furnitureId"];
          $_POST["customerId"] = $customerId;

          require("SellCartItem.php");
        }

        $_POST["orderId"] = $orderId;
        $_POST["status"] = "Order has been placed.";

        require("AddOrderStatus.php");

        echo "true" . "\n";
      }else{
        echo "false" . "\n";
      }
    }else{
      echo "false" . "\n";
    }
  }
?>
