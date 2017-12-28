<!DOCTYPE html>
<html>
<head>
    <title>KwARto is an E-Commerce App integrating Augmented Reality</title>

    <?php include'Access/Header.php'; ?>

  </head>
  <style>

    <?php include'Access/Style.php'; ?>

    #alertMsg{
    	font-size: 0.8em;
    }

  </style>
  <body>

    <?php include'Access/Navbar.php'; ?>
<!-- login -->
		<div class="page_login backdrop">
			<h3>Sign In & Sign Up</h3>
			<div class="login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<p id="alertMsg" class="text-danger"></p>
					<form action="Controllers/Login.php" method="POST">
					  <input type="email" name="loginEmail" placeholder="Email" required=" ">
					  <input type="password" name="loginPassword" placeholder="Password" required=" ">
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="Controllers/Register.php" method="POST">
					  <input type="text" name="registerFName" placeholder="First Name" required=" ">
					  <input type="text" name="registerMName" placeholder="Middle Name" required=" ">
					  <input type="text" name="registerLName" placeholder="Last Name" required=" ">
					  <input type="date" name="registerBDay" class="form-module" placeholder="BDay" required=" ">
					  <input type="text" name="registerUsername" placeholder="Username" required=" ">
					  <input type="password" name="registerPassword" placeholder="Password" required=" ">
					  <input type="email" name="registerEmail" placeholder="Email Address" required=" ">
					  <input type="text" name="registerPhone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- newsletter-top-serv-btm -->
	<div class="newsletter-top-serv-btm" style="padding-bottom: 30px;">
		<div class="container">
			<br><h2>Modes of Payment</h2><br>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Add to Shopping Cart</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>Pay Online</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Cash On Delivery</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<br>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->
<?php include'Access/Footer.php'; ?>
    <!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
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

	paypal.minicart.cart.on('checkout', function (evt) {
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