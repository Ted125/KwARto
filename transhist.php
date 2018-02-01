<!DOCTYPE html>
<html lang="en">
<head>
<title>KwARto | Web Application</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
<link rel="icon" href="images/icon.png">
	<?php include('Access/Header.php');?>
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
		<?php include('Access/Navbar.php');?>

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="complete.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Transaction History</a></li>

					</ul>
				</div>

			</div>
		</div>

		<h3><i class="fa fa-server" aria-hidden="true"></i> Transaction History</h3>
		<br>

		<?php
			$_POST["customerId"] = $_SESSION["customerId"];

			require("Controllers/LoadCustomerOrders.php");

			if($orderResult != null){
				$i = 0;

				while($row = mysqli_fetch_assoc($orderResult)){
					$i++;
		?>

		<!-- Order Entry Starts Here -->

		<div class="row text-center">
		<h5 style="position: absolute; left: 0px;">Order # <span style="color: #d42d2d;"><?php echo $row["orderNumber"]; ?></span></h5>
		<h5 style="margin-left: 40%;">Placed On <span style="color: #d42d2d;"><?php echo date("D, F j, Y", strtotime($row["dateAdded"])); ?></span></h5>
		<h5 style="position: absolute; right: 0px;">Total: <span style="color: #d42d2d;"><?php echo "Php " . number_format($row["totalFee"], 2); ?></span></h5>
		</div>

		<div class="row">
			<br>
			<h4 style="position: absolute; left: 0px;"><i class="fa fa-gift"></i> Package <span style="color: #d42d2d;"><?php echo $i; ?></span></h4>
			<h4 style="position: absolute; right: 0px;">Sold by: <span style="color: #d42d2d;">Manufacturer Inc.</span></h4>
		</div>
		<br>
		<br>
		<div class="">
			<h4 ><i class="fa fa-ship"></i> Standard Shipping</h4>
			<h6 style="color: #d42d2d;">Delivery by <?php echo date("D, F j, Y", strtotime($row["dateAdded"] . ' + 7 days')); ?> - <?php echo date("D, F j, Y", strtotime($row["dateAdded"] . ' + 12 days')); ?></h6>
		</div>

		<div class="progress" style="margin-top: 30px;">
			<?php
				if($row["state"] == "pending"){
			?>
					<!-- Processing -->
				  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
				  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:33%; background-color: #d42d2d">
				    Pending
				  </div>
			<?php
				}else if($row["state"] == "shipping"){
			?>
  		   <!--  Shipping -->
		  		 <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
				  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:66%; background-color: #d42d2d">
				    Shipping
				  </div>
			<?php
				}else if($row["state"] == "delivered"){
			?>

		    <!-- Delivery -->
		  		  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
				  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color: #d42d2d">
				    Delivered
				  </div>
			<?php
				}
			?>
		</div>

		<?php
			$_POST["orderId"] = $row["orderId"];

			require("Controllers\LoadOrderStatus.php");

			if($orderStatusResult != null){
				$statusRow = mysqli_fetch_assoc($orderStatusResult);
		?>

		<div class="card" style="padding: 40px 100px 40px 100px; width: 100%; border:none;">
 		 	<div class="card-block">
			    <h6 class="card-title"><?php echo date("D, F j, Y", strtotime($statusRow["dateAdded"])); ?></h6>
			    <h6 class="card-title">Status: <span style="color: #d42d2d;"><?php echo $row["state"]; ?></span></h6>
			    <p class="card-text"><?php echo $statusRow["status"]; ?></p>
			</div>
		</div>

		<?php
			}
		?>

		<h5>Item List:</h5>

		<table class=" thead-dark table-hover" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr style="text-align: center;">
                <th width="5%"></th>
                <th width="15%">Product Image</th>
                <th width="35%">Product Name</th>
                <th width="20%">Quantity</th>
                <th width="25%">Price</th>
            </tr>
        </thead>
        <tbody class="text-center">
					<?php
						$_POST["orderId"] = $row["orderId"];

						require("Controllers/LoadOrderItems.php");

						if($orderItemResult != null){
							$j = 0;

							while($itemRow = mysqli_fetch_assoc($orderItemResult)){
								$j++;
					?>
		            <tr class="">
		                <td class=""><?php echo $j; ?></td>
		                <td class=""><a href="#"><img style="max-height: 140px;" src=<?php echo "Resources/Images/Furniture/" .  $itemRow["furnitureId"] . "/" . $itemRow["image"]; ?> alt=" " class="img-responsive"></a></td>
		                <td class=""><?php echo $itemRow["name"]; ?></td>
		                <td class=""> <span><?php echo $itemRow["quantity"]; ?></span></td>
		                <td class="" style="text-align:  center;">
		                   <span style="color:red">
												<?php
													$price = $itemRow["originalPrice"];
													$discount = $itemRow["discount"];

													if($discount > 0){
														echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
													}else{
														echo "Php " . number_format($price, 2);
													}
												?>
											</span>
		                </td>
		            </tr>

					<?php
							}
						}
					?>
        </tbody>
    </table>
    <br>
    <div class="row" style="margin-left: 20px; margin-top: 10px;">

    	<div class="card" style="width: 15rem; padding: 20px;">
		    <h5 class="card-title">Delivery Address</h5>
		    <p class="card-text"><?php echo $row["shippingAddress"]; ?></p>
		    <p class="card-text"><?php echo $row["shippingContactNumber"]; ?></p>
		</div>

    	<div class="card" style="margin-left: 20px; width: 15rem; padding: 20px; ">
		    <h5 class="card-title">Billing Address</h5>
		    <p class="card-text"><?php echo $row["billingAddress"]; ?></p>
		    <p class="card-text"><?php echo $row["billingContactNumber"]; ?></p>
		</div>

		<div class="card" style="margin-left: 20px; width: 35rem; padding: 20px;">
		  <div class="card-block">
		    <h5 class="card-title">Total Summary</h5>
		    <div class="row">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Sub-total:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;"><?php echo "Php " . number_format($row["subtotalFee"], 2); ?></p>
			</div>
			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Shipping Fee:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;"><?php echo "Php " . number_format($row["shippingFee"], 2); ?></p>
			</div>
			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Discount:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;"><?php echo number_format($row["discount"], 0) . " %"; ?></p>
			</div>

			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Total (VAT applied where applicable):</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;"><?php echo "Php " . number_format($row["totalFee"], 2); ?></p>
			</div>

			<!-- <div class="row" style="margin-top: -10px;">
			    <p style="position: relative;padding-left: 30px; left: 0px;">To be paid through:</p>
			    <p style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">Cash on Delivery</p>
			</div> -->

		  </div>
		</div>

    </div>
		<br>
		<br>
		<hr>
		<br>
		<br>
		<!-- Order Entry Ends Here -->

		<?php
				}
			}
		?>

	<!-- BENEFIT HERE-->
	<?php include('Access/Benefit.php');?>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
</body>

</html>
