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
	<?php include('Access/Header.php');?>
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

	<!-- Selected Furniture Form -->
	<form id = "selectedFurnitureForm" action = "single.php" method = "GET">
		<input id = "selectedFurnitureField" type = "hidden" name = "singleFurnitureId">
	</form>

	<!-- Cart Form -->
	<form id = "cartForm" action = "cart.php" method = "POST">
		<input id = "cartItemField" type = "hidden" name = "furnitureId">
	</form>

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

		<h3><i class="fa fa-list-alt" aria-hidden="true"></i> My Wishlist</h3>
		<div class="row">
        <table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
        <thead>
            <tr style="text-align: center;">
                <th>Item No.</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <!-- <th>Date</th> -->
                <!-- <th>Availability</th> -->
                <th>Price</th>
								<th>Actions</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="text-center" id = "wishlistItemsContainer">
						<?php
							$_POST["customerId"] = $_SESSION["customerId"];

							require("Controllers/LoadWishlistItems.php");

							if($wishlistResult != null){
								$i = 0;

								while($row = mysqli_fetch_assoc($wishlistResult)){
									$i++;
						?>
            <tr class="wishlistItem" name = "<?php echo $row['furnitureId']; ?>">
                <td class=""><?php echo $i; ?></td>
                <td class=""><p><img style="max-height: 140px;" src=<?php echo "Resources/Images/Furniture/" .  $row["furnitureId"] . "/" . $row["imageName"]; ?> alt=" " class="productImage img-responsive"></p></td>
                <td class="productName">
                <?php echo $row["name"]; ?>
                </td>
                <!-- <td class=""> <span>9/03/2017</span></td> -->
                <!-- <td class=""><span style="color:green">In Stock</span></td> -->
                <td class="" style="text-align:  center;">
                    <span style="color:red">
											<?php
												$price = $row["price"];
												$discount = $row["discount"];

												echo "Php " . number_format(($price * (1 - $discount / 100)), 2);
											?>
										</span>

                </td>
                <td>
                    <div class="red_button addToCartButton" data-toggle="modal" data-target="#wishdia1" style="width: 150px; margin-top: 10px;"><a href="#">move to cart</a></div>

				  <!-- Modal-->
				  	<div id="wishdia1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to move this item to your cart?</p>
							</div>
							<div class="modal-footer">
							  <a href="cart.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
				  	<br>
					<div class="red_button removeFromWishlistButton" data-toggle="modal" data-target="#wishdia2" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>

				  <!-- Modal-->
				  	<div id="wishdia2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
						<div role="document" class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
							  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
							  <p>Are you sure you want to remove this item?</p>
							</div>
							<div class="modal-footer">
							  <a href="wishlist.php"><button type="button" class="btn red_button" style="color: white;"> Yes</button></a>
							  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
							</div>
						  </div>
						</div>
				  	</div>
                </td>
            </tr>
						<?php
								}
							}
						?>
        </tbody>
    </table>

		</div>
	</div>

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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

<script src="js/custom.js"></script>

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

	$("#wishlistItemsContainer").on("click", ".productName", function(){
		var id = $(this).closest(".wishlistItem").attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$("#wishlistItemsContainer").on("click", ".productImage", function(){
		var id = $(this).closest(".wishlistItem").attr("name");
		$("#selectedFurnitureField").val(id);
		$("#selectedFurnitureForm").submit();
	});

	$("#wishlistItemsContainer").on("click", ".addToCartButton", function(e){
		e.preventDefault();
		var id = $(this).closest(".wishlistItem").attr("name");
		$("#cartItemField").val(id);
		$("#cartForm").submit();
	});

	$("#wishlistItemsContainer").on("click", ".removeFromWishlistButton", function(){
		var customerId = <?php
			if(isset($_SESSION["customerId"])){
				echo $_SESSION["customerId"];
			}else{
				echo -1;
			}
		?>;

		RemoveFromWishlist(customerId, $(this).closest(".wishlistItem").attr("name"), $(this));
	});
});

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
			// div.removeClass("active");
			location.reload();
		},
		error: function(result) {

		}
	});
}
</script>
</body>

</html>
