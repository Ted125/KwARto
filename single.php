<?php
	$furnitureId = $_GET["singleFurnitureId"];

	$_POST["furnitureId"] = $furnitureId;

	require("Controllers/LoadFurnitureDetails.php");

	$row = mysqli_fetch_assoc($furnitureDetailsResult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>KwARto | Furniture</title>
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

	<div class="fs_menu_overlay"></div>


	<div class="container single_product_container">
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Living Room</a></li>
						<li class="active"><a href="single.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Comfy Chair</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
									<?php
										$_POST["furnitureId"] = $row["furnitureId"];

										require("Controllers/LoadAllFurnitureImages.php");

										$firstImage;

										if($furnitureImagesResult != null){
											$imageCount = 0;

											while($r = mysqli_fetch_assoc($furnitureImagesResult)){
												$imageCount ++;

												if($imageCount == 1){
													$firstImage = "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"];
									?>
													<li class="active"><img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> alt="" data-image=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?>></li>
									<?php
												}else{
									?>
													<li><img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> alt="" data-image=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?>></li>
									<?php
												}
											}
										}
									?>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(<?php echo $firstImage; ?>)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?php echo $row["name"]; ?></h2>
					</div>

					<div>
						<ul class="star_rating">
							<?php
								$_POST["furnitureId"] = $row["furnitureId"];

								require("Controllers/GetAverageRating.php");

								$averageRating = 0;

								if($averageRatingResult != null){
									$averageRatingRow = mysqli_fetch_assoc($averageRatingResult);

									if($averageRatingRow["average"] != null){
										$averageRating = $averageRatingRow["average"];
									}
								}

								for($i = 0; $i < 5; $i++){
									if($averageRating >= 1){
							?>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<?php
									}else if($averageRating > 0){
							?>
										<li><i class="fa fa-star-half-empty" aria-hidden="true"></i></li>
							<?php
									}else{
							?>
										<li><i class="fa fa-star-0" aria-hidden="true"></i></li>
							<?php
									}

									$averageRating -= 1;
								}
							?>
						</ul>
					</div>

					<?php
						if($row["discount"] > 0){
					?>
					<div class="original_price"><?php echo number_format($row["price"], 2); ?></div>
					<?php
						}
					?>
					<div class="product_price">
					<?php
						$price = $row["price"];
						$discount = $row["discount"];

						if($discount > 0){
							echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
						}else{
							echo "Php " . number_format($price, 2);
						}
					?>
					</div>

					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<p>
							<?php
								$_POST["furnitureId"] = $row["furnitureId"];

								require("Controllers/GetStock.php");

								if($stockResult != null){
									$stockRow = mysqli_fetch_assoc($stockResult);

									$stock = $stockRow["num"];

									if($stock > 0){
										echo "Only " . $stock . " items available.";
									}else{
										echo "Out of stock!";
									}
								}
							?>
						</p>
					</div>
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Cash On Delivery</span>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Tabs -->

<?php
	// Get Review Count
	$_POST["furnitureId"] = $row["furnitureId"];

	require("Controllers/GetReviewCount.php");

	$reviewCount = 0;

	if($reviewCountResult != null){
		$rCountRow = mysqli_fetch_assoc($reviewCountResult);
		$reviewCount = $rCountRow["num"];
	}

	// Get Question Count
	$_POST["furnitureId"] = $row["furnitureId"];

	require("Controllers/GetQuestionCount.php");

	$questionCount = 0;

	if($questionCountResult != null){
		$qCountRow = mysqli_fetch_assoc($questionCountResult);
		$questionCount = $qCountRow["num"];
	}

	// Load images in main details tab
	$_POST["furnitureId"] = $row["furnitureId"];

	require("Controllers/LoadAllFurnitureImages.php");

	$images = [];

	if($furnitureImagesResult != null){
		while($r = mysqli_fetch_assoc($furnitureImagesResult)){
			$images[] = $r["image"];
		}
	}

	// Load Specifications
	$_POST["furnitureId"] = $row["furnitureId"];

	require("Controllers/LoadAllFurnitureSpecifications.php");

	$specs = [];

	if($specResult != null){
		while($sRow = mysqli_fetch_assoc($specResult)){
			$specs[] = $sRow["specification"];
		}
	}

	// Load Package Details
	$_POST["furnitureId"] = $row["furnitureId"];

	require("Controllers/LoadFurniturePackage.php");

	$packDetails = [];

	if($packResult != null){
		while($pRow = mysqli_fetch_assoc($packResult)){
			$packDetails[] = $pRow["item"];
		}
	}
?>

	<div class="tabs_section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Main Details</span></li>
							<li class="tab" data-active-tab="tab_2"><span>Additional Details</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Reviews (<?php echo $reviewCount; ?>)</span></li>
							<li class="tab" data-active-tab="tab_4"><span>Questions (<?php echo $questionCount; ?>)</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="tab_title">
									<h4>Main Details</h4>
								</div>
								<div class="tab_text_block">
									<h2>Description</h2>
									<p><?php echo $row["description"]; ?></p>
								</div>

								<?php
									if(isset($images[1])){
								?>
								<div class="tab_image">
									<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $images[1]; ?> alt="">
								</div>
								<?php
									}
								?>
								<div class="tab_text_block">
									<h2>Specifications</h2>
									<ul>
									<?php
											foreach($specs as $s){
									?>
												<li><?php echo $s; ?></li>
									<?php
											}
									?>
									</ul>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-2 desc_col">
								<?php
									if(isset($images[0])){
								?>
								<div class="tab_image">
									<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $images[0]; ?> alt="">
								</div>
								<?php
									}
								?>
								<div class="tab_text_block">
									<h2>Package Details</h2>
									<ul>
									<?php
											foreach($packDetails as $p){
									?>
												<li><?php echo $p; ?></li>
									<?php
											}
									?>
									</ul>
								</div>
								<?php
									if(isset($images[2])){
								?>
								<div class="tab_image desc_last">
									<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $images[2]; ?> alt="">
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>

					<div id="tab_2" class="tab_container">
						<div class="row">
							<div class="col additional_info_col">
								<div class="tab_title additional_info_title">
									<h4>Additional Information</h4>
								</div>
								<p>COLORS:<span>Red, Black, Orange</span></p>
								<p>SIZE:<span>26" x 53"</span></p>
								<p>MATERIAL:<span>Synthetic Leather/Leatherette</span></p>
							</div>
						</div>
					</div>

					<div id="tab_3" class="tab_container">
						<div class="row">
							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews (2)</h4>
								</div>
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://www.shareicon.net/download/2016/07/05/791216_people_512x512.png"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Dec 2017</div>
										<div class="user_name">John Doe</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSruM7uxCIoXQsS1XUPMYs28dMEV2uyS-RyGsfklPlsELI99Djd"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Dec 2017</div>
										<div class="user_name">Jane Doe</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 add_review_col">
								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Leave a Comment/Review</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
										</div>
										<div>
											<h1>Leave a Rating</h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div id="tab_4" class="tab_container">
						<div class="row">
							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Questions (2)</h4>
								</div>
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://www.shareicon.net/download/2016/07/05/791216_people_512x512.png"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Dec 2017</div>
										<div class="user_name">John Doe</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSruM7uxCIoXQsS1XUPMYs28dMEV2uyS-RyGsfklPlsELI99Djd"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Dec 2017</div>
										<div class="user_name">Jane Doe</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 add_review_col">
								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Leave a Question</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
										</div>
										<div>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
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
