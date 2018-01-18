
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
                <li>
                  <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="What are you looking for?" name="search" style="color: #d42d2d; width:350px; font-size: 1em; padding:10px;">
          <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1em;"></i></button>
        </form>
     </div>
                </li>
                <li><a href="index.php">home</a></li>
                <li><a href="categories.php">categories</a></li>
                <!-- <li><a href="about.php">about us</a></li> -->
                <!-- <li><a href="contact.php">contact</a></li> -->
                <li><a href="wishlist.php">wishlist</a></li>
                <?php 
                  if(!isset($_SESSION['userId'])){
                    echo '<li><a href="loginnew.php"><button class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Login</button></a></li>';
                  } else {
                    echo ' <li data-toggle="modal" data-target="#myModal" class="align-items-center checkout">
                            <!-- MODAL CONTENT BELOW -->
                            <a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                             </a>
                          </li>

                          <li class="nav-item dropdown"><a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img height="35" width="35" src="'.$_SESSION['image'].'"></img></a>

                          <ul aria-labelledby="notifications" class="dropdown-menu">
                              <li><a rel="nofollow" href="usernotif.php" class="dropdown-item d-flex"> 
                                  <div class="msg-body">
                                    <h6 class="" style="color: red;"><i class="fa fa-bullhorn"></i> System Message</h6><span style="font-size: 0.8em;">Have you received your item?</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="usernotif.php" class="dropdown-item d-flex"> 
                                  <div class="msg-body">
                                    <h6 class="" style="color: red;"><i class="fa fa-bullhorn"></i> System Message</h6><span style="font-size: 0.8em;">Your delivery is on the way</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="loginnew.php" class="dropdown-item all-notifications" style="padding-left:120px;"> <strong>Logout</strong></a></li>
                            </ul>
                          </li>
                          ';
                  }
                ?>
              </ul>
              <ul class="navbar_user row">
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>