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

		<table class="table-bordered thead-dark table-hover" style="width: 100%; margin-left: 30px; margin-top: 20px;">
										<thead>
											<tr style="text-align: center;">
												<th>Order ID</th>	
												<th>Date</th>
												<th>Status</th>
												<th>Action</th>
												<th></th>
											</tr>
										</thead>
										<tbody class="text-center">
											<tr class="">
												<td class="">#213535</td>
												<td class="">December 23, 2017</td>
												<td class="" style="color: #FF6347;">Pending</td>
												<td>
													<div class="red_button" data-toggle="modal" data-target="#transhist1" style="width: 200px;">
														<a href="#">View Details</a>
													</div>

													<div class="modal fade" id="transhist1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														<div class="modal-dialog" role="document" style="min-width: 800px!important;">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
																	<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
																</div>
																<div class="modal-body text-left">
																	<div class="row" style="margin-bottom: 10px; padding-left: 10px;">
																		<span>Status:<span style="color: #FF6347"> Pending</span></span>
																	</div>

																	<h5 style="color: #555">Order details:</h5>
																	<p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

																	<div class="recent-activities card">
																		<div class="card-header">
																			<h3 class="h4">Order Summary</h3>
																		</div>
																		<div class="card-body no-padding">
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/sofa-chair-512.png"></div>
																						<div class="date"><span>P1,250.00 </span><span class="text-info">( 2 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Modern Table</h5>
																						<p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://image.freepik.com/free-icon/kitchen-chair_318-63175.jpg  "></div>
																						<div class="date"><span>P400.00 </span><span class="text-info">( 1 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Wooden Stool</h5>
																						<p>This is the description of the stool. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://cdn.onlinewebfonts.com/svg/img_487298.png"></div>
																						<div class="date"><span>P890.00 </span><span class="text-info">( 1 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Chic Table Piece</h5>
																						<p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<br>
																	<div class="text-right"><h3 class="h4">Total: P3,790</h3></div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
											<tr class="">
												<td class="">#212312</td>
												<td class="">December 22, 2017</td>
												<td class="" style="color: #28a745;">Completed</td>
												<td>
													<div class="red_button" data-toggle="modal" data-target="#transhist2" style="width: 200px;">
														<a href="#">View Details</a>
													</div>

													<div class="modal fade" id="transhist2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														<div class="modal-dialog" role="document" style="min-width: 800px!important;">
															<div class="modal-content">
																<div class="modal-header">
																	<h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
																	<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
																</div>
																<div class="modal-body text-left">
																	<div class="row" style="margin-bottom: 10px; padding-left: 10px;">
																		<span>Status:<span style="color: #28a745"> Completed</span></span>
																	</div>

																	<h5 style="color: #555">Order details:</h5>
																	<p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

																	<div class="recent-activities card">
																		<div class="card-header">
																			<h3 class="h4">Order Summary</h3>
																		</div>
																		<div class="card-body no-padding">
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/sofa-chair-512.png"></div>
																						<div class="date"><span>P1,250.00 </span><span class="text-info">( 2 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Modern Table</h5>
																						<p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://image.freepik.com/free-icon/kitchen-chair_318-63175.jpg  "></div>
																						<div class="date"><span>P400.00 </span><span class="text-info">( 1 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Wooden Stool</h5>
																						<p>This is the description of the stool. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																			<div class="item">
																				<div class="row" style="margin-bottom: 0px;">
																					<div class="col-4 date-holder text-right">
																						<div class="text-center"><img style="max-width: 100px;" src="https://cdn.onlinewebfonts.com/svg/img_487298.png"></div>
																						<div class="date"><span>P890.00 </span><span class="text-info">( 1 )</span></div>
																					</div>
																					<div class="col-8 content">
																						<h5>Chic Table Piece</h5>
																						<p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<br>
																	<div class="text-right"><h3 class="h4">Total: P3,790</h3></div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

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
