n<!DOCTYPE html>
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

		<h2><i class="fa fa-shopping-cart" aria-hidden="true"></i> Order Summary</h2>
		<h4>Your shopping cart contains: <span style="color: #d42d2d">2</span> Products</h4>
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
					<td class=""><a href="single.php"><img style="max-height: 140px;" src="./images/wishlist/1.jpg" alt=" " class="img-responsive"></a></td>
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
						<div class="red_button" data-toggle="modal" data-target="#cartdia1" style="width: 150px; margin-top: 10px;"><a href="#">move to wishlist</a></div>
							  <!-- Modal-->
							  	<div id="cartdia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
									<div role="document" class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
										  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
										  <p>Are you sure you want to move this item to your wishlist?</p>
										</div>
										<div class="modal-footer">
										  <a href="wishlist.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
										  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
										</div>
									  </div>
									</div>
							  	</div>
							  	<br>
								<div class="red_button" data-toggle="modal" data-target="#cartdia2" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>
							  <!-- Modal-->
							  	<div id="cartdia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
									<div role="document" class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
										  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
										  <p>Are you sure you want to remove this item from your cart?</p>
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
								<div class="red_button" data-toggle="modal" data-target="#cartdia1" style="width: 150px; margin-top: 10px;"><a href="#">move to wishlist</a></div>
							  <!-- Modal-->
							  	<div id="cartdia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
									<div role="document" class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
										  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
										  <p>Are you sure you want to move this item to your wishlist?</p>
										</div>
										<div class="modal-footer">
										  <a href="wishlist.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
										  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
										</div>
									  </div>
									</div>
							  	</div>
							  	<br>
								<div class="red_button" data-toggle="modal" data-target="#cartdia2" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>
							  <!-- Modal-->
							  	<div id="cartdia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
									<div role="document" class="modal-dialog">
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
										  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
										  <p>Are you sure you want to remove this item from your cart?</p>
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
				</tbody></table>

				<div style="margin-top: 20px;" class="text-right">				
					<h5>Subtotal: <span style="color: #d42d2d">P1,390.00</span> + 7% Fee</h5>
					<h5>Transaction Fee: <span style="color: #d42d2d">P97.30</h5>
					<h4>Your total balance is: <span style="color: #d42d2d">P1,487.30</span></h4>
					<div class="red_button" style="width: 150px"><a href="payment.php">Proceed to Checkout</a></div>
				</div>

				
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

</div>

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
