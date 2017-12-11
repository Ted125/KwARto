<!DOCTYPE html>
<html>

<head>

    <?php include'Access/Header.php'; ?>

  </head>
  <style>

    <?php include'Access/Style.php'; ?>
    #profile{
    	padding: 2%;
    }

  </style>
  <body>

    <?php include'Access/Navbar.php'; ?>
<!-- about -->
	<?php 
	if(!isset($_SESSION['userId'])){
		include'Access/Error.php';
	} else {
		echo '
		<div id="profile" class="container">
			<div class="row">
				<div id="profileHeader" class="col-lg-04" align="center">
					<h2><span>Account Settings</span></h2><br>
						<div id="profileContents" class="col-lg-02" align="left">
					';
							//echo "<h4>Number: ".$_SESSION['userId']."</h4>";
							echo "<b>User Name: </b>".$_SESSION['username']." 
								<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='username'></input>
										<input name='newData' type='text'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
							echo "<b>Password: </b>********
								<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='password'></input>
										<input name='newData' type='password'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
							echo "<hr>";
							echo "<b>Name: </b>".$_SESSION['firstName']." ".$_SESSION['middleName']." ".$_SESSION['lastName']." <div align='right'><a class='editLink' href='#'>edit</a></div>";
							echo "<hr>";
							echo "<b>Birth Date: </b>".$_SESSION['birthdate']." <div align='right'><a class='editLink' href='#'>edit</a></div>";
							echo "<hr>";
							echo "<b>Gender; </b>".$_SESSION['gender']."
								<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='gender'></input>
										<input name='newData' type='text'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
							echo "<hr>";
							echo "<b>Type: </b>".$_SESSION['userType']."";
							echo "<hr>";
							echo "<b>Date Added: </b>".$_SESSION['dateAdded']."";
							echo "<hr>";
							echo "<b>Email Address: </b>".$_SESSION['email']."
								<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='email'></input>
										<input name='newData' type='text'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
							echo "<hr>";
					    	echo "<b>Mobile Number: </b>".$_SESSION['mobileNumber']."
					    		<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='mobileNumber'></input>
										<input name='newData' type='text'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
					    	echo "<hr>";
					    	echo "<b>Address: </b>".$_SESSION['address']."
					    		<form action='Controllers/UpdateUser.php' method='POST'> 
									<div align='right'>
										<input name='field' type='hidden' value='address'></input>
										<input name='newData' type='text'></input>
										<button class='btn btn-warning submit'>edit</button>
									</div>
								</form>";
					    	echo "<hr>";
					    	

					    
		echo '	    	</div>
		    	<a href="#">I would like to change my personal info.</a>
		    	</div>
		    </div>
	    </div>';
	}
    ?>
    

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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
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