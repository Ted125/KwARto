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
	<?php include('Access/Header.php');?>
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
									<li class="tab" data-active-tab="tab_2"><span>Shipping & Billing Address</span></li>
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
										<img  id="blah" <?php echo 'src='.$_SESSION['image'].'';?> width = 200px height = 200px>
										<form enctype="multipart/form-data" action="Controllers/UploadUserImage.php" method="POST">
											<input type="hidden" name="field" value="image"/>
											<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
											<input onchange="readURL(this);" type="file" name="newData" />
											<input type="submit" value="Send File" />	
										</form>
									</div>
									<div class="col-lg-8">
										<div class="product_details">
											<form class="form-horizontal" role="form" action = "Controllers/UpdateCustomerMult.php" method="POST">
												<div class="form-group">
													<label class="col-lg-3 control-label">First name:</label>
													<div class="col-lg-8">
														<input class="form-control" type="text" name = "updateFName" <?php echo 'value='.$_SESSION['firstName'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Last name:</label>
													<div class="col-lg-8">
														<input class="form-control" type="text" name = "updateLName" <?php echo 'value='.$_SESSION['lastName'].'';?> >
													</div>
												</div>
												<div class="form-group">
													<label class="col-lg-3 control-label">Birthdate:</label>
													<div class="col-lg-8">
														<input class="form-control" type="date" name = "updateBDay" <?php echo 'value='.$_SESSION['birthdate'].'';?> >
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
																		<input type = 'Submit' value ='Save Changes' class="btn btn-danger"/>
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
										<h3>Shipping & Billing Address</h3>
									</div>
									
									<h3>Shipping Address:</h3>
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

							        <h3>Billing Address:</h3>
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
								</div>
							</div>
						</div>

						<div id="tab_3" class="tab_container" style="padding-left: 80px;">
							<h3>Account Settings</h3>
							<div  style="padding-left: 80px; margin-top: 20px;">
								<h5>Change Password:</h5>
								<form class="form-horizontal" role="form" action = "Controllers/UpdateUser.php" method="POST">
									<div class="form-group">
										<label class="col-md-3 control-label">Password:</label>
										<div class="col-md-8">
											<input class="form-control" type="password" disabled="" value="11111122333">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-6 control-label">Change Password:</label>
										<div class="col-md-8">
											<input class="form-control" type="hidden" name="field" value="password">
											<input class="form-control" type="password" placeholder="New Password" name="newData">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-6 control-label">Confirm New Password:</label>
										<div class="col-md-8">
											<input class="form-control" type="password" placeholder="Confirm New Password">
										</div>
									</div>

									<div class="form-group" style="margin-bottom: 0px;">
										<label class="col-md-3 control-label"></label>
										<div class="col-md-8 text-right">
											<button type="button" class="btn add_to_cart_button red_button" style="color: white;" data-toggle="modal" data-target="#myModalsavePass">CHANGE PASSWORD</button>
											<div class="modal fade" id="myModalsavePass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
														</div>
														<div class="modal-body text-left">
															Are you sure you want to continue?
														</div>
														<div class="modal-footer">
															<input type = 'Submit' value ='Save Changes' class="btn btn-danger"/>
															<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								<h5>Change E-mail Address:</h5>
								<form class="form-horizontal" role="form" action = "Controllers/UpdateUser.php" method="POST">
									<div class="form-group">
										<label class="col-lg-3 control-label">Email:</label>
										<div class="col-lg-8">
											<input class="form-control" disabled="" type="text" <?php echo 'value='.$_SESSION['email'].'';?> >
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-3 control-label">Change Email:</label>
										<div class="col-lg-8">
											<input class="form-control" type="hidden" name="field" value="email">
											<input class="form-control" type="text" placeholder="email@email.com" name="newData">
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
											<button type="button" class="btn add_to_cart_button red_button" style="color: white;" data-toggle="modal" data-target="#myModalsaveEmail">CHANGE EMAIL</button>
											<div class="modal fade" id="myModalsaveEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
														</div>
														<div class="modal-body text-left">
															Are you sure you want to continue?
														</div>
														<div class="modal-footer">
															<input type = 'Submit' value ='Save Changes' class="btn btn-danger"/>
															<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

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

//Preview Image
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah')
        .attr('src', e.target.result)
        .width(200)
        .height(200);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
</body>

</html>
