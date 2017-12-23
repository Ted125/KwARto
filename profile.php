<!DOCTYPE html>
<html>

<head>

    <?php include'Access/Header.php'; ?>

  </head>
  <style>

    <?php include'Access/Style.php'; ?>

  </style>
  <body>
<!-- header -->
    <?php include'Access/Navbar.php'; ?>
<div>	
		</div>
		<div class="banner_nav_right">
			<div class="agileinfo_single backdrop" style="padding-left:200px; padding-top: 50px;">
				<h5 style="margin-bottom: -10px;">User Profile</h5>
				<div class="col-md-3 agileinfo_single_left text-center">
					<img id="example" src="http://via.placeholder.com/300" alt=" " class="img-responsive" style="margin:auto;" />
					<button class="profile-btn" style="margin-top: 10px;">Select New Photo</button>
					<button class="profile-btn">Update Photo</button>
				</div>
				<div class="col-md-8 agileinfo_single_right">	
					<div class="w3agile_description">
						<div class="row">
							<h3>Reviews Dashboard</h3><br>
							<h4 class="prof-labels">Products Rated : <span class="prof-items">0</span></h4>
							<h4 class="prof-labels">Products Purchased : <span class="prof-items">0</span></h4>
							<h4 class="prof-labels">Comments Posted : <span class="prof-items">0</span></h4>
							
							<br>
						</div>
						<div class="row">
							<h3>Personal Information</h3><br>
							<h4 class="prof-labels">First Name : <span class="prof-items">John</span></h4>
							<h4 class="prof-labels">Middle Name : <span class="prof-items">Smithers</span></h4>
							<h4 class="prof-labels">Last Name : <span class="prof-items">Smith</span></h4>
							<h4 class="prof-labels">Birthdate : <span class="prof-items">January 09, 1994</span></h4>
							<h4 class="prof-labels">Gender : <span class="prof-items">Male</span></h4>
							<h4 class="prof-labels">Shipping Address : <span class="prof-items">124 Internet St., Please Help</span></h4>
							<h4 class="prof-labels">E-mail Address : <span class="prof-items">place@holder.com</span></h4>
							<button class="change-pw-btn">Change E-mail Address</button>
							<h4 class="prof-labels">Password : <span class="prof-items">********</span></h4>
							<button class="change-pw-btn">Change Password</button>
						</div>
							<button class="change-pw-btn" style="float: right;">Update Account Information</button>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="subscribe now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 w3_footer_grid">
                <h3>information</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="mail.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>policy info</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">terms of use</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="agile_footer_grids">
                <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h5>connect with us</h5>
                        <ul class="agileits_social_icons">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
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

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>