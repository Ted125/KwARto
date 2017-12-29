<!DOCTYPE html>
<html lang="en">
<head>

    <?php include'Access/Header.php'; ?>

</head>
<style>

<?php include'Access/Style.php'; ?>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
<?php
        if(strcmp($_SESSION['userType'], "admin") != 0){
            header( "Location: http://localhost/capstone-project/error.php" );
        }

?>
<?php include'Access/Navbar.php'; ?>
<div class="admin backdrop" style="padding-left: 200px; padding-right: 200px;">
    
    <h1>Henlo admin!</h1>
    <p>Make sure that every table can be linked to the their own page depending on the userType</p>
    <?php


    ?>
    <table>
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Type</th>
            <th>Status</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Date Added</th>
        </tr>
        <?php require("Controllers/DisplayUsers.php");?>
    </table>
</div>

<!-- //footer -->
<?php include'Access/Footer.php'; ?>
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
<!-- /.container -->  
<?php include'Access/ScriptLinks.php'; ?>


</body>

</html>
