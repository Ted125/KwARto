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
                
                <?php 
                  if(!isset($_SESSION['userId'])){
                    echo '<li><a href="loginnew.php"><button class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Login</button></a></li>';
                  } else {
                    echo '
                          <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-exclamation"></i><span class="">  Notifications</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                  <div class="msg-body">
                                    <h6 class="">System</h6><span style="font-size: 0.8em;">Have you received your item?</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                                  <div class="msg-body">
                                    <h6 class="">System</h6><span style="font-size: 0.8em;">Your delivery is on the way</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages</strong></a></li>
                            </ul>
                          </li>     
                          <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>Hello, '.$_SESSION['username'].'</a></li>
                          <li data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center checkout">
                            <!-- MODAL CONTENT BELOW -->
                            <a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span id="checkout_items" class="checkout_items">2</span>
                             </a>
                          </li>';
                  }
                ?>
                <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>   -->
              </ul>
              <ul class="navbar_user row">
                <!-- <?php 
                  if(!isset($_SESSION['userId'])){
                    echo '<li><a href="loginnew.php"><i class="fa fa-search" aria-hidden="true">Login</i></a></li>';
                  } else {
                    echo '
                          <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>Hello, '.$_SESSION['username'].'</a></li>
                          <li data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center checkout">
                            <!-- MODAL CONTENT BELOW -->
                            <a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span id="checkout_items" class="checkout_items">2</span>
                             </a>
                          </li>';
                  }
                ?> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>