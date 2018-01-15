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

    $query = "INSERT INTO customer_order (orderNumber, shippingContactPerson, shippingAddress, shippingLocationId, shippingContactNumber, billingContactPerson, billingAddress, billingLocationId, billingContactNumber, discount, tax, subtotalFee, shippingFee, totalFee, customerId, paymentId) VALUES('" . $orderNumber . "', '" . $shippingContactPerson . "', '" . $shippingAddress . "', " . $shippingLocationId . ", '" . $shippingContactNumber . "', '" . $billingContactPerson . "', '" . $billingAddress . "', " . $billingLocationId . ", '" . $billingContactNumber . "', " . $discount . ", " . $tax . ", " . $subtotalFee . ", " . $shippingFee . ", " . $totalFee . ", " . $customerId . ", " . $paymentId . ")";
    $result = mysqli_query($connection, $query);

    if($result){
      echo "true";
    }else{
      echo "false";
    }
  }
?>
