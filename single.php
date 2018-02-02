<?php
	session_start();

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
	<?php include('Access/Header.php');?>
</head>

<body>

<div class="super_container">
		<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

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

		<!-- Cart Form -->
		<form id = "cartForm" action = "cart.php" method = "POST">
			<input id = "cartItemField" type = "hidden" name = "furnitureId">
		</form>

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
													<li class="active" style="display: flex; align-items: center; max-height: 100% max-width:100%;"><img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> alt="" style="max-height: 120px; max-width: 136px;" data-image=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?>></li>
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
								<div class="single_product_image container">
									<img class="single_product_image_background" style="background-size: contain;" src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> alt="" data-image=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?>>
									<!-- <img style="width: 100%; height: auto;" src="<?php echo $firstImage; ?>"> -->
								</div>
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
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
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
						<button class="red_button addToCartButton" style="padding: 0px 40px 0px 40px; border: none; color: white; background-color: #d42d2d;"><a href = "#">add to cart</a></button>

						<?php
							if(isset($_SESSION["customerId"])){
								$_POST["customerId"] = $_SESSION["customerId"];
								$_POST["furnitureId"] = $row["furnitureId"];

								require("Controllers/IsWishlisted.php");

								if($wishlistedResult != null && mysqli_num_rows($wishlistedResult) > 0){
						?>
									<div class="product_favorite d-flex flex-column align-items-center justify-content-center active" title="Add to Wishlist"></div>
						<?php
								}else{
						?>
									<div class="product_favorite d-flex flex-column align-items-center justify-content-center" title="Add to Wishlist"></div>
						<?php
								}
							}
						?>
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
								<h4>Additional Details</h4>
							</div>
							<ul>
								<?php
									if(isset($row["model"])){
								?>
								<li><p style="color: black;"><i class="fa fa-circle"></i>  MODEL:<span><?php echo $row["model"]; ?></span></p></li>
								<?php
									}
								?>
								<?php
									if(isset($row["color"])){
								?>
								<li><p style="color: black;"><i class="fa fa-circle"></i>  COLOR:<span><?php echo $row["color"]; ?></span></p></li>
								<?php
									}
								?>
								<li><p style="color: black;"><i class="fa fa-circle"></i>  SIZE:<span><?php echo $row["length"] . " x " . $row["width"] . " x " . $row["height"] . " " . $row["sizeUnit"]; ?></span></p></li>
								<li><p style="color: black;"><i class="fa fa-circle"></i>  WEIGHT:<span><?php echo $row["weight"] . " " . $row["weightUnit"]; ?></span></p></li>
							</ul>
							</div>
						</div>
					</div>

					<div id="tab_3" class="tab_container">
						<div class="row">
							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews (<?php echo $reviewCount; ?>)</h4>
								</div>
								<?php
									$_POST["furnitureId"] = $row["furnitureId"];

									require("Controllers/LoadAllReviews.php");

									if($reviewResult != null){
										while($reviewRow = mysqli_fetch_assoc($reviewResult)){
								?>
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="http://i.imgur.com/4ybg2jx.jpg"></div>
									</div>
									<div class="review">
										<div class="user_rating">
											<ul class="star_rating remove-left">
												<?php
													$reviewRating = $reviewRow["rating"];

													for($i = 0; $i < 5; $i++){
														if($reviewRating >= 1){
												?>
															<li><i class="fa fa-star star_size" aria-hidden="true"></i></li>
												<?php
														}else if($reviewRating > 0){
												?>
															<li><i class="fa fa-star-half-empty star_size" aria-hidden="true"></i></li>
												<?php
														}else{
												?>
															<li><i class="fa fa-star-o star_size" aria-hidden="true"></i></li>
												<?php
														}

														$reviewRating -= 1;
													}
												?>
											</ul>
										</div>
										<div class = "review_title"><?php echo $reviewRow["title"]; ?></div>
										<div class="review_date">Posted on
										<?php
											$date = strtotime($reviewRow["dateAdded"]);

											echo date("F j, Y", $date);
										?>
										</div>
										<div class="user_name">By <?php echo $reviewRow["firstName"] . " " . $reviewRow["lastName"]; ?></div>
										<p class = "review_body"><?php echo $reviewRow["body"]; ?></p>
									</div>
								</div>
								<hr>
								<br>
								<?php
										}
									}
								?>
							</div>

							<div class="col-lg-6 add_review_col">
								<div class="add_review">
									<?php
										if(isset($_SESSION["customerId"])){
									?>
									<form id="review_form" method="post" action= "Controllers/AddReview.php">
										<div>
											<h1>Leave a Review</h1>
											<br>
											<input type = "hidden" name = "furnitureId" value = <?php echo $row["furnitureId"]; ?>>
											<input type = "hidden" name = "customerId" value = <?php echo $_SESSION["customerId"]; ?>>
											<input type = "hidden" name = "addedBy" value = <?php echo $_SESSION["userId"]; ?>>
											<input type = "hidden" name = "updatedBy" value = <?php echo $_SESSION["userId"]; ?>>
											<input type = "hidden" name = "likes" value = 0>
											<input id = "ratingValue" type = "hidden" value = 4 name = "rating">
											<ul id = "reviewStars" class="user_star_rating">
												<li id = "1Star"><i class="fa fa-star" aria-hidden="true"></i></li>
												<li id = "2Star"><i class="fa fa-star" aria-hidden="true"></i></li>
												<li id = "3Star"><i class="fa fa-star" aria-hidden="true"></i></li>
												<li id = "4Star"><i class="fa fa-star" aria-hidden="true"></i></li>
												<li id = "5Star"><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<input id = "review_title" class = "form_input input_name" type = "text" name = "title" placeholder = "Review Title" required = "required" data-error = "Review title is required.">
											<textarea id="review_message" class="input_review" name="body"  placeholder="Your Review" rows="4" required data-error="Please leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" style="padding: 10px;" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>

					<div id="tab_4" class="tab_container">
						<div class="row">
							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Questions (<?php echo $questionCount; ?>)</h4>
								</div>
								<?php
									$_POST["furnitureId"] = $row["furnitureId"];

									require("Controllers/LoadAllFurnitureQuestions.php");

									if($questionResult != null){
										while($questionRow = mysqli_fetch_assoc($questionResult)){
								?>
								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://memestatic.fjcdn.com/pictures/Pupper_acae76_6455162.jpg"></div>
									</div>
									<div class="review">
										<p class = "question"><?php echo $questionRow["question"]; ?></p>
										<div class="user_name">Asked by <?php echo $questionRow["customerName"]; ?></div>
										<div class="review_date" style="margin-top: -20px;">Asked on
										<?php
											$date = strtotime($questionRow["datePosted"]);

											echo date("F j, Y", $date);
										?>
										</div>
									</div>
								</div>
								<?php
									$_POST["questionId"] = $questionRow["questionId"];

									require("Controllers/LoadQuestionAnswer.php");

									if($answerResult != null){
										$answerRow = mysqli_fetch_assoc($answerResult);

										if(isset($answerRow["answer"])){
								?>
											<br>
											<div class="user_review_container d-flex flex-column flex-sm-row">
												<div class="user">
													<div class="user_pic"><img style="max-width: 70px; border-radius: 50%;" src="https://www.shareicon.net/download/2016/07/05/791216_people_512x512.png"></div>
												</div>
												<div class="review">
													<p class = "question"><?php echo $answerRow["answer"]; ?></p>
													<div class="user_name">Answered by <?php echo $answerRow["sellerName"]; ?></div>
													<div class="review_date">Answered on
													<?php
														$date = strtotime($answerRow["dateAnswered"]);

														echo date("F j, Y", $date);
													?>
													</div>
												</div>
											</div>
								<?php
										}
									}
								?>
								<hr>
								<br>
								<?php
										}
									}
								?>
							</div>

							<div class="col-lg-6 add_review_col">
								<div class="add_review">
									<?php
										if(isset($_SESSION["customerId"])){
									?>
									<form id="review_form" method="post" action= "Controllers/AddQuestion.php">
										<div>
											<h1>Leave a Question</h1>
										</div>
										<div>
											<input type = "hidden" name = "furnitureId" value = <?php echo $row["furnitureId"]; ?>>
											<input type = "hidden" name = "customerId" value = <?php echo $_SESSION["customerId"]; ?>>
											<input type = "hidden" name = "active" value = "true">
											<textarea id="review_message" class="input_review" name="question"  placeholder="Your Question" rows="4" required data-error="Please leave us a question."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" style="padding: 10px;" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>More Products From <?php echo $row["sellerName"]; ?></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">
							<?php
								$_POST["categoryId"] = 1;
								$_POST["sellerId"] = $row["sellerId"];
								$_POST["minPrice"] = -1;
								$_POST["maxPrice"] = -1;
								$_POST["minDiscount"] = -1;
								$_POST["maxDiscount"] = -1;
								$_POST["minRating"] = -1;
								$_POST["maxRating"] = -1;
								$_POST["saleStart"] = "";
								$_POST["saleEnd"] = "";
								$_POST["name"] = "";
								$_POST["sortValue"] = "rating";
								$_POST["sortOrder"] = "descending";

								require("Controllers/SearchFurniture.php");

								if($searchFurnitureResult != null){
									while($searchRow = mysqli_fetch_assoc($searchFurnitureResult)){
										if($searchRow["furnitureId"] == $row["furnitureId"]){
											continue;
										}
							?>

							<div class="owl-item product_slider_item product-item">
								<div class="product discount product_filter">
									<div class="product_image" style="min-height: 240px;">
										<?php
											$_POST["furnitureId"] = $searchRow["furnitureId"];

											require("Controllers/LoadThumbnailImage.php");

											if($thumbnailResult != null){
												$r = mysqli_fetch_assoc($thumbnailResult);
										?>

										<img src=<?php echo "Resources/Images/Furniture/" .  $searchRow["furnitureId"] . "/" . $r["image"]; ?> style="padding-top: 20%; max-height: 240px;" alt="">
										<?php
											}else{
												// set to a default image
										?>
										<img src="" style="padding-top: 20%; min-height: 240px; max-height: 240px;" alt="">
										<?php
											}
										?>
									</div>

									<?php
										if(isset($_SESSION["customerId"])){
											$_POST["customerId"] = $_SESSION["customerId"];
											$_POST["furnitureId"] = $searchRow["furnitureId"];

											require("Controllers/IsWishlisted.php");

											if($wishlistedResult != null && mysqli_num_rows($wishlistedResult) > 0){
									?>
												<div class="favorite favorite_left active"></div>
									<?php
											}else{
									?>
												<div class="favorite favorite_left"></div>
									<?php
											}
										}
									?>

									<?php
										if($searchRow["discount"] > 0){
									?>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo "-" . $searchRow["discount"] . "%"; ?></span></div>
									<?php
										}
									?>

									<div class="product_info">
										<h6 class="product_name" name = "<?php echo $searchRow['furnitureId']?>"><a><?php echo $searchRow["name"]; ?></a></h6>
										<div class="product_price">
										<?php
											$price = $searchRow["price"];
											$discount = $searchRow["discount"];

											if($discount > 0){
												echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
											}else{
												echo "Php " . number_format($price, 2);
											}
										?>
										<?php
											if($searchRow["discount"] > 0){
										?>
										<span><?php echo "Php " . number_format($row["price"], 2); ?></span>
										<?php
											}
										?>
										</div>
									</div>
								</div>
								<div style="margin-left: 0px; color: #ffffff;" class="red_button add_to_cart_button"><a>add to cart</a></div>
							</div>

							<?php
									}
								}
							?>
						</div>
						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Other Products You Might Like</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">
							<?php
								$_POST["categoryId"] = $row["categoryId"];

								require("Controllers/LoadSinglePath.php");

								$ancestorCategoryId = 1;
								$ancestorCount = 0;

								while($ancestorRow = mysqli_fetch_assoc($singlePathResult)){
									$ancestorCategoryId = $ancestorRow["categoryId"];
									$ancestorCount++;

									if($ancestorCount == 2){
										break;
									}
								}

								$_POST["categoryId"] = $ancestorCategoryId;
								$_POST["sellerId"] = -1;
								$_POST["minPrice"] = -1;
								$_POST["maxPrice"] = -1;
								$_POST["minDiscount"] = -1;
								$_POST["maxDiscount"] = -1;
								$_POST["minRating"] = -1;
								$_POST["maxRating"] = -1;
								$_POST["saleStart"] = "";
								$_POST["saleEnd"] = "";
								$_POST["name"] = "";
								$_POST["sortValue"] = "rating";
								$_POST["sortOrder"] = "descending";

								require("Controllers/SearchFurniture.php");

								if($searchFurnitureResult != null){
									while($searchRow = mysqli_fetch_assoc($searchFurnitureResult)){
										if($searchRow["furnitureId"] == $row["furnitureId"]){
											continue;
										}
							?>

							<div class="owl-item product_slider_item product-item">
								<div class="product discount product_filter">
									<div class="product_image" style="min-height: 240px;">
										<?php
											$_POST["furnitureId"] = $searchRow["furnitureId"];

											require("Controllers/LoadThumbnailImage.php");

											if($thumbnailResult != null){
												$r = mysqli_fetch_assoc($thumbnailResult);
										?>

										<img src=<?php echo "Resources/Images/Furniture/" .  $searchRow["furnitureId"] . "/" . $r["image"]; ?> style="padding-top: 20%; max-height: 240px;" alt="">
										<?php
											}else{
												// set to a default image
										?>
										<img src="" style="padding-top: 20%; min-height: 240px; max-height: 240px;" alt="">
										<?php
											}
										?>
									</div>

									<?php
										if(isset($_SESSION["customerId"])){
											$_POST["customerId"] = $_SESSION["customerId"];
											$_POST["furnitureId"] = $searchRow["furnitureId"];

											require("Controllers/IsWishlisted.php");

											if($wishlistedResult != null && mysqli_num_rows($wishlistedResult) > 0){
									?>
												<div class="favorite favorite_left active"></div>
									<?php
											}else{
									?>
												<div class="favorite favorite_left"></div>
									<?php
											}
										}
									?>

									<?php
										if($searchRow["discount"] > 0){
									?>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo "-" . $searchRow["discount"] . "%"; ?></span></div>
									<?php
										}
									?>

									<div class="product_info">
										<h6 class="product_name" name = "<?php echo $searchRow['furnitureId']?>"><a><?php echo $searchRow["name"]; ?></a></h6>
										<div class="product_price">
										<?php
											$price = $searchRow["price"];
											$discount = $searchRow["discount"];

											if($discount > 0){
												echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
											}else{
												echo "Php " . number_format($price, 2);
											}
										?>
										<?php
											if($searchRow["discount"] > 0){
										?>
										<span><?php echo "Php " . number_format($row["price"], 2); ?></span>
										<?php
											}
										?>
										</div>
									</div>
								</div>
								<div style="margin-left: 0px; color: #ffffff;" class="red_button add_to_cart_button"><a>add to cart</a></div>
							</div>

							<?php
									}
								}
							?>
						</div>
						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Selected Furniture Form -->
	<form id = "selectedFurnitureForm" action = "single.php" method = "GET">
		<input id = "selectedFurnitureField" type = "hidden" name = "singleFurnitureId">
	</form>

	<!-- BENEFIT HERE-->
	<?php include('Access/Benefit.php');?>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>

</div>
	<!-- MOBILE VIEW HERE-->
	<?php include('Access/MobileTab.php');?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
	$(".addToCartButton").on("click", function(e){
		e.preventDefault();
		var id = "<?php echo $_GET['singleFurnitureId']; ?>";
		$("#cartItemField").val(id);
		$("#cartForm").submit();
	});

	$(".product_name").on("click", function(){
		var id = $(this).attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	var thumbs = $('.single_product_thumbnails ul li');
	var singleImage = $('.single_product_image_background');
	var cnt =0;
	thumbs.each(function()
	{
		var item = $(this);
		if(cnt == 0){
			var img = item.find('img').data('image');
			singleImage.css('background-image', 'url(' + img + ')');
			cnt++;
		}
	});

    $("#1Star").click(function(){
        $("#ratingValue").val(1);
    });

		$("#2Star").click(function(){
        $("#ratingValue").val(2);
    });

		$("#3Star").click(function(){
        $("#ratingValue").val(3);
    });

		$("#4Star").click(function(){
        $("#ratingValue").val(4);
    });

		$("#5Star").click(function(){
        $("#ratingValue").val(5);
    });

		$(".product_favorite").on("click", function(){
			var customerId = <?php
				if(isset($_SESSION["customerId"])){
					echo $_SESSION["customerId"];
				}else{
					echo -1;
				}
			?>;
			var furnitureId = <?php echo $_GET["singleFurnitureId"]; ?>

			if($(this).hasClass("active")){
				RemoveFromWishlist(customerId, furnitureId, $(this));
			}else{
				AddToWishlist(customerId, furnitureId, $(this));
			}
		});
});
</script>
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

function AddToWishlist(customerId, furnitureId, div){
	$.ajax({
		type: "POST",
    url: "Ajax/AddToWishlist.php",
		dataType: "json",
    data: {
			"customerId" : customerId,
			"furnitureId" : furnitureId
    },
    success: function(result) {
			div.addClass("active");
			// location.reload();
    },
    error: function(result) {

    }
	});
}

function RemoveFromWishlist(customerId, furnitureId, div){
	$.ajax({
		type: "POST",
    url: "Ajax/RemoveFromWishlist.php",
		dataType: "json",
    data: {
			"customerId" : customerId,
			"furnitureId" : furnitureId
    },
    success: function(result) {
			div.removeClass("active");
			// location.reload();
    },
    error: function(result) {

    }
	});
}
</script>
