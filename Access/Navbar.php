<header class="header trans_300">

    <div class="top_nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="top_nav_left">Sign Up Now and avail free shipping off your first purchase!</div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="main_nav_container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-right">
            <div class="logo_container">
              <a href="index.php"><img style="max-width: 150px;" src="images/newlogo.png"></a>
            </div>
            <nav class="navbar">
              <ul class="navbar_menu">
                <li><a href="index.php">home</a></li>
                <li><a href="categories.php">categories</a></li>
                <li><a href="about.php">about us</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="wishlist.php">wishlist</a></li>
              </ul>
              <ul class="navbar_user row">
                <?php 
                  if(!isset($_SESSION['userId'])){
                    echo '<li><a href="loginnew.php"><i class="fa fa-search" aria-hidden="true">Hello Guest</i></a></li>';
                  } else {
                    echo '<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                          <li><a href="profile.php"><img height="35" width="35" src="'.$_SESSION['image'].'"></img></a></li>
                          <li data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center checkout">
                            <!-- MODAL CONTENT BELOW -->
                            <a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span id="checkout_items" class="checkout_items">2</span>
                             </a>
                          </li>';
                  }
                ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>