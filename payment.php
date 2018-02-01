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
	<?php include('Access/Header.php');?>
<link rel="icon" href="images/icon.png">

<style type="text/css">

 	.steps-form-2 {
	  display: table;
	  width: 100%;
	  position: relative;
	}
	.steps-form-2 .steps-row-2 {
    display: table-row;
	}
    .steps-form-2 .steps-row-2:before {
      top: 14px;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 100%;
      height: 2px;
      background-color: #d42d2d; }
    .steps-form-2 .steps-row-2 .steps-step-2 {
      display: table-cell;
      text-align: center;
      position: relative; }
      .steps-form-2 .steps-row-2 .steps-step-2 p {
        margin-top: 0.5rem; }
      .steps-form-2 .steps-row-2 .steps-step-2 button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important; }
      .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 {
        width: 70px;
        height: 70px;
        border: 2px solid #d42d2d;
        background-color: white !important;
        color: #d42d2d !important;
        border-radius: 50%;
        padding: 22px 18px 15px 18px;
        margin-top: -22px; }
        .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2:hover {
          border: 2px solid #d42d2d;
          color: #d42d2d !important;
          background-color: white !important; }
        .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 .fa {
          font-size: 1.7rem; }
</style>

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
		<input id = "inputSellerId" name = "sellerId" type = "hidden">
	</form>

	<div class="blogs">


	<h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Payment</strong></h2>

	<div class="steps-form-2">
	    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
	        <div class="steps-step-2">
	            <a href="#step-4" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Ship To"><i class="fa fa-map-o" aria-hidden="true"></i></a>
	        </div>
	        <div class="steps-step-2">
	            <a href="#step-5" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Payment Method"><i class="fa fa-money" aria-hidden="true"></i></a>
	        </div>
	        <div class="steps-step-2">
	            <a href="#step-6" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Almost There"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></a>
	        </div>
	        <div class="steps-step-2">
	            <a href="#step-7" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
	        </div>
	    </div>
	</div>

	<form role="form" action="" method="post">
	    <div class="row setup-content-2" id="step-4">
	        <div class="col-md-12">
	            <h3 class="font-bold pl-0 my-4"><strong>Ship To</strong></h3>

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
					    <h6 class="form-check-label" for="diffAd"><input type="checkbox" class="form-check-input" id="diffAd"> 	Bill to a different address</h6>
					</div>
		        </form>
	            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
	        </div>
	    </div>
	    <div class="row setup-content-2" id="step-5">
	        <div class="col-md-12">
	            <h3 class="font-bold pl-0 my-4"><strong>Select Payment Method</strong></h3>
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
								<!-- <a class=""  data-toggle="modal" data-target="#credmodal" style="text-decoration: none; color: #d42d2d;" href="#">Select</a> -->
								<form method="POST">
								  <script
								    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
								    data-key="pk_test_PQyJ2oQLBknBavmRzO2ityzu"
								    data-amount="2000"
								    data-name="Demo Site"
								    data-description="2 widgets ($20.00)"
								    data-image="">
								  </script>
								</form>
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
				<br>

	            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
	            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
	        </div>
	    </div>
	    <div class="row setup-content-2" id="step-6">
	        <div class="col-md-12">
	            <h3 class="font-bold pl-0 my-4"><strong>Almost there</strong></h3>
	            <div class="form-group">
	                <input type="checkbox" id="checkbox111">
	                <label for="checkbox111">I have read and agree to the <a style="color: #d42d2d;" href="privacy.php"> privacy policy</label>
	            </div>
	            <div class="form-group">
	                <input type="checkbox" id="checkbox112">
	                <label for="checkbox112" style="color: black;">I have read and agree to the <a style="color: #d42d2d;" href="terms.php"> terms and conditions</label>
	            </div>
	            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
	            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
	        </div>
	    </div>
	    <div class="row setup-content-2" id="step-7">
	        <div class="col-md-12">
	            <h3 class="font-bold pl-0 my-4"><strong>Finish</strong></h3>
	            <p class="text-center">I have reviewed all of the entries.</p>
	            <h2 class="text-center font-bold my-4">Place Order!</h2>
	            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
	            <button class="btn btn-rounded float-right" style="color: white; background-color: #d42d2d;" type="submit">Submit</button>
	        </div>
	    </div>
	</form>

		</div>
	</div>

	<!-- BENEFIT HERE-->
	<?php include('Access/Benefit.php');?>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>
	</div>



	<!-- MOBILE VIEW HERE-->
	<?php include('Access/MobileTab.php');?>
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
	        	<a><button id = "codPlaceOrderButton" class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Next Step</button></a>
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
	        	<!-- <form id = "creditCardForm" class="form-horizontal" role="form" method = "POST">
					    <fieldset>
					      <div class="form-group">
					        <label class="col-sm-6 control-label" for="card-holder-name">Name on Card</label>
					        <div class="col-sm-12">
					          <input type="text" class="form-control" id="card-holder-name" placeholder="Card Holder's Name">
					        </div>
					      </div>
					      <div class="form-group">
					        <label class="col-sm-6 control-label" for="card-number" data-stripe="number">Card Number</label>
					        <div class="col-sm-12">
					          <input type="text" class="form-control" id="card-number" placeholder="Debit/Credit Card Number">
					        </div>
					      </div>
					      <div class="form-group">
					        <label class="col-sm-6 control-label" for="expiry-month">Expiration Date</label>
					        <div class="col-sm-12">
					          <div class="row">
					            <div class="col-xs-12">
					              <select class="form-control col-sm-12" id="expiry-month" style="margin-left: 20px;" data-stripe="exp-month">
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
					              <select class="form-control" style="margin-left: 30px;" data-stripe="exp-year">
					                <option>2018</option>
					                <option>2019</option>
					                <option>2020</option>
					                <option>2021</option>
					                <option>2022</option>
					                <option>2023</option>
					                <option>2024</option>
					                <option>2025</option>
					                <option>2026</option>
					                <option>2027</option>
					                <option>2028</option>
					              </select>
					            </div>
					          </div>
					        </div>
					      </div>
					      <div class="form-group">
					        <label class="col-sm-12 control-label" for="cvc" data-stripe="cvc">Card CVC</label>
					        <div class="col-sm-12">
					          <input type="text" class="form-control" id="cvv" placeholder="Security Code">
					        </div>
					      </div>
					    </fieldset>
					  </form> -->
						<form method="POST" id="payment-form">
						  <span class="payment-errors"></span>

						  <div class="row">
						    <label>
						      <span>Card Number</span>
						      <input type="text" data-stripe="number">
						    </label>
						  </div>

						  <div class="row">
						    <label>
						      <span>CVC</span>
						      <input type="text" data-stripe="cvc">
						    </label>
						  </div>

						  <div class="row">
						    <label>
						      <span>Expiration (MM/YYYY)</span>
						      <input type="text" data-stripe="exp-month">
						    </label>
						    <input type="text" data-stripe="exp-year">
						  </div>

						  <button type="submit">Buy Now</button>
						</form>
						<p id = "creditCardError"></p>
			  <p>By placing your order, you agree to KwARto's <a href="privacy.php" style="color: red;">privacy policy</a> and <a href="terms.php" style="color: red;">terms of use</a> </p>
	        </div>
	        <!-- <div class="modal-footer">
	        	<a><button id = "creditCardButton" class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Next Step</button></a>
	        </div> -->
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
<script src="https://js.stripe.com/v3/"></script>

<script src="js/custom.js"></script>
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

		$.ajax({
			type: "POST",
			url: "Ajax/LoadCartAggregates.php",
			dataType: "json",
			data: {
				"customerId" : customerId
			},
			success: function(result){
				var shippingFee = 0;
				var subtotalFee = 0;
				var commission = 5;
				var totalFee = 0;

				result.forEach(function(item){
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

					subtotalFee = parseFloat(item.subtotal);
					subtotalFee += (subtotalFee * (commission / 100));
					shippingFee = GetShippingFee(parseFloat(item.totalWeight));
					totalFee = subtotalFee + shippingFee;

					$("#inputSubtotalFee").val(subtotalFee);
					$("#inputShippingFee").val(shippingFee);
					$("#inputTotalFee").val(totalFee);

					$("#inputCustomerId").val(customerId);
					$("#inputPaymentId").val(1);

					$("#inputSellerId").val(item.sellerId);

					AddOrder();
				});
			},
			error: function(result){
				console.log(result.responseText);
			}
		});
	}

	function AddOrder(){
		var customerId = "<?php echo $_SESSION['customerId']; ?>";

		$.ajax({
			type: "POST",
			url: "Ajax/AddOrder.php",
			dataType: "json",
			data: {
				"orderNumber" : $("#inputOrderNumber").val(),
				"shippingContactPerson" : $("#inputShippingContactPerson").val(),
				"shippingAddress" : $("#inputShippingAddress").val(),
				"shippingLocationId" : $("#inputShippingLocationId").val(),
				"shippingContactNumber" : $("#inputShippingContactNumber").val(),
				"billingContactPerson" : $("#inputBillingContactPerson").val(),
				"billingAddress" : $("#inputBillingAddress").val(),
				"billingLocationId" : $("#inputBillingLocationId").val(),
				"billingContactNumber" : $("#inputBillingContactNumber").val(),
				"discount" : $("#inputDiscount").val(),
				"tax" : $("#inputTax").val(),
				"subtotalFee" : $("#inputSubtotalFee").val(),
				"shippingFee" : $("#inputShippingFee").val(),
				"totalFee" : $("#inputTotalFee").val(),
				"customerId" : customerId,
				"paymentId" : $("#inputPaymentId").val(),
				"sellerId" : $("#inputSellerId").val()
			},
			success: function(result){
				console.log("Successfully added order!");
				window.location.replace("complete.php");
			},
			error: function(result){
				console.log(result.responseText);
				window.location.replace("complete.php");
			}
		});
	}

	function GenerateOrderNumber(){
		var milliseconds = (new Date).getTime().toString();
		$("#inputOrderNumber").val(milliseconds);
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
<script type="text/javascript">
	// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
  var navListItems = $('div.setup-panel-2 div a'),
          allWells = $('.setup-content-2'),
          allNextBtn = $('.nextBtn-2'),
          allPrevBtn = $('.prevBtn-2');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
          $item.addClass('btn-amber');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

          prevStepSteps.removeAttr('disabled').trigger('click');
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content-2"),
          curStepBtn = curStep.attr("id"),
          nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i< curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepSteps.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel-2 div a.btn-amber').trigger('click');
});

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
