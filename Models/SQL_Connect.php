<?php
<<<<<<< HEAD
	$mysqli = mysqli_connect("localhost", "root", "", "kwarto_db");
=======
	$mysqli = mysqli_connect("localhost", "root", "", "interiar_db");
>>>>>>> parent of 46f7da8... FUNCTIONS

	/* check connection */
	if (!$mysqli) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
