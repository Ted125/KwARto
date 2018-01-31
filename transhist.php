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
		<div class="row text-center">
		<h5 style="position: absolute; left: 0px;">Order # <span style="color: #d42d2d;">13213</span></h5>
		<h5 style="margin-left: 40%;">Placed On <span style="color: #d42d2d;">February 02, 2018</span></h5>
		<h5 style="position: absolute; right: 0px;">Total: <span style="color: #d42d2d;">P2,103.00</span></h5>
		</div>

		<div class="row">
			<br>
			<h4 style="position: absolute; left: 0px;"><i class="fa fa-gift"></i> Package <span style="color: #d42d2d;">01</span></h4>
			<h4 style="position: absolute; right: 0px;">Sold by: <span style="color: #d42d2d;">Manufacturer Inc.</span></h4>
		</div>
		<br>
		<br>
		<div class="">	
			<h4 ><i class="fa fa-ship"></i> Standard Shipping</h4>
			<h6 style="color: #d42d2d;">Delivery by Sat, 27 Jan - Tue, 6 Feb 2018</h6>
		</div>

		<div class="progress" style="margin-top: 30px;">
			<!-- processing -->
		 <!--  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
		  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; background-color: #d42d2d">
		    Processing
		  </div> -->
  		   <!--  Shipping -->
  		  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
		  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color: #d42d2d">
		    Shipping
		  </div>
		    <!-- Delivery -->
  		<!--   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
		  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; background-color: #d42d2d">
		    Delivery
		  </div> -->
		</div>

		<div class="card" style="padding: 40px 100px 40px 100px; width: 100%; border:none;">
 		 	<div class="card-block">
			    <h6 class="card-title">01/02/2018</h6>
			    <h6 class="card-title">Status: <span style="color: #d42d2d;">Pending</span></h6>
			    <p class="card-text">Thank you for shopping with KwARto! Your order has been received and is going through verification process. Next update will be sent to you via email soon.</p>
			</div>
		</div>

		<h5>Order List:</h5>

		<table class=" thead-dark table-hover" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr style="text-align: center;">
                <th width="5%"></th>	
                <th width="15%">Product Image</th>
                <th width="20%">Product Name</th>
                <th width="30%">Description</th>
            
                <th width="15%">Price</th>
                <th width="15%">Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="">
                <td class="">1</td>
                <td class=""><a href="single.php"><img style="max-height: 140px;" src="./images/wishlist/1.jpg" alt=" " class="img-responsive"></a></td>
                <td class="">
                Comfy Chair
                </td>
                <td class=""> <span>This product is a very nice product which you should really buy. Thanks This product is a very nice product which you should really buy. Thanks</span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P850.00</span>

                </td>
                <td>
					<div class="red_button" data-toggle="modal" data-target="#wishdia2" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>

				  <!-- Modal-->
				  	<div id="wishdia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to remove this item?</p>
							</div>
							<div class="modal-footer">
							  <a href="wishlist.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
                </td>
            </tr>
            <tr class="">
                <td class="">2</td>
                <td class=""><a href="single.php"><img style="max-height: 140px;" src="./images/wishlist/2.jpg" alt=" " class="img-responsive"></a></td>
                <td class="">
                Swivel Chair
                </td>
                <td class=""> <span>This product is also a very nice product which you should really buy. </span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P540.00</span>

                </td>
                <td>
					<div class="red_button" data-toggle="modal" data-target="#wishdia2" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>

				  <!-- Modal-->
				  	<div id="wishdia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to remove this item?</p>
							</div>
							<div class="modal-footer">
							  <a href="wishlist.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="row" style="margin-left: 20px; margin-top: 10px;">

    	<div class="card" style="width: 15rem; padding: 20px;">
		    <h5 class="card-title">Delivery Address</h5>
		    <p class="card-text">G1-09A Tabay, Tayud, Lilo-an, Cebu, Cebu-Liloan-Tayud 6002</p>
		    <p class="card-text">+63 9159831382</p>
		</div>

    	<div class="card" style="margin-left: 20px; width: 15rem; padding: 20px; ">
		    <h5 class="card-title">Billing Address</h5>
		    <p class="card-text">G1-09A Tabay, Tayud, Lilo-an, Cebu, Cebu-Liloan-Tayud 6002</p>
		    <p class="card-text">+63 9159831382</p>
		</div>

		<div class="card" style="margin-left: 20px; width: 35rem; padding: 20px;">
		  <div class="card-block">
		    <h5 class="card-title">Total Summary</h5>
		    <div class="row">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Sub-total:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">P2.100.00</p>
			</div>
			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Shipping Fee:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">P0.00</p>
			</div>
			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Promotion:</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">P0.00</p>
			</div>

			<div class="row" style="margin-top: -10px;">
			    <p class="card-text" style="position: relative;padding-left: 30px; left: 0px;">Total (VAT applied where applicable):</p>
			    <p class="card-text" style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">P0.00</p>
			</div>

			<div class="row" style="margin-top: -10px;">
			    <p style="position: relative;padding-left: 30px; left: 0px;">To be paid through:</p>
			    <p style="position: absolute; padding-right: 30px; right: 0px; color: #d42d2d;">Cash on Delivery</p>
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
