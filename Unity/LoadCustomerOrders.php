<?php
  ob_start();
  require("Connect.php");

  if($connection){
    $state = $_POST["state"];
    $customerId = $_POST["customerId"];

    $query = "SELECT * FROM customer_order WHERE state = '" . $state . "' AND customerId = " . $customerId . " ORDER BY dateUpdated DESC";
    $result = mysqli_query($connection, $query);

    if($result != null){
      while($row = mysqli_fetch_assoc($result)){
        echo $row["orderId"] . "\n";
        echo $row["orderNumber"] . "\n";
        echo $row["shippingContactPerson"] . "\n";
        echo $row["shippingAddress"] . "\n";
        echo $row["shippingLocationId"] . "\n";
        echo $row["shippingContactNumber"] . "\n";
        echo $row["billingContactPerson"] . "\n";
        echo $row["billingAddress"] . "\n";
        echo $row["billingLocationId"] . "\n";
        echo $row["billingContactNumber"] . "\n";
        echo $row["discount"] . "\n";
        echo $row["tax"] . "\n";
        echo $row["subtotalFee"] . "\n";
        echo $row["shippingFee"] . "\n";
        echo $row["totalFee"] . "\n";
        echo $row["state"] . "\n";

        if($row["cancelled"] == 1){
          echo "true" . "\n";
        }else{
          echo "false" . "\n";
        }

        if($row["paid"] == 1){
          echo "true" . "\n";
        }else{
          echo "false" . "\n";
        }

        echo $row["dateAdded"] . "\n";
        echo $row["dateUpdated"] . "\n";
        echo $row["customerId"] . "\n";
        echo $row["paymentId"] . "\n";
      }
    }
  }
?>
