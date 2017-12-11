<!DOCTYPE html>
<html>

<head>

    <?php include'Access/Header.php'; ?>

  </head>
  <style>

    <?php include'Access/Style.php'; ?>

  </style>
  <body>

    <?php include'Access/Navbar.php'; ?>
<!-- about -->
		<div class="privacy about">
			<h3>Chec<span>kout</span></h3>
			
	      <div class="checkout-right">
					<h4>Your shopping cart contains: <span>3 Products</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
						
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody><tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="single.html"><img src="images/5.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Comfy Chair</td>
						<td class="invert">P805.00</td>
						<td class="invert" style="padding-left: 20px; padding-right: 50px;">	
							<div class="rem">
								<div class="close1"> </div>
							</div>

						</td>
					</tr>
					<tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="single.html"><img src="images/5.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Comfy Chair</td>
						<td class="invert">P805.00</td>
						<td class="invert" style="padding-left: 20px; padding-right: 50px;">	
							<div class="rem">
								<div class="close2"> </div>
							</div>

						</td>
					</tr>
					<tr class="rem3">
						<td class="invert">3</td>
						<td class="invert-image"><a href="single.html"><img src="images/5.png" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Comfy Chair</td>
						<td class="invert">P805.00</td>
						<td class="invert" style="padding-left: 20px; padding-right: 50px;">	
							<div class="rem">
								<div class="close3"> </div>
							</div>
	
						</td>
					</tr>

				</tbody></table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to Checkout</h4>
					<ul>
						<li>Comfy Chair <i>-</i> <span>P805.00 </span></li>
						<li>Comfy Chair <i>-</i> <span>P805.00 </span></li>
						<li>Comfy Chair <i>-</i> <span>P805.00 </span></li>
						<li>Total Service Charges <i>-</i> <span>P100.00</span></li>
						<li>Total <i>-</i> <span>P2615.00</span></li>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Customer Details</h4>
				<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full Name: </label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile Number:</label>
														    <input class="form-control" type="text" placeholder="Mobile number">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Address: </label>
														 <input class="form-control" type="text" placeholder="Address">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
													<div class="controls">
															<label class="control-label">Address type: </label>
												     <select class="form-control option-w3ls" style="height: 100%;">
																							<option>Office</option>
																							<option>Home</option>
																							<option>Commercial</option>
							
																					</select>
													</div>
													<div class="controls">
															<label class="control-label">Mode Of Payment: </label>
												     <select class="form-control option-w3ls" style="height: 100%;">
																							<option>Cash on Delivery</option>
																							<option>Credit/Debit</option>
																							<option>Pay Through Banking</option>
																							<option>Pay Online via PayPal</option>
							
																					</select>
													</div>
											</div>
											<button class="submit check_out">Complete Checkout</button>
										</div>
									</section>
								</form>
									<div class="checkout-right-basket">
				        	<a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			      	</div>
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- newsletter -->
    <?php include'Access/Footer.php'; ?>
    <!-- //footer -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
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
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.js"></script>
    <script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function(evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 1) {
            alert('The minimum order quantity is 1. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
    </script>
</body>

</html>