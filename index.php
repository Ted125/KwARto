<!DOCTYPE html>
<html lang="en">
<head>

    <?php include'Access/Header.php'; ?>

</head>
<style>

<?php include'Access/Style.php'; ?>

</style>
<body>

    <?php include'Access/Navbar.php'; ?>
    <!-- <?php include'Access/RegisterForm.php'; ?> -->
    <div class="" style="padding-left: 200px; padding-right: 200px;">
        <br>
        <br>
        <div class="w3ls_w3l_banner_nav_right_grid">
            <h3>This Week's Deals!</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <h6>Decor</h6>
                    <?php include'Access/CardProd.php'; ?>
                    <?php include'Access/CardProd.php'; ?>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- newsletter -->

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
