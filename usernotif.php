n<!DOCTYPE html>
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
		<div class="row">
			<div class="col">

				<div class="breadcrumbs d-flex flex-row align-items-center" style="margin-bottom: 20px;">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="usernotif.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Notifications</a></li>
					</ul>
				</div>

			</div>
		</div>

		<h2><i class="fa fa-bullhorn" aria-hidden="true"></i> Notifications</h2>
		<h4>You currently have: <span style="color: #d42d2d">2</span> Notifications</h4>
				<table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
					<tbody class="text-center">
					<tr class="">
						<!-- Image should link to the image of the item to be received -->
					<!-- <td class=""><a href="#"><img data-toggle="modal" data-target="#notifimg" style="max-height: 140px;" src="./images/notifs/package2.png" alt=" " class="img-responsive"></a></td> -->
					<td class=""><i class="fa fa-archive" style="color: #d42d2d;" aria-hidden="true"></td>
						<!-- Modal-->
					  	<div id="notifimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
							<div role="document" class="modal-dialog">
							  <div class="modal-content" >
								<div class="modal-header">
								  <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
								  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
								</div>
								<div class="modal-body">
								  <p><strong>Order ID:</strong> 123028</p>
								  <p><strong>Order Amount:</strong> P2,250.00</p>
								  <p><strong>Shipping/Delivery Fee:</strong> P100.00</p>
								  <p><strong>Total Payment:</strong> P2,350.00</p>
								  <p><strong>Mode of Payment:</strong> Cash On Delivery</p>
								  <p><strong>Expected Arrival:</strong> January 20, 2018</p>
								</div>
								<div class="modal-footer">
								  <a href="transhist.php"><button type="button" class="btn red_button" style="color: white;"> View Details</button></a>
								  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
								</div>
							  </div>
							</div>
					  	</div>
					<td class="">System Message</td>
					<td class="">Have you received your item?</td>
					<td class="" style="text-align:  center;">	
						<div class="red_button" data-toggle="modal" data-target="#cartdia5" style="width: 150px; margin-top: 10px;"><a href="#">View details</a></div>
						  <!-- Modal-->
						  	<div id="cartdia5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
								<div role="document" class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
									  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
									</div>
									<div class="modal-body">
									  <p><strong>Order ID:</strong> 123028</p>
									  <p><strong>Order Amount:</strong> P2,250.00</p>
									  <p><strong>Shipping/Delivery Fee:</strong> P100.00</p>
									  <p><strong>Total Payment:</strong> P2,350.00</p>
									  <p><strong>Mode of Payment:</strong> Cash On Delivery</p>
									  <p><strong>Expected Arrival:</strong> January 20, 2018</p>
									</div>
									<div class="modal-footer">
									  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
									</div>
								  </div>
								</div>
						  	</div>
					</td>
					</tr>
					<tr class="">
						<!-- <td class=""><a href="#"><img style="max-height: 140px;" src="./images/notifs/way2.png" alt=" " class="img-responsive"></a></td> -->
						<td class=""><i class="fa fa-clipboard" style="color: #d42d2d;" aria-hidden="true"></td>
						<td class="">System Message</td>
						<td class="">Your order is on the way</td>
						<td class="" style="text-align:  center;">	
							<div class="red_button" data-toggle="modal" data-target="#cartdia5" style="width: 150px; margin-top: 10px;"><a href="#">View details</a></div>
						  <!-- Modal-->
						  	<div id="cartdia5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
								<div role="document" class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
									  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
									</div>
									<div class="modal-body">
									  <p><strong>Order ID:</strong> 123028</p>
									  <p><strong>Order Amount:</strong> P2,250.00</p>
									  <p><strong>Shipping/Delivery Fee:</strong> P100.00</p>
									  <p><strong>Total Payment:</strong> P2,350.00</p>
									  <p><strong>Mode of Payment:</strong> Cash On Delivery</p>
									  <p><strong>Expected Arrival:</strong> January 20, 2018</p>
									</div>
									<div class="modal-footer">
									  <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
									</div>
								  </div>
								</div>
						  	</div>
						</td>
					</tr>
				</tbody></table>
				
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
								<td class=""><a href="#"><img style="max-height: 140px;" src="http://www.zurifurniture.com/common/images/products/large/medici_chair_red2.jpg" alt=" " class="img-responsive"></a></td>
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
									<div class="red_button" style="width: 150px"><a href="wishlist.php">move to wishlist</a></div><br>
									<div class="red_button" style="width: 150px; background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>
								</td>
							</tr>
									<tr class="">
										<td class="">2</td>
										<td class=""><a href="#"><img style="max-height: 140px;" src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" alt=" " class="img-responsive"></a></td>
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
											<div class="red_button" style="width: 150px;"><a href="wishlist.php">move to wishlist</a></div><br>
											<div class="red_button" style="width: 150px;background-color: #444; margin-top: 10px;"><a href="#">remove from list</a></div>
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
            </div>
		</div>

	<!-- Benefit HERE-->
	<?php include('Access/Benefit.php');?>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>

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
</script>
</body>

</html>
