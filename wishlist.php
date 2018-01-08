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
									<a href="cart.php">
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
                <td class=""><a href="single.php"><img style="max-height: 140px;" src="http://www.zurifurniture.com/common/images/products/large/medici_chair_red2.jpg" alt=" " class="img-responsive"></a></td>
                <td class="">
                Comfy Chair
                </td>
                <td class=""> <span>9/03/2017</span></td>
                <td class=""><span style="color:green">In Stock</span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P850.00</span>

                </td>
                <td>
                    <div class="red_button" style="width: 200px;">
                        <a href="#">Add to Cart</a>
                    </div>
                    <br>
                    <div class="red_button" style="background-color: #555; margin-top: 10px; width: 200px;">
                        <a href="#">Remove from List</a>
                    </div>
                </td>
            </tr>
            <tr class="">
                <td class="">2</td>
                <td class=""><a href="single.php"><img style="max-height: 140px;" src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" alt=" " class="img-responsive"></a></td>
                <td class="">
                Swivel Chair
                </td>
                <td class=""> <span>11/13/2017</span></td>
                <td class=""><span style="color:green">In Stock</span></td>
                <td class="" style="text-align:  center;">	
                    <span style="color:red">P540.00</span>

                </td>
                <td>
                    <div class="red_button" style="width: 200px;">
                        <a href="#">Add to Cart</a>
                    </div>
                    <br>
                    <div class="red_button" style="background-color: #555; margin-top: 10px; width: 200px;">
                        <a href="#">Remove from List</a>
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
