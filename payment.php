<!DOCTYPE html>
<?php
	session_start();
?>
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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="icon" href="images/icon.png">
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center" style="margin-bottom: 10px;">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="payment.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Payment</a></li>
					</ul>
				</div>

			</div>
		</div>
	<form id = "addOrderForm" action = "Controllers/AddOrder.php" method = "post">
		<input id = "inputOrderNumber" name = "orderNumber" type = "hidden">
		<input id = "inputShippingContactPerson" name = "shippingContactPerson" type = "hidden">
		<input id = "inputShippingAddress" name = "shippingAddress" type = "hidden">
		<input id = "inputShippingLocationId" name = "shippingLocationId" type = "hidden">
		<input id = "inputShippingContactNumber" name = "shippingContactNumber" type = "hidden">
		<input id = "inputBillingContactPerson" name = "billingContactPerson" type = "hidden">
		<input id = "inputBillingAddress" name = "billingAddress" type = "hidden">
		<input id = "inputBillingLocationId" name = "billingLocationId" type = "hidden">
		<input id = "inputBillingContactNumber" name = "billingContactNumber" type = "hidden">
		<input id = "inputDiscount" name = "discount" type = "hidden">
		<input id = "inputTax" name = "tax" type = "hidden">
		<input id = "inputSubtotalFee" name = "subtotalFee" type = "hidden">
		<input id = "inputShippingFee" name = "shippingFee" type = "hidden">
		<input id = "inputTotalFee" name = "totalFee" type = "hidden">
		<input id = "inputCustomerId" name = "customerId" type = "hidden">
		<input id = "inputPaymentId" name = "paymentId" type = "hidden">
	</form>

	<div class="blogs">
		<div class="container">
			<h2><i class="fa fa-money" aria-hidden="true"></i> Payment</h2>
			<br>
			<h3>Ship to:</h3>
	          <form>
	          	<div class="form-group">
	              <p>Please review all information before proceeding.</p>
	            </div>
	            <div class="form-group">
	              <label>Contact Person</label>
	              <input id = "shipContactPerson" type="text" placeholder = "Enter full name" class="form-control">
	            </div>
							<div class="form-group">
	              <label>Mobile Number</label>
	              <input id = "shipContactNumber" type="text" placeholder = "Mobile Number or Phone Number" class="form-control">
	            </div>
	            <div class="form-group">
	              <label>Complete Address</label>
	              <textarea id = "shipAddress" class="form-control" rows="3" id="address" placeholder = "(House Number, Building and Street Name)"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Province</label>
	              <select id = "selectProvince" name="account" class="form-control">
	              </select>
	            </div>
	            <div class="form-group">
	              <label>City/Municipality</label>
	              <select id = "selectCity" name="account" class="form-control">
	              </select>
	            </div>
	            <div class="form-group">
	              <label>Barangay</label>
	              <select id = "selectBarangay" name="account" class="form-control">
	              </select>
	            </div>
	            <div class="form-check" style="margin-left: 20px;">
				    <!-- <input type="checkbox" class="form-check-input" id="diffAd">
				    <label class="form-check-label" for="diffAd">Bill to a different address</label> -->
				</div>
	        </form>


			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h3>Select Your Payment Method</h3>
					</div>
				</div>
			</div>
			<div class="row blogs_container text-center">
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background" style="background-image:url(./images/payment/cash.jpg)"></div>
							<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Cash On Delivery</h4>
								<span class="blog_meta">Pay to courier upon receiving</span>
								<a class="" data-toggle="modal" data-target="#codmodal" style="text-decoration: none; color: #d42d2d;" href="#">Select</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background" style="background-image:url(http://www.pvhc.net/img138/vhfubfultznbnkaozkjh.png)"></div>
							<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Credit or Debit Card</h4>
								<span class="blog_meta">Only major cards accepted</span>
								<a class=""  data-toggle="modal" data-target="#credmodal" style="text-decoration: none; color: #d42d2d;" href="#">Select</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 blog_item_col">
						<div class="blog_item">
							<div class="blog_background" style="background-image:url(./images/payment/paypal.jpg)"></div>
							<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
								<h4 class="blog_title">Paypal</h4>
								<span class="blog_meta">You will be redirected</span>
								<a class="" style="text-decoration: none; color: #d42d2d;" href="https://www.paypal.com/PH">Select</a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>

	</div>


	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Within the Philippines</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cash on delivery</h6>
							<p>Pay upon receiving your item</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>14 days return</h6>
							<p>See return policy for details</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Open Always</h6>
							<p>24/7</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="terms.php">Terms of Use</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. <a href="#">KwARto</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- MODAL CONTENTS -->
	<!-- CASH ON DELIVERY -->
	<div id="codmodal" tabindex="-1" role="dialog" aria-labelledby="codmodal" aria-hidden="true" class="modal fade text-left">
	    <div role="document" class="modal-dialog modal-bigger" >
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 id="codmodal" class="modal-title">CASH ON DELIVERY</h4>
	          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	        </div>
	        <div class="modal-body">
	        	<p>Pay using our Cash On Delivery service. Full payment is done directly to the courier upon delivery. No partial down payments required</p>

	        	<br>
	        	<p>By placing your order, you agree to KwARto's <a href="privacy.php" style="color: red;">privacy policy</a> and <a href="terms.php" style="color: red;">terms of use</a> </p>
	        </div>
	        <div class="modal-footer">
	        	<a><button id = "codPlaceOrderButton" class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Place Order</button></a>
	        </div>
	    </div>
  		</div>
	</div>
  	<!-- END OF CASH ON DELIVERY -->

	<!-- CREDIT CARD -->
	<div id="credmodal" tabindex="-1" role="dialog" aria-labelledby="credmodal" aria-hidden="true" class="modal fade text-left">
	    <div role="document" class="modal-dialog modal-bigger" >
	      <div class="modal-content">
	        <div class="modal-header">
	          <h4 id="credmodal" class="modal-title">CREDIT OR DEBIT</h4>
	          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	        </div>
	        <div class="modal-body">
	        	<form class="form-horizontal" role="form">
			    <fieldset>
			      <div class="form-group">
			        <label class="col-sm-6 control-label" for="card-holder-name">Name on Card</label>
			        <div class="col-sm-12">
			          <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-6 control-label" for="card-number">Card Number</label>
			        <div class="col-sm-12">
			          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-6 control-label" for="expiry-month">Expiration Date</label>
			        <div class="col-sm-12">
			          <div class="row">
			            <div class="col-xs-12">
			              <select class="form-control col-sm-12" name="expiry-month" id="expiry-month" style="margin-left: 20px;">
			                <option>January</option>
			                <option value="01">January</option>
			                <option value="02">February</option>
			                <option value="03">March</option>
			                <option value="04">April</option>
			                <option value="05">May</option>
			                <option value="06">June</option>
			                <option value="07">July</option>
			                <option value="08">August</option>
			                <option value="09">September</option>
			                <option value="10">October</option>
			                <option value="11">November</option>
			                <option value="12">December</option>
			              </select>
			            </div>
			            <div class="col-xs-12">
			              <select class="form-control" name="expiry-year" style="margin-left: 30px;">
			                <option value="13">2018</option>
			                <option value="14">2019</option>
			                <option value="15">2020</option>
			                <option value="16">2021</option>
			                <option value="17">2022</option>
			                <option value="18">2023</option>
			                <option value="19">2024</option>
			                <option value="20">2025</option>
			                <option value="21">2026</option>
			                <option value="22">2027</option>
			                <option value="23">2028</option>
			              </select>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="col-sm-12 control-label" for="cvv">Card CVV</label>
			        <div class="col-sm-12">
			          <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
			        </div>
			      </div>
			    </fieldset>
			  </form>
			  <p>By placing your order, you agree to KwARto's <a href="privacy.php" style="color: red;">privacy policy</a> and <a href="terms.php" style="color: red;">terms of use</a> </p>
	        </div>
	        <div class="modal-footer">
	        	<a><button class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Place Order</button></a>
	        </div>
	    </div>
  		</div>
	</div>
  	<!-- END OF CREDIT CARD -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
</body>

</html>
<script type = "text/javascript">
	$(document).ready(function(){
		LoadProvinces(-1);

		$("#selectProvince").on("click", ".provinceOption", function(){
			LoadCities($("#selectProvince").find(":selected").val());
		});

		$("#selectCity").on("click", ".cityOption", function(){
			LoadBarangays($("#selectCity").find(":selected").val());
		});

		$("#codPlaceOrderButton").on("click", function(){
			PlaceOrder();
		});
	});

	function LoadProvinces(parentLocationId){
		$("#selectProvince").empty();

		$.ajax({
			type: "POST",
	    url: "Ajax/LoadLocationUnder.php",
			dataType: "json",
	    data: {
				"parentId" : parentLocationId
	    },
	    success: function(result) {
				$("#selectProvince").show();
				$("#selectProvince option:selected").prop("selected", false);

				result.forEach(function(item){
					var option = "<option class = 'provinceOption' value = " + item.locationId + ">" + item.name + "</option>";
					$("#selectProvince").append(option);
				});

				$("#selectProvince option:first").prop("selected", "selected");
				LoadCities($("#selectProvince").find(":selected").val());
	    },
	    error: function(result) {
				$("#selectProvince").hide();
	    }
		});
	}

	function LoadCities(parentLocationId){
		$.ajax({
			type: "POST",
	    url: "Ajax/LoadLocationUnder.php",
			dataType: "json",
	    data: {
				"parentId" : parentLocationId
	    },
	    success: function(result) {
				$("#selectCity").show();
				$("#selectCity option:selected").prop("selected", false);

				result.forEach(function(item){
					var option = "<option class = 'cityOption' value = " + item.locationId + ">" + item.name + "</option>";
					$("#selectCity").append(option);
				});

				$("#selectCity option:first").prop("selected", "selected");
				LoadBarangays($("#selectCity").find(":selected").val());
	    },
	    error: function(result) {
				$("#selectCity").hide();
	    }
		});
	}

	function LoadBarangays(parentLocationId){
		$.ajax({
			type: "POST",
	    url: "Ajax/LoadLocationUnder.php",
			dataType: "json",
	    data: {
				"parentId" : parentLocationId
	    },
	    success: function(result) {
				$("#selectBarangay").show();
				$("#selectBarangay option:selected").prop("selected", false);

				result.forEach(function(item){
					var option = "<option class = 'barangayOption' value = " + item.locationId + ">" + item.name + "</option>";
					$("#selectBarangay").append(option);
				});

				$("#selectBarangay option:first").prop("selected", "selected");
	    },
	    error: function(result) {
				$("#selectBarangay").hide();
	    }
		});
	}

	function PlaceOrder(){
		var customerId = "<?php echo $_SESSION['customerId']; ?>";
		var subtotalFee = "<?php echo $_POST['subtotalFee']; ?>";
		var shippingFee = "<?php echo $_POST['shippingFee']; ?>";
		var totalFee = "<?php echo $_POST['totalFee']; ?>";

		GenerateOrderNumber();

		$("#inputShippingContactPerson").val($("#shipContactPerson").val());
		$("#inputShippingContactNumber").val($("#shipContactNumber").val());
		$("#inputShippingAddress").val($("#shipAddress").val());
		$("#inputShippingLocationId").val($("#selectBarangay").find(":selected").val());

		$("#inputBillingContactPerson").val($("#shipContactPerson").val());
		$("#inputBillingContactNumber").val($("#shipContactNumber").val());
		$("#inputBillingAddress").val($("#shipAddress").val());
		$("#inputBillingLocationId").val($("#selectBarangay").find(":selected").val());

		$("#inputDiscount").val(0);
		$("#inputTax").val(7);

		$("#inputSubtotalFee").val(subtotalFee);
		$("#inputShippingFee").val(shippingFee);
		$("#inputTotalFee").val(totalFee);

		$("#inputCustomerId").val(customerId);
		$("#inputPaymentId").val(1);

		$("#addOrderForm").submit();
	}

	function GenerateOrderNumber(){
		var milliseconds = (new Date).getTime().toString();
		$("#inputOrderNumber").val(milliseconds);
	}
</script>
