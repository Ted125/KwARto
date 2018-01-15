<!DOCTYPE html>
<html lang="en">
<head>
<title>KwARto | Home</title>
<!-- HEAD TAG HERE WITH THE NECESSARY CSS LINKS AND PLUGINS -->
<?php include('Access/Header.php');?>
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

	<div class="main_slider" style="background-image:url(./images/indexbanner.jpg)">
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
	</div>

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg1.jpg)">
						<div class="banner_category">
							<a href="categories.php">Bedroom</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg2.jpg)">
						<div class="banner_category">
							<a href="categories.php">Home Office</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(./images/indexbg3.jpg)">
						<div class="banner_category">
							<a href="categories.php">Living Room</a>
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
							$_POST["name"] = "";
							$_POST["sortValue"] = "arrival";
							$_POST["sortOrder"] = "descending";

							require("Controllers/SearchFurniture.php");

							if($searchFurnitureResult != null){
								while($row = mysqli_fetch_assoc($searchFurnitureResult)){
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
										<div class="product_image">
											<?php
												$_POST["furnitureId"] = $row["furnitureId"];

												require("Controllers/LoadAllFurnitureImages.php");

												if($furnitureImagesResult != null){
													$r = mysqli_fetch_assoc($furnitureImagesResult);
											?>

											<img src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $r["image"]; ?> style="padding-top: 20px; min-height: 240px; max-height: 240px;" alt="">
											<?php
												}else{
													// set to a default image
											?>
											<img src="" style="padding-top: 20px; min-height: 240px; max-height: 240px;" alt="">
											<?php
												}
											?>
										</div>
										<div class="favorite favorite_left"></div>
										<?php
											if($row["discount"] > 0){
										?>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo "-" . $row["discount"] . "%"; ?></span></div>
										<?php
											}
										?>

										<div class="product_info">
											<h6 class="product_name"><a href="single.php?singleFurnitureId=<?php echo $row['furnitureId']?>"><?php echo $row["name"]; ?></a></h6>
											<div class="product_price">
											<?php
												$price = $row["price"];
												$discount = $row["discount"];

												if($discount > 0){
													echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
												}else{
													echo "Php " . number_format($price);
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
									<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
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

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="./images/index/dealsbg.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

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

							<div class="owl-item product_slider_item">
								<div class="product-item homeoff">
									<div class="product discount">
										<div class="product_image">
											<img src="./images/index/item10.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Floral Divider</a></h6>
											<div class="product_price">P1,180.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item7.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Blue Bedroom Desk</a></h6>
											<div class="product_price">P1,500.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item6.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-P500</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#single.php">Dining Room Set (White)</a></h6>
											<div class="product_price">P4,500<span>P5,000.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item dining">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item2.jpg" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Leatherette Sofa</a></h6>
											<div class="product_price">P3,610.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item1.jpg" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Swivel Chair (Black)</a></h6>
											<div class="product_price">P540.00<span>P600.00</span></div>
										</div>
									</div>
								</div>
							</div>


							<div class="owl-item product_slider_item">
								<div class="product-item homeoff">
									<div class="product discount">
										<div class="product_image">
											<img src="./images/index/item10.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Floral Divider</a></h6>
											<div class="product_price">P1,180.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item7.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Blue Bedroom Desk</a></h6>
											<div class="product_price">P1,500.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item6.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-P500</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#single.php">Dining Room Set (White)</a></h6>
											<div class="product_price">P4,500<span>P5,000.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item dining">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item2.jpg" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Leatherette Sofa</a></h6>
											<div class="product_price">P3,610.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="./images/index/item1.jpg" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Swivel Chair (Black)</a></h6>
											<div class="product_price">P540.00<span>P600.00</span></div>
										</div>
									</div>
								</div>
							</div>
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

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>

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
											<div class="red_button" style="width: 200px"><a href="#">move to wishlist</a></div><br>
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
											<div class="red_button" style="width: 200px;"><a href="#">move to wishlist</a></div><br>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
