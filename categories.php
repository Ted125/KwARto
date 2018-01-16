<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link rel="icon" href="images/icon.png">
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Categories</a></li>
						<li class="active"><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Living Room</a></li>
					</ul>
				</div>

				<div class="search-container text-right">
				    <form action="/action_page.php">
				      <input type="text" placeholder="What are you looking for?" name="search" style="width:400px; font-size: 1em; padding:10px;">
				      <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1.3em;"></i></button>
				    </form>
				</div>	

				<div class="sidebar">

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Product Categories</h5>
						</div>
						<ul class="sidebar_categories">
							<li><a href="#">Bed and Bath</a></li>
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Furniture Items</a>
								<div class="sidebar_categories" style="padding-left: 20px;">
									<ul><a style=" text-decoration: none; color: #51545f;" href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Mattress</a></ul>
									<ul><a style=" text-decoration: none; color: #51545f;" href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Pillows</a></ul>
									<ul><a style=" text-decoration: none; color: #51545f;" href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Bedsheets</a></ul>
									<ul><a style=" text-decoration: none; color: #51545f;" href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Throws and Blankets</a></ul>
									<ul><a style=" text-decoration: none; color: #51545f;" href="#"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span> Bathware</a></ul>
								</div>
							</li>
							<li><a href="#">Dining Room</a></li>
							<li><a href="#">Home Accents</a></li>
							<li><a href="#">Home Office</a></li>
							<li><a href="#">All</a></li>
						</ul>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Price</h5>
						</div>
						<p>
							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Rating</h5>
						</div>
						<!-- option 1 -->
						<input id = "ratingValue" type = "hidden" value = 4 name = "rating">
						<ul id = "reviewStars" class="user_star_rating row" style="margin-left: 20%; font-size: 1.5em;">
							<li id = "1Star"><i style="color: red;" class="fa fa-star" aria-hidden="true"></i></li>
							<li id = "2Star"><i style="color: red;" class="fa fa-star" aria-hidden="true"></i></li>
							<li id = "3Star"><i style="color: red;" class="fa fa-star" aria-hidden="true"></i></li>
							<li id = "4Star"><i style="color: red;" class="fa fa-star" aria-hidden="true"></i></li>
							<li id = "5Star"><i style="color: red;" class="fa fa-star-o" aria-hidden="true"></i></li>
						</ul>
						<!-- option 2 -->
						<div class="input-group spinner">
					    <input type="text" class="form-control" value="0">
					    <div class="input-group-btn-vertical">
					      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
					      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
					    </div>
					  </div>

						<div class="filter_button"><span>filter</span></div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Shops</h5>
						</div>
						<ul class="checkboxes">
							<li><i class="fa fa-circle-o" aria-hidden="true"></i><span>Taobao</span></li>
							<li class="active"><i class="fa fa-check-circle" aria-hidden="true"></i><span>Mandaue Foam</span></li>
							<li><i class="fa fa-circle-o" aria-hidden="true"></i><span>Furniture City</span></li>
							<li><i class="fa fa-circle-o" aria-hidden="true"></i><span>Furniture Labs</span></li>
							<li><i class="fa fa-circle-o" aria-hidden="true"></i><span>Orion</span></li>
						</ul>
						<div class="show_more">
							<span><span>+</span>Show More</span>
						</div>
						<div class="filter_button"><span>filter</span></div>
					</div>
				</div>

				<div class="main_content">
					<div class="products_iso">
						<div class="row">
							<div class="col">

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Most Recent</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Most Recent</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">12</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
											</ul>
										</li>
									</ul>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

								<div class="product-grid">

									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Comfy Chair (Red)</a></h6>
												<div class="product_price" style="font-size: 14px;">P540.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Round Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P610.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Sophisticated Centerpiece Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P2,220.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50%</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Light LED Desk Lamp (Yellow)</a></h6>
												<div class="product_price" style="font-size: 14px;">P300.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Comfy Chair (Red)</a></h6>
												<div class="product_price" style="font-size: 14px;">P540.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Round Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P610.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Sophisticated Centerpiece Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P2,220.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50%</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Light LED Desk Lamp (Yellow)</a></h6>
												<div class="product_price" style="font-size: 14px;">P300.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
									
									<div class="product-item men">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Comfy Chair (Red)</a></h6>
												<div class="product_price" style="font-size: 14px;">P540.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Round Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P610.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Sophisticated Centerpiece Table</a></h6>
												<div class="product_price" style="font-size: 14px;">P2,220.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="./images/p300.png" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50%</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.php">Light LED Desk Lamp (Yellow)</a></h6>
												<div class="product_price" style="font-size: 14px;">P300.00<span>P600.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
								</div>

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_bottom clearfix">
									<span class="showing_results">Showing 1–12 of 50 results</span>
									<div class="pages d-flex flex-row align-items-center">
										<div class="page_current">
											<span>1</span>
											<ul class="page_selection">
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
											</ul>
										</div>
										<div class="page_total"><span>of</span> 3</div>
										<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

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
<script src="js/categories_custom.js"></script>
</body>

</html>
