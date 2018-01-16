<!DOCTYPE html>
<html lang="en">
<head>
<title>Wish List</title>
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
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="icon" href="images/icon.png">
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>	

	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
                        <li><a href="index.php">Home</a></li>
                       
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Wishlist</a></li>
						
					</ul>
				</div>
			</div>
		</div>

		<h3>My Wishlist</h3>
		<div class="row">        
        <table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr style="text-align: center;">
                <th>Item No.</th>	
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Availability</th>
            
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr class="">
                <td class="">1</td>
                <td class=""><a href="single.php"><img style="max-height: 140px;" src="./images/wishlist/1.jpg" alt=" " class="img-responsive"></a></td>
                <td class="">
                Comfy Chair
                </td>
                <td class=""> <span>9/03/2017</span></td>
                <td class=""><span style="color:green">In Stock</span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P850.00</span>

                </td>
                <td>
                    <div class="red_button" data-toggle="modal" data-target="#wishdia1" style="width: 150px; margin-top: 10px;"><a href="#">move to cart</a></div>

				  <!-- Modal-->
				  	<div id="wishdia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to move this item to your cart?</p>
							</div>
							<div class="modal-footer">
							  <a href="cart.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
				  	<br>
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
                <td class=""> <span>11/13/2017</span></td>
                <td class=""><span style="color:green">In Stock</span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P540.00</span>

                </td>
                <td>
                    <div class="red_button" data-toggle="modal" data-target="#wishdia1" style="width: 150px; margin-top: 10px;"><a href="#">move to cart</a></div>

				  <!-- Modal-->
				  	<div id="wishdia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to move this item to your cart?</p>
							</div>
							<div class="modal-footer">
							  <a href="cart.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
				  	<br>
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

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>
