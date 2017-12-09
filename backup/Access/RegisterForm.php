<div align="center">
	<div id="registerModal" class="modal">
		<div class="col-sm-6">
			<div class="modal-content">
				<div align="left" style="background-color: rgb(255,50,50); padding: 1%;">
					<h3 style="text: white;"">Register</h3>
				</div>
				<div align="left" style="background-color: #efefef; padding: 2%;">
					<form action="#" method="POST">
						<div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control" name="registerEmail">
						</div>
						<div class="form-group">
						    <label for="username">User Name:</label>
						    <input type="text" class="form-control" name="registerUsername">
						</div>
						<div class="form-group">
						    <label for="password">Password:</label>
						    <input type="password" class="form-control" name="registerPassword">
						</div>
						<div class="form-group">
						    <label for="repeatPassword">Repeat Password:</label>
						    <input type="password" class="form-control">
						</div>
						<div class="form-group" align="right">
							<button type="submit" class="btn btn-success btn-sm">Submit</button>
							<button id="closeModal" type="button" class="btn btn-danger btn-sm">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById('registerModal');
	//var modal = $('registerModal');

	// Get the button that opens the modal
	var btn = document.getElementById("registerForm");
	//var btn = $('registerForm');

	// Get the <span> element that closes the modal
	var span = document.getElementById("closeModal");
	//var span = $('closeModal');

	// When the user clicks on the button, open the modal 
	btn.onclick = function() {
	    modal.style.display = "block";
	}

	// $('#registerForm').click(function(){
	// 	var m = modal.style.display = "block"
	//     m.fadeIn();
	// });

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	    modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
</script>