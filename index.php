<!DOCTYPE html>
<html lang="en">
<head>
<title>KwARto | Home</title>
<!-- HEAD TAG HERE WITH THE NECESSARY CSS LINKS AND PLUGINS -->
<?php include('Access/Header.php');?>

<style type="text/css">
.slick-slide {
  text-align: center;
  color: #419be0;
  background: white;
}
</style>
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

<!-- 	<div class="main_slider" style="background-image:url(./images/indexbanner.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Opening Collection 2018</h6>
						<h1>Get up to 20% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="loginnew.php">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="main_slider" style="background-image:url(./images/caro1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height text-center">
				<div style="margin: 0px 170px 0px 170px;">
					<div class="row text-center" style="left: 40%;">
			        	<img src="./images/hero-image-2.png" style="max-height: 400px;">
			        	<img src="./images/hero-image-3.png" style="margin-top: 30px; margin-left: -150px; max-height: 400px;">
	        		</div>
	        		<div class="text-center" style="margin-left: 150px;">
			          	<h2 style="color: black; margin-top: -80px; color: #2e1111; font-weight: lighter;">Get the Mobile App Now</h2>
			          	<div style="margin-top: 10px;" class="red_button shop_now_button"><a href="#" style="text-decoration: none; color: white;">download here</a></div>
			          </div>
				</div>
			</div>
		</div>
	</div>
<!-- 	<div class="banner text-center">
		<div class="search-container">
		    <form action="/action_page.php">
		      <input type="text" placeholder="What are you looking for?" name="search" style="width:700px; font-size: 1.5em; padding:10px;">
		      <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1.5em;"></i></button>
		    </form>
		 </div>
	</div>
 -->
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg1.jpg)">
						<div class="banner_category">
							<a id = "bannerBedroom" href="#">Bedroom</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg2.jpg)">
						<div class="banner_category">
							<a id = "bannerOffice" href="#">Home Office</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg3.jpg)">
						<div class="banner_category">
							<a id = "bannerLivingRoom" href="#">Living Room</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<?php
								$_POST["categoryId"] = 1;

								require("Controllers/LoadSubordinateCategories.php");

								if($subordinateCategoriesResult != null){
									$i = 1;

									while($row = mysqli_fetch_assoc($subordinateCategoriesResult)){
										if($i == 1){
											$i++;
							?>
										<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter= <?php echo "." . $row["categoryId"]; ?>><?php echo $row["name"]; ?></li>
							<?php
										}else{
							?>
										<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter= <?php echo "." . $row["categoryId"]; ?>><?php echo $row["name"]; ?></li>

							<?php
										}
									}
								}
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<!-- Selected Furniture Form -->
					<form id = "selectedFurnitureForm" action = "single.php" method = "POST">
						<input id = "selectedFurnitureField" type = "hidden" name = "singleFurnitureId">
					</form>
					<!-- Cart Form -->
					<form id = "cartForm" action = "cart.php" method = "POST">
						<input id = "cartItemField" type = "hidden" name = "furnitureId">
					</form>
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<?php
							$_POST["categoryId"] = 1;
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
							$_POST["sortValue"] = "arrival";
							$_POST["sortOrder"] = "descending";

							require("Controllers/SearchFurniture.php");

							if($searchFurnitureResult != null){
								$i = 0;

								while($row = mysqli_fetch_assoc($searchFurnitureResult)){
									$i++;

									if($i > 25){
										break;
									}

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
						?>

								<div class="product-item <?php echo $ancestorCategoryId ?>">
									<div class="product discount product_filter">
										<div class="product_image" style="min-height: 240px;">
											<?php
												$_POST["furnitureId"] = $row["furnitureId"];

												require("Controllers/LoadThumbnailImage.php");

												if($thumbnailResult != null){
													$r = mysqli_fetch_assoc($thumbnailResult);
											?>

											<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> style="padding-top: 20%; max-height: 240px;" alt="">
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
												$_POST["furnitureId"] = $row["furnitureId"];

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
											if($row["discount"] > 0){
										?>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo "-" . $row["discount"] . "%"; ?></span></div>
										<?php
											}
										?>

										<div class="product_info">
											<h6 class="product_name" name = "<?php echo $row['furnitureId']?>"><a><?php echo $row["name"]; ?></a></h6>
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
											<?php
												if($row["discount"] > 0){
											?>
											<span><?php echo "Php " . number_format($row["price"], 2); ?></span>
											<?php
												}
											?>
											</div>
										</div>
									</div>
									<div class="red_button add_to_cart_button" style="color: white;"><a>add to cart</a></div>
								</div>

						<?php
								}
							}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		$_POST["categoryId"] = 1;
		$_POST["sellerId"] = -1;
		$_POST["minPrice"] = -1;
		$_POST["maxPrice"] = -1;
		$_POST["minDiscount"] = 50;
		$_POST["maxDiscount"] = -1;
		$_POST["minRating"] = 3;
		$_POST["maxRating"] = -1;
		$_POST["saleStart"] = "";
		$_POST["saleEnd"] = "";
		$_POST["name"] = "";
		$_POST["sortValue"] = "discount";
		$_POST["sortOrder"] = "descending";

		require("Controllers/SearchFurniture.php");

		if($searchFurnitureResult != null && mysqli_num_rows($searchFurnitureResult) > 0){
			$row = mysqli_fetch_assoc($searchFurnitureResult);

			$saleEnd = new DateTime($row["saleEnd"]);
	?>
	<input id = "saleEnd" type = "hidden" value = "<?php echo $saleEnd->format('Y-m-d H:i:s'); ?>">
	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<?php
							$_POST["furnitureId"] = $row["furnitureId"];

							require("Controllers/LoadThumbnailImage.php");

							if($thumbnailResult != null){
								$r = mysqli_fetch_assoc($thumbnailResult);
						?>
						<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> alt="">
						<?php
							}
						?>
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Featured Deal</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">0</div>
								<div class="timer_unit">Days</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">0</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">0</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">0</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button" name = "<?php echo $row['furnitureId']; ?>"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	}
	?>

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<?php
								$_POST["categoryId"] = 1;
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
								$_POST["sortValue"] = "sold";
								$_POST["sortOrder"] = "descending";

								require("Controllers/SearchFurniture.php");

								if($searchFurnitureResult != null){
									$i = 0;

									while($row = mysqli_fetch_assoc($searchFurnitureResult)){
										$i++;

										if($i > 10){
											break;
										}

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
							?>

									<div class="owl-item product_slider_item product-item <?php echo $ancestorCategoryId ?>">
										<div class="product discount product_filter">
											<div class="product_image" style="min-height: 240px;">
												<?php
													$_POST["furnitureId"] = $row["furnitureId"];

													require("Controllers/LoadThumbnailImage.php");

													if($thumbnailResult != null){
														$r = mysqli_fetch_assoc($thumbnailResult);
												?>

												<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> style="padding-top: 20%; max-height: 240px;" alt="">
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
													$_POST["furnitureId"] = $row["furnitureId"];

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
												if($row["discount"] > 0){
											?>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo "-" . $row["discount"] . "%"; ?></span></div>
											<?php
												}
											?>

											<div class="product_info">
												<h6 class="product_name" name = "<?php echo $row['furnitureId']?>"><a><?php echo $row["name"]; ?></a></h6>
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
												<?php
													if($row["discount"] > 0){
												?>
												<span><?php echo "Php " . number_format($row["price"], 2); ?></span>
												<?php
													}
												?>
												</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a>add to cart</a></div>
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

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest News</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(./images/index/news1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Year End Sale</h4>
							<span class="blog_meta">8:00 AM | dec 01, 2017</span>
							<a class="blog_more" href="news.php">See More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(./images/index/news2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Clearance Sale</h4>
							<span class="blog_meta">4:00 PM | Jan 01, 2017</span>
							<a class="blog_more" href="news.php">See more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(./images/index/news3.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Christmas Sale</h4>
							<span class="blog_meta">3:00 PM | Dec 01, 2017</span>
							<a class="blog_more" href="news.php">See more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- Chosen Nav Form -->
  <form id = "chosenNavForm" action = "categories.php" method = "POST">
    <input id = "chosenNavCategory" type = "hidden" name = "searchCategoryId" value = "1">
  </form>

	<!-- Benefit HERE-->
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
<script src="js/custom.js"></script>
</body>
</html>
<script type = "text/javascript">
$(document).ready(function(){
	$(".product_name").on("click", function(){
		var id = $(this).attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$(".deal_ofthe_week_button").on("click", function(){
		var id = $(this).attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$(".add_to_cart_button").on("click", function(){
		var id = $(this).parent().find(".product_name").attr("name");
		$("#cartItemField").val(id);
		$("#cartForm").submit();
	});

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

	$(".product-grid").isotope({
			filter: '.2',
			animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
			}
	});

	$(".favorite").on("click", function(){
		var customerId = <?php
			if(isset($_SESSION["customerId"])){
				echo $_SESSION["customerId"];
			}else{
				echo -1;
			}
		?>;

		if($(this).hasClass("active")){
			RemoveFromWishlist(customerId, $(this).parent().find(".product_name").attr("name"), $(this));
		}else{
			AddToWishlist(customerId, $(this).parent().find(".product_name").attr("name"), $(this));
		}
	});

  $("#bannerBedroom").on("click", function(e){
    e.preventDefault();
    $("#chosenNavCategory").val("8");
    $("#chosenNavForm").submit();
  });

  $("#bannerOffice").on("click", function(e){
    e.preventDefault();
    $("#chosenNavCategory").val("13");
    $("#chosenNavForm").submit();
  });

  $("#bannerLivingRoom").on("click", function(e){
    e.preventDefault();
    $("#chosenNavCategory").val("11");
    $("#chosenNavForm").submit();
  });
});

function AddToWishlist(customerId, furnitureId, div){
	$("#sellerOptions").empty();

	$.ajax({
		type: "POST",
    url: "Ajax/AddToWishlist.php",
		dataType: "json",
    data: {
			"customerId" : customerId,
			"furnitureId" : furnitureId
    },
    success: function(result) {
			// div.addClass("active");
			location.reload();
    },
    error: function(result) {

    }
	});
}

function RemoveFromWishlist(customerId, furnitureId, div){
	$("#sellerOptions").empty();

	$.ajax({
		type: "POST",
    url: "Ajax/RemoveFromWishlist.php",
		dataType: "json",
    data: {
			"customerId" : customerId,
			"furnitureId" : furnitureId
    },
    success: function(result) {
			// div.removeClass("active");
			location.reload();
    },
    error: function(result) {

    }
	});
}
</script>
