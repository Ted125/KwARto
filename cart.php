<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();?>
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
						<li class="active"><a href="cart.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cart</a></li>
					</ul>
				</div>

			</div>
		</div>

		<h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Your Cart</h2>
		<!-- <h4>Your shopping cart contains: <span style="color: #d42d2d">2</span> Products</h4> -->
				<table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
					<thead>
						<tr style="text-align: center;">
							<th>Item No.</th>
							<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th>

							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id = "cartItemsContainer" class="text-center">

					</tbody></table>

				<div style="margin-top: 20px;" class="text-right">
					<h5>Subtotal: <span id = "subtotalFeeText" style="color: #d42d2d" value = 0>Php 0</span> (Tax Inclusive)</h5>
					<h5>Shipping Fee: <span id = "shippingFeeText" style="color: #d42d2d" value = 0>Php 0</h5>
					<h4>Your total balance is: <span id = "totalFeeText" style="color: #d42d2d" value = 0>Php 0</span></h4>
					<div id = "checkoutButton" class="red_button" style="width: 180px"><a style="color: white;">Proceed to Checkout</a></div>
				</div>

				<!-- Selected Furniture Form -->
				<form id = "selectedFurnitureForm" action = "single.php" method = "GET">
					<input id = "selectedFurnitureField" type = "hidden" name = "singleFurnitureId">
				</form>

				<!-- Checkout Form -->
				<form id = "checkoutForm" type = "hidden" action = "payment.php" method = "POST">
					<input id = "inputSubtotalFee" type = "hidden" name = "subtotalFee">
					<input id = "inputShippingFee" type = "hidden" name = "shippingFee">
					<input id = "inputTotalFee" type = "hidden" name = "totalFee">
				</form>

				<!-- MODAL CONTENTS -->
                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
								<thead>
									<tr style="text-align: center;">
										<th>Item No.</th>
										<th>Product</th>
										<th>Quantity</th>
										<th>Product Name</th>

										<th>Price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="text-center">
								<tr class="">
								<td class="">1</td>
								<td class=""><a href="single.php"><img style="max-height: 140px;" src="http://www.zurifurniture.com/common/images/products/large/medici_chair_red2.jpg" alt=" " class="img-responsive"></a></td>
								<td class="">
									<div class="" style="text-align: -webkit-center">
										<div class="form-group form-group-options">
											<div class="input-group input-group-option" style="width: 130px;">
												<span class="input-group-addon input-group-addon-remove btn">
													<span class="fa fa-minus"></span>
												</span>
												<input type="text" class="form-control" style="text-align: center;" value="1" placeholder="1">
												<span class="input-group-addon btn">
													<span class="fa fa-plus"></span>
												</span>
											</div>
										</div>
									</div>
								</td>
								<td class="">Comfy Chair</td>
								<td class="">P850.00</td>
								<td class="" style="text-align:  center;">
									<div class="red_button" style="width: 150px"><a href="wishlist.php">move to wishlist</a></div><br>
									<div class="red_button" style="width: 100px; background-color: #444; margin-top: 10px;"><a href="#">remove</a></div>
								</td>
							</tr>
									<tr class="">
										<td class="">2</td>
										<td class=""><a href="single.php"><img style="max-height: 140px;" src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" alt=" " class="img-responsive"></a></td>
										<td class="">
											<div class="" style="text-align: -webkit-center">
												<div class="form-group form-group-options">
						                            <div class="input-group input-group-option" style="width: 130px;">
						                                <span class="input-group-addon input-group-addon-remove btn">
						                                    <span class="fa fa-minus"></span>
						                                </span>
						                                <input type="text" class="form-control" style="text-align: center;" value="1" placeholder="1">
						                                <span class="input-group-addon btn">
						                                    <span class="fa fa-plus"></span>
						                                </span>
						                            </div>
				                        		</div>
											</div>
										</td>
										<td class="">Swivel Chair</td>
										<td class="">P540.00</td>
										<td class="" style="text-align:  center;">
											<div class="red_button" style="width: 150px;"><a href="wishlist.php">move to wishlist</a></div><br>
											<div class="red_button" style="width: 100px;background-color: #444; margin-top: 10px;"><a href="#">remove</a></div>
										</td>
									</tr>
							</tbody></table>
                        </div>
                        <div class="modal-footer">
                        	<a href="cart.php" class="btn red_button button" style="color: white;" >Checkout</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
	<!-- BENEFIT HERE-->
	<?php include('Access/Benefit.php');?>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>

    </div>
</div>

    <!-- MOBILE VIEW HERE-->
		<?php include('Access/MobileTab.php');?>
</div>




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

<script src="js/custom.js"></script>
<script src="js/jquery.number.min.js"></script>
</body>

</html>
<script type = "text/javascript">

$(document).ready(function(){
	var fId = "<?php if(isset($_POST['furnitureId'])){
		echo $_POST['furnitureId'];
	}else{
		echo '-1';
	} ?>";

	fId = parseInt(fId);

	if(fId != -1){
		var customerId = "<?php echo $_SESSION['customerId']; ?>";

		$.ajax({
			type: "POST",
			url: "Ajax/GetAvailableFurnitureStock.php",
			dataType: "json",
			data: {
				"furnitureId" : fId
			},
			success: function(result) {
				if(result[0] != null){
					UpdateFurnitureStock("on_hold", customerId, result[0].stockId);
				}else{
					LoadCartItems();
				}
			},
			error: function(result) {

			}
		});
	}else{
		LoadCartItems();
	}

	$("#cartItemsContainer").on("click", ".addCartItemButton", function(){
		var furnitureId = $(this).closest(".cartItem").attr("name");
		var customerId = "<?php echo $_SESSION['customerId']; ?>";

		$.ajax({
			type: "POST",
			url: "Ajax/GetAvailableFurnitureStock.php",
			dataType: "json",
			data: {
				"furnitureId" : furnitureId
			},
			success: function(result) {
				if(result[0] != null){
					UpdateFurnitureStock("on_hold", customerId, result[0].stockId);
				}else{

				}
			},
			error: function(result) {

			}
		});
	});

	$("#cartItemsContainer").on("click", ".removeCartItemButton", function(){
		var furnitureId = $(this).closest(".cartItem").attr("name");
		var customerId = "<?php echo $_SESSION['customerId']; ?>";

		$.ajax({
			type: "POST",
			url: "Ajax/GetOnHoldFurnitureStock.php",
			dataType: "json",
			data: {
				"furnitureId" : furnitureId,
				"customerId" : customerId
			},
			success: function(result) {
				if(result[0] != null){
					UpdateFurnitureStock("available", "null", result[0].stockId);
				}else{

				}
			},
			error: function(result) {

			}
		});
	});

	$("#cartItemsContainer").on("click", ".addToWishlistButton", function(){
		var furnitureId = $(this).closest(".cartItem").attr("name");
		var customerId = <?php
			if(isset($_SESSION["customerId"])){
				echo $_SESSION["customerId"];
			}else{
				echo -1;
			}
		?>;

		AddToWishlist(customerId, furnitureId, $(this));
	});

	$("#cartItemsContainer").on("click", ".removeFromCartButton", function(){
		var furnitureId = $(this).closest(".cartItem").attr("name");
		RemoveFromCart(furnitureId);
	});

	$("#cartItemsContainer").on("click", ".productName", function(){
		var id = $(this).closest(".cartItem").attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$("#cartItemsContainer").on("click", ".productImage", function(){
		var id = $(this).closest(".cartItem").attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$("#checkoutButton").on("click", function(){
		$("#checkoutForm").submit();
	});
});

function UpdateFurnitureStock(status, customerId, stockId){
	$.ajax({
		type: "POST",
		url: "Ajax/UpdateFurnitureStock.php",
		dataType: "json",
		data: {
			"status" : status,
			"customerId" : customerId,
			"stockId" : stockId
		},
		success: function(result) {
			LoadCartItems();
		},
		error: function(result) {

		}
	});
}

function LoadCartItems(){
	$("#cartItemsContainer").empty();

	var customerId = "<?php echo $_SESSION['customerId']; ?>";

	$.ajax({
		type: "POST",
		url: "Ajax/LoadCartItems.php",
		dataType: "json",
		data: {
			"customerId" : customerId
		},
		success: function(result) {
			var count = 0;
			var shippingFee = 0;
			var subtotalFee = 0;
			var commission = 5;
			var totalFee = 0;

			result.forEach(function(item){
				count++;
				// dimWeight += parseInt(item.totalWeight);

				var cartEntry = "<tr class='cartItem' name = '" + item.furnitureId + "'><td class=''>" + count + "</td><td class=''><a><img class='productImage' style='max-height: 140px;' src='Resources/Images/Furniture/" + item.furnitureId + "/" + item.image + "' alt=' ' class='img-responsive'></a></td><td class=''><div class='' style='text-align: -webkit-center'><div class='form-group form-group-options'><div class='input-group input-group-option' style='width: 130px;'><span class='removeCartItemButton input-group-addon input-group-addon-remove btn'><span class='fa fa-minus'></span></span><input type='text' class='cartItemQuantity form-control' style='text-align: center;' value='" + item.numItems + "'><span class='addCartItemButton input-group-addon btn'><span class='fa fa-plus'></span></span></div></div></div></td><td class='productName'>" + item.name + "</td><td class=''>Php&nbsp;";

				 cartEntry += $.number((item.price * (1 - item.discount / 100)), 2);

				cartEntry += "</td><td class='' style='text-align:  center;'>";

				if(item.wishlistId != null && item.wishlistId == -1){
					cartEntry += "<div class='addToWishlistButton red_button' data-toggle='modal' data-target='#cartdia1' style='width: 150px; margin-top: 10px;'><a href='#'>move to wishlist</a></div><br>";
				}

				 cartEntry += "<div class='removeFromCartButton red_button' data-toggle='modal' data-target='#cartdia2' style='width: 150px; background-color: #444; margin-top: 10px;'><a href='#'>remove from list</a></div>";

				 $("#cartItemsContainer").append(cartEntry);
			});

			$.ajax({
				type: "POST",
				url: "Ajax/LoadCartAggregates.php",
				dataType: "json",
				data: {
					"customerId" : customerId
				},
				success: function(result){
					result.forEach(function(item){
						var s = parseFloat(item.subtotal);
						s += (s * (commission / 100));

						subtotalFee += s;
						shippingFee += GetShippingFee(parseFloat(item.totalWeight));
					});

					totalFee = subtotalFee + shippingFee;

					$("#subtotalFeeText").attr("value", subtotalFee);
					$("#inputSubtotalFee").val(subtotalFee);
					$("#subtotalFeeText").text("Php " + $.number(subtotalFee, 2));

					$("#shippingFeeText").attr("value", shippingFee);
					$("#inputShippingFee").val(shippingFee);
					$("#shippingFeeText").text("Php " + $.number(shippingFee, 2));

					$("#inputTotalFee").val(totalFee);
					$("#totalFeeText").text("Php " + $.number(totalFee, 2));
				},
				error: function(result){

				}
			});

			//CalculateSubtotalFee(dimWeight);
		},
		error: function(result) {

		}
	});
}

// function CalculateSubtotalFee(dimWeight){
// 	var customerId = "<?php echo $_SESSION['customerId']; ?>";
//
// 	$.ajax({
// 		type: "POST",
// 		url: "Ajax/GetSubtotalCartPrice.php",
// 		dataType: "json",
// 		data: {
// 			"customerId" : customerId
// 		},
// 		success: function(result) {
// 			var subtotal = parseFloat(result[0].total);
// 			var tax = 7;	// 7 %
//
// 			$("#subtotalFeeText").attr("value", (subtotal + subtotal * (tax / 100)));
// 			$("#inputSubtotalFee").val(subtotal);
//
// 			subtotal = (subtotal + subtotal * (tax / 100)).toFixed(2).replace(/./g, function(c, i, a) {
// 			    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
// 			});
//
// 			$("#subtotalFeeText").text("Php " + subtotal);
// 			CalculateShippingFee(dimWeight);
// 		},
// 		error: function(result) {
// 			$("#subtotalFeeText").attr("value", 0);
// 			$("#subtotalFeeText").text("Php 0");
// 			CalculateShippingFee(dimWeight);
// 		}
// 	});
// }
//
// function CalculateShippingFee(totalWeight){
// 	$.ajax({
// 		type: "POST",
// 		url: "Ajax/CalculateShippingFee.php",
// 		data: {
// 			"dimWeight" : totalWeight
// 		},
// 		success: function(result) {
// 			$("#shippingFeeText").attr("value", result);
// 			$("#inputShippingFee").val(result);
//
// 			var shippingFee = parseFloat(result).toFixed(2).replace(/./g, function(c, i, a) {
// 			    return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
// 			});
//
// 			$("#shippingFeeText").text("Php " + shippingFee);
// 			CalculateTotalFee();
// 		},
// 		error: function(result) {
// 			$("#shippingFeeText").attr("value", 0);
// 			$("#shippingFeeText").text("Php 0");
// 			CalculateTotalFee();
// 		}
// 	});
// }
//
// function CalculateTotalFee(){
// 	var subtotalFee = parseFloat($("#subtotalFeeText").attr("value"));
// 	var shippingFee = parseFloat($("#shippingFeeText").attr("value"));
//
// 	$("#inputTotalFee").val(subtotalFee + shippingFee);
//
// 	var totalFee = (subtotalFee + shippingFee).toFixed(2).replace(/./g, function(c, i, a) {
// 			return i && c !== "." && ((a.length - i) % 3 === 0) ? ',' + c : c;
// 	});
// 	$("#totalFeeText").text("Php " + totalFee);
// }

function AddToWishlist(customerId, furnitureId, div){
	$.ajax({
		type: "POST",
    url: "Ajax/AddToWishlist.php",
		dataType: "json",
    data: {
			"customerId" : customerId,
			"furnitureId" : furnitureId
    },
    success: function(result) {
			// div.addClass("active");
			location.reload(true);
    },
    error: function(result) {

    }
	});
}

function RemoveFromCart(furnitureId){
	var customerId = "<?php echo $_SESSION['customerId']; ?>";

	$.ajax({
		type: "POST",
		url: "Ajax/RemoveCartItem.php",
		data: {
			"furnitureId" : furnitureId,
			"customerId" : customerId
		},
		success: function(result) {
			LoadCartItems();
		},
		error: function(result) {

		}
	});
}

function GetShippingFee(dimWeight){
	var feeTable = new Array(32);

	feeTable[0] = new Array(2);
	feeTable[0][0] = 0.5;
	feeTable[0][1] = 66.08;

	feeTable[1] = new Array(2);
	feeTable[1][0] = 1;
	feeTable[1][1] = 78.40;

	feeTable[2] = new Array(2);
	feeTable[2][0] = 2;
	feeTable[2][1] = 112;

	feeTable[3] = new Array(2);
	feeTable[3][0] = 3;
	feeTable[3][1] = 140;

	feeTable[4] = new Array(2);
	feeTable[4][0] = 4;
	feeTable[4][1] = 168;

	feeTable[5] = new Array(2);
	feeTable[5][0] = 5;
	feeTable[5][1] = 196;

	feeTable[6] = new Array(2);
	feeTable[6][0] = 6;
	feeTable[6][1] = 218.40;

	feeTable[7] = new Array(2);
	feeTable[7][0] = 7;
	feeTable[7][1] = 240.80;

	feeTable[8] = new Array(2);
	feeTable[8][0] = 8;
	feeTable[8][1] = 263.20;

	feeTable[9] = new Array(2);
	feeTable[9][0] = 9;
	feeTable[9][1] = 285.60;

	feeTable[10] = new Array(2);
	feeTable[10][0] = 10;
	feeTable[10][1] = 308;

	feeTable[11] = new Array(2);
	feeTable[11][0] = 11;
	feeTable[11][1] = 319.20;

	feeTable[12] = new Array(2);
	feeTable[12][0] = 12;
	feeTable[12][1] = 330.40;

	feeTable[13] = new Array(2);
	feeTable[13][0] = 13;
	feeTable[13][1] = 341.60;

	feeTable[14] = new Array(2);
	feeTable[14][0] = 14;
	feeTable[14][1] = 352.80;

	feeTable[15] = new Array(2);
	feeTable[15][0] = 15;
	feeTable[15][1] = 364;

	feeTable[16] = new Array(2);
	feeTable[16][0] = 16;
	feeTable[16][1] = 375.20;

	feeTable[17] = new Array(2);
	feeTable[17][0] = 17;
	feeTable[17][1] = 386.40;

	feeTable[18] = new Array(2);
	feeTable[18][0] = 18;
	feeTable[18][1] = 397.60;

	feeTable[19] = new Array(2);
	feeTable[19][0] = 19;
	feeTable[19][1] = 408.80;

	feeTable[20] = new Array(2);
	feeTable[20][0] = 20;
	feeTable[20][1] = 420;

	feeTable[21] = new Array(2);
	feeTable[21][0] = 21;
	feeTable[21][1] = 431.20;

	feeTable[22] = new Array(2);
	feeTable[22][0] = 22;
	feeTable[22][1] = 442.40;

	feeTable[23] = new Array(2);
	feeTable[23][0] = 23;
	feeTable[23][1] = 453.60;

	feeTable[24] = new Array(2);
	feeTable[24][0] = 24;
	feeTable[24][1] = 464.80;

	feeTable[25] = new Array(2);
	feeTable[25][0] = 25;
	feeTable[25][1] = 476;

	feeTable[26] = new Array(2);
	feeTable[26][0] = 26;
	feeTable[26][1] = 487.20;

	feeTable[27] = new Array(2);
	feeTable[27][0] = 27;
	feeTable[27][1] = 498.40;

	feeTable[28] = new Array(2);
	feeTable[28][0] = 28;
	feeTable[28][1] = 509.60;

	feeTable[29] = new Array(2);
	feeTable[29][0] = 29;
	feeTable[29][1] = 520.80;

	feeTable[30] = new Array(2);
	feeTable[30][0] = 30;
	feeTable[30][1] = 532;

	feeTable[31] = new Array(2);
	feeTable[31][0] = 31;
	feeTable[31][1] = 560;

	if(dimWeight == 0){
		return 0;
	}

	if(dimWeight <= feeTable[0][0]){
		return feeTable[0][1];
	}

	for(var i = 0; i < 32; i++){
		if(feeTable[i][0] >= dimWeight){
			return feeTable[i][1];
		}
	}

	return feeTable[31][1];
}
</script>

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
