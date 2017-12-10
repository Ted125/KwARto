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
<!-- privacy -->
		<div class="privacy backdrop">
			<div class="privacy1">
				<h3>Privacy Policy</h3>
				<div class="banner-bottom-grid1 privacy1-grid">
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
						<li>Profile <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-search" aria-hidden="true"></i></li>
						<li>Search <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
						<li>News Feed <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i></li>
						<li>Applications <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
				</div>
			</div>
			<div class="privacy1">
				<h3>Terms of Use</h3>
				<div class="banner-bottom-grid1 privacy2-grid">
					<div class="privacy2-grid1">
						<h4>deserunt mollit anim id est laborum?</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<div class="privacy2-grid1-sub">
							<h5>1. sint occaecat cupidatat non proident, sunt</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>2.perspiciatis unde omnis iste natus error</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>3. natus error sit voluptatem accusant</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>4. occaecat cupidatat non proident, sunt in</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>5. deserunt mollit anim id est laborum</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- //privacy -->
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
                    <li><a href="about.html">About Us</a></li>
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