n<!DOCTYPE html>
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
</head>

<body>

<div class="super_container">

	<header class="header trans_300">
		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="top_nav_left">Sign Up Now and avail free shipping off your first purchase!</div>
					</div>
					
				</div>
			</div>
		</div>

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><img style="max-width: 150px;" src="images/newlogo.png"></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">home</a></li>
								<li><a href="categories.php">categories</a></li>
								<li><a href="about.php">about us</a></li>
								<li><a href="contact.php">contact</a></li>
							</ul>
							<ul class="navbar_user">

								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>

								</li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="profile.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Profile</a></li>
					</ul>
				</div>

			</div>
		</div>

		<h2>Account Information</h2>
		<div class="row">
			<div class="col-lg-4 text-center">
				<img src="http://via.placeholder.com/300">
				<div class="red_button add_to_cart_button" style="margin-top: 10px;"><a href="#">Change Photo</a></div>
			</div>
			<div class="col-lg-8">
				<div class="product_details">
					<form class="form-horizontal" role="form">
			          <div class="form-group">
			            <label class="col-lg-3 control-label">First name:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" value="Jane">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Last name:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" value="Doe">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Address:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="text" value="123 St. ABC City, Some Country">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Birthdate:</label>
			            <div class="col-lg-8">
			              <input class="form-control" type="date" value="">
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Email:</label>
			            <div class="col-lg-8">
			              <input class="form-control" disabled="" type="text" value="janedoe@gmail.com">
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
			          <div class="form-group">
			            <label class="col-lg-3 control-label">Gender:</label>
			            <div class="col-lg-8">
			              <div class="ui-select">
			                <select id="user_time_zone" class="form-control">
			                  <option value="Hawaii">Male</option>
			                  <option value="Alaska">Female</option>
			                  <option value="Alaska">Other</option>
			                </select>
			              </div>
			            </div>
			          </div>
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
