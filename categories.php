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
				    <form id="searchBar">
				      <input type="text" placeholder="What are you looking for?" name="search" style="width:400px; font-size: 1em; padding:10px;">
				      <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1.3em;"></i></button>
				    </form>
				</div>

				<div class="sidebar">

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Product Categories</h5>
						</div>
						<!-- I am just a suggestion -->
						<div class="text-center" style="color: #d42d2d">
							<i class="fa fa-minus"></i><a href="#demo" style="color: black; text-decoration: none;" data-toggle="collapse">  Minimize Categories</a>
						</div>
						<div id="demo" class="collapse show">
							<!-- I would apply collapse here but categories have no differentiation for parent/child/grandchild -->
							<ul id = "searchCategories" class="sidebar_categories"></ul>					
						</div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Price</h5>
						</div>
						<p>
							<input type="text" id="amountPrice" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="price-slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Discount</h5>
						</div>
						<p>
							<input type="text" id="amountDiscount" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="discount-slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Rating</h5>
						</div>
						<p>
							<input type="text" id="amountRating" readonly style="border:0; color:#f6931f; font-weight:bold;">
						</p>
						<div id="rating-slider-range"></div>
						<div class="filter_button"><span>filter</span></div>
					</div>

					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Filter by Shops</h5>
						</div>
						<ul id = "sellerOptions">
						</ul>
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
											<span id = "sortValueText" class="type_sorting_text">Product Name</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="sortValueOption type_sorting_btn" name="name" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
												<li class="sortValueOption type_sorting_btn" name="price" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="sortValueOption type_sorting_btn" name="discount" data-isotope-option='{ "sortBy": "discount" }'><span>Discount</span></li>
												<li class="sortValueOption type_sorting_btn" name="rating" data-isotope-option='{ "sortBy": "rating" }'><span>Rating</span></li>
												<li class="sortValueOption type_sorting_btn" name="stock" data-isotope-option='{ "sortBy": "stock" }'><span>Stock</span></li>
												<li class="sortValueOption type_sorting_btn" name="arrival" data-isotope-option='{ "sortBy": "arrival" }'><span>Most Recent</span></li>
											</ul>
										</li>
									</ul>
									<ul class="product_sorting">
										<li>
											<span id = "sortOrderText" class="type_sorting_text">Ascending</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="sortOrderOption type_sorting_btn" name="ascending" data-isotope-option='{ "sortBy": "ascending" }'><span>Ascending</span></li>
												<li class="sortOrderOption type_sorting_btn" name="descending" data-isotope-option='{ "sortBy": "descending" }'><span>Descending</span></li>
											</ul>
										</li>
									</ul>
								</div>
								<!-- Search Filters Container -->
								<form>
									<input id = "searchCategoryId" type = "hidden" value = "1">
									<input id = "searchSellerId" type = "hidden" value = "-1">
									<input id = "searchMinPrice" type = "hidden" value = "-1">
									<input id = "searchMaxPrice" type = "hidden" value = "-1">
									<input id = "searchMinDiscount" type = "hidden" value = "-1">
									<input id = "searchMaxDiscount" type = "hidden" value = "-1">
									<input id = "searchMinRating" type = "hidden" value = "-1">
									<input id = "searchMaxRating" type = "hidden" value = "-1">
									<input id = "searchName" type = "hidden" value = "">
									<input id = "searchSortValue" type = "hidden" value = "">
									<input id = "searchSortOrder" type = "hidden" value = "">
								</form>
								<!-- Selected Furniture Form -->
								<form id = "selectedFurnitureForm" action = "single.php" method = "POST">
									<input id = "selectedFurnitureField" type = "hidden" name = "singleFurnitureId">
								</form>

								<div id = "searchResultsContainer" class="product-grid row" style="margin-left: 20px;"></div>
								</div>

								<!-- Product Sorting -->
								<!-- pagination -->
								<!-- <div class="product_sorting_container product_sorting_container_bottom clearfix">
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

								</div> -->

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
<script type="text/javascript">
$(document).ready(function(){
	LoadCategoryTree();
	LoadSellers();
	Search();

	$("#amount").val("Php 0 - Php 100000");
	$("#amountDiscount").val("0 % - 100 %");
	$("#amountRating").val("1 star - 5 stars");

	$("#searchCategories").on("click", ".searchCategory", function(){
		$("#searchCategoryId").val($(this).attr("name"));
		$("#activeSearchCategory").removeClass("active");
		$("#activeSearchCategory").removeAttr("id");
		$(this).addClass("active");
		$(this).attr("id", "activeSearchCategory");
		Search();
	});

	$("#price-slider-range").slider({
		range: true,
		min: 0,
		max: 100000,
		values: [0, 100000],
		slide: function(event, ui) {
			$("#amountPrice").val("Php " + ui.values[0] + " - Php " + ui.values[1]);
			$("#searchMinPrice").val(ui.values[0]);
			$("#searchMaxPrice").val(ui.values[1]);
		}
	});

	$("#discount-slider-range").slider({
		range: true,
		min: 0,
		max: 100,
		values: [0, 100],
		slide: function(event, ui) {
			$("#amountDiscount").val(ui.values[0] + " % - " + ui.values[1] + " %");
			$("#searchMinDiscount").val(ui.values[0]);
			$("#searchMaxDiscount").val(ui.values[1]);
		}
	});

	$("#rating-slider-range").slider({
		range: true,
		min: 1,
		max: 5,
		values: [1, 5],
		step: 1,
		slide: function(event, ui) {
			if(ui.values[1] == 1){
				$("#amountRating").val(ui.values[0] + " star - " + ui.values[1] + " star");
			}else if(ui.values[0] == 1){
				$("#amountRating").val(ui.values[0] + " star - " + ui.values[1] + " stars");
			}else{
				$("#amountRating").val(ui.values[0] + " stars - " + ui.values[1] + " stars");
			}

			$("#searchMinRating").val(ui.values[0]);
			$("#searchMaxRating").val(ui.values[1]);
		}
	});

	$("#sellerOptions").on("click", ".sellerOption", function(){
		$("#searchSellerId").val($(this).attr("name"));
		$(".active i").removeClass("fa fa-check-circle");
		$(".active i").addClass("fa fa-circle-o");
		$(".active").removeClass("active");
		$(this).addClass("active");
		$(this).find("i").removeClass("fa fa-circle-o");
		$(this).find("i").addClass("fa fa-check-circle");
	});

	$(".filter_button").on("click", function(){
		Search();
	});

	$(".sortValueOption").on("click", function(){
		$("#searchSortValue").val($(this).attr("name"));
		Search();
	});

	$(".sortOrderOption").on("click", function(){
		$("#searchSortOrder").val($(this).attr("name"));
		Search();
	});

	$("#searchBar").on("submit", function(event){
		event.preventDefault();
		$("#searchName").val($(this).find("input").val());
		Search();
	})

	$("#searchResultsContainer").on("click", ".product_name", function(){
		var id = $(this).attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});
});

function LoadCategoryTree(){
	$("#searchCategories").empty();

	$.ajax({
		type: "POST",
    url: "Ajax/LoadAllCategories.php",
		dataType: "json",
    data: {

    },
    success: function(result) {
			result.forEach(function(item){
				var listItem = "";

				if(item.depth == 0){
					listItem += "<li id = 'activeSearchCategory' class = 'active searchCategory' name = '" + item.categoryId + "'>";
				}else{
					listItem += "<li class = 'searchCategory' name = '" + item.categoryId + "'>";
				}

				for(var i = 0; i < item.depth; i++){
					listItem += "&emsp;";
				}

				if(item.depth == 0){
					listItem += "<span><i class='fa fa-angle-double-right' aria-hidden='true'></i></span>";
				}else if(parseInt(item.lft) + 1 != parseInt(item.rgt)){
					listItem += "<span><i class='fa fa-angle-right' aria-hidden='true'></i></span>";
				}


				listItem += "<a style='white-space:nowrap;' href='#'>&nbsp;" + item.name + "</a></li>";
				$("#searchCategories").append(listItem);
			});
    },
    error: function(result) {

    }
	});
}

function LoadSellers(){
	$("#sellerOptions").empty();

	$.ajax({
		type: "POST",
    url: "Ajax/LoadAllSellers.php",
		dataType: "json",
    data: {

    },
    success: function(result) {
			var defaultItem = "<li class = 'active sellerOption' name = '-1'><i class='fa fa-check-circle' aria-hidden='true'></i>&nbsp;<span>Any Seller</span></li>";
			$("#sellerOptions").append(defaultItem);

			result.forEach(function(item){
				var listItem = "<li class = 'sellerOption' name = '" + item.sellerId + "'><i class='fa fa-circle-o' aria-hidden='true'></i>&nbsp;<span>" + item.name + "</span></li>";
				$("#sellerOptions").append(listItem);
			});
    },
    error: function(result) {

    }
	});
}

function Search(){
	$("#searchResultsContainer").empty();

	$.ajax({
		type: "POST",
    url: "Ajax/SearchFurniture.php",
		dataType: "json",
    data: {
			"categoryId" : $("#searchCategoryId").val(),
			"sellerId" : $("#searchSellerId").val(),
			"minPrice" : $("#searchMinPrice").val(),
			"maxPrice" : $("#searchMaxPrice").val(),
			"minDiscount" : $("#searchMinDiscount").val(),
			"maxDiscount" : $("#searchMaxDiscount").val(),
			"minRating" : $("#searchMinRating").val(),
			"maxRating" : $("#searchMaxRating").val(),
			"name" : $("#searchName").val(),
			"sortValue" : $("#searchSortValue").val(),
			"sortOrder" : $("#searchSortOrder").val()
    },
    success: function(result) {
			result.forEach(function(item){
				var furniture = "<div class='product-item men'><div class='product discount product_filter'><div class='product_image'><img  style='height:200px;' src='Resources/Images/Furniture/" + item.furnitureId + "/" + item.imageName + "' alt=''></div><div class='favorite favorite_left'></div>";

				if(item.discount > 0){
					furniture += "<div class='product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center'><span>-" + item.discount + "%</span></div>";
				}

				furniture += "<div class='product_info'><h6 class='product_name' name='" + item.furnitureId + "'><a>" + item.name + "</a></h6>";

				if(item.discount > 0){
					furniture += "<div class='product_price' style='font-size: 14px;'>Php&nbsp;" + (item.price * (1 - item.discount / 100)) + "<span> Php&nbsp;" + item.price + "</span></div></div></div>";
				}else{
					furniture += "<div class='product_price' style='font-size: 14px;'> Php&nbsp;" + item.price + "</div></div></div>";
				}

				furniture += "<div class='text-center product_rating' style='color: #fac451; font-size: 14px;'>";

				var averageRating = item.averageRating

				for(var i = 0; i < 5; i++){
					if(averageRating >= 1){
						furniture += "<i class='fa fa-star' aria-hidden='true'></i>";
					}else if(averageRating > 0){
						furniture += "<i class='fa fa-star-half-empty' aria-hidden='true'></i>";
					}else{
						furniture += "<i class='fa fa-star-o' aria-hidden='true'></i>";
					}
				}

				furniture += "</div>";

				furniture += "<div class='red_button add_to_cart_button' style='position:absolute;bottom:0;'><a href='#'>add to cart</a></div></div>";
				$("#searchResultsContainer").append(furniture);
			});
    },
    error: function(result) {

    }
	});
}
</script>
