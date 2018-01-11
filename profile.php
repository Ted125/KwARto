n<!DOCTYPE html>
<html lang="en">
<head>
	<title>KwARto | Web Application</title>
	<?php session_start();?>
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
			<div class="tabs_section_container">
				<div class="row">
					<div class="col" style="height: 30px;">

						<div class="breadcrumbs d-flex flex-row align-items-center">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="profile.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Profile</a></li>
							</ul>
						</div>

					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col">
							<div class="tabs_container">
								<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
									<li class="tab active" data-active-tab="tab_1"><span>Account Information</span></li>
									<li class="tab" data-active-tab="tab_2"><span>Transaction History</span></li>
									<li class="tab" data-active-tab="tab_3"><span>Account Settings</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">

							<!-- Tab Account Information -->

							<div id="tab_1" class="tab_container active" style="padding-left: 80px;">
								<h3>Account Information</h3>
								<div class="row">
									<div class="col-lg-4 text-center">
										<img <?php echo 'src='.$_SESSION['image'].'';?> >
										<form enctype="multipart/form-data" action="Controllers/UploadUserImage.php" method="POST">
											<input type="hidden" name="field" value="image"/>
											<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
											<input type="file" name="newData" />
											<input type="submit" value="Send File" />	
										</form>
									</div>
									<div class="col-lg-8">
										<div class="product_details">
											<form class="form-horizontal" role="form">
												<div class="form-group">
													<label class="col-lg-3 control-label">First name:</label>
													<div class="col-lg-8">
														<input class="form-control" type="text" <?php echo 'value='.$_SESSION['firstName'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Last name:</label>
													<div class="col-lg-8">
														<input class="form-control" type="text" <?php echo 'value='.$_SESSION['lastName'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Birthdate:</label>
													<div class="col-lg-8">
														<input class="form-control" type="date" <?php echo 'value='.$_SESSION['birthdate'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Email:</label>
													<div class="col-lg-8">
														<input class="form-control" disabled="" type="text" <?php echo 'value='.$_SESSION['email'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Password:</label>
													<div class="col-md-8">
														<input class="form-control" type="password" disabled="" value="**********">
													</div>
												</div>							          
												<div class="form-group">
													<label class="col-md-3 control-label"></label>
													<div class="col-md-8 text-right">
														<button type="button" class="btn add_to_cart_button red_button" style="color: white;" data-toggle="modal" data-target="#myModal">SAVE CHANGES</button>
														<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
															<div class="modal-dialog" role="document">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
																	</div>
																	<div class="modal-body text-left">
																		Are you sure you want to continue?

																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-danger" data-dismiss="modal">Save Changes</button>
																		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>	
								</div>
							</div>
						</div>

						<div id="tab_2" class="tab_container">
							<div class="row" style="padding-left: 80px;">
								<div class="col additional_info_col">
									<div class="tab_title additional_info_title">
										<h3>Transaction History</h3>
									</div>
									<table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
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
								</div>
							</div>
						</div>

						<div id="tab_3" class="tab_container" style="padding-left: 80px;">
							<h3>Account Settings</h3>
							<div  style="padding-left: 80px; margin-top: 20px;">
								<h5>Change Password:</h5>
								<div class="form-group">
									<label class="col-md-3 control-label">Password:</label>
									<div class="col-md-8">
										<input class="form-control" type="password" disabled="" value="11111122333">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-6 control-label">Change Password:</label>
									<div class="col-md-8">
										<input class="form-control" type="password" placeholder="********">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-6 control-label">Confirm New Password:</label>
									<div class="col-md-8">
										<input class="form-control" type="password" placeholder="********">
									</div>
								</div>

								<h5>Change E-mail Address:</h5>
								<div class="form-group">
									<label class="col-lg-3 control-label">Email:</label>
									<div class="col-lg-8">
										<input class="form-control" disabled="" type="text" <?php echo 'value='.$_SESSION['email'].'';?> >
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Change Email:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" placeholder="email@email.com">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Confirm New Email:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" placeholder="email@email.com">
									</div>
								</div>

								<div class="form-group" style="margin-bottom: 0px;">
									<label class="col-md-3 control-label"></label>
									<div class="col-md-8 text-right">
										<button type="button" class="btn add_to_cart_button red_button" style="color: white;" data-toggle="modal" data-target="#myModalsave">SAVE CHANGES</button>
										<div class="modal fade" id="myModalsave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
													</div>
													<div class="modal-body text-left">
														Are you sure you want to continue?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-danger" data-dismiss="modal">Save Changes</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"></label>
									<div class="col-md-8 text-right">
										<a href="Controllers/Logout.php"> <button type="button" class="btn add_to_cart_button red_button" style="color: white;" data-toggle="modal" data-target="#modalLogout">LOG OUT</button></a>
										<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
													</div>
													<div class="modal-body text-left">
														Are you sure you want to log out?
													</div>
													<div class="modal-footer">
														<div class="red_button shop_now_button"><a href="loginnew.php">Yes</a></div>
														<div class="red_button shop_now_button" style="color:white; background-color: #555" data-dismiss="modal">Cancel</div>
													</div>
												</div>
											</div>
										</div>
									</div>
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
