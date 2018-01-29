
<header class="header trans_300">
<!-- 
    <div class="top_nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="top_nav_left">Sign Up Now and avail free shipping off your first purchase!</div>
          </div>

        </div>
      </div>
    </div> -->

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
                      <input type="text" placeholder="What are you looking for?" name="search" style="color: #d42d2d; width:300px; font-size: 1em; padding:10px;">
                      <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1em;"></i></button>
                    </form>
                 </div>
                </li>
                <li><a href="index.php">home</a></li>
                <li><a href="categories.php">categories</a></li>
                <!-- <li><a href="about.php">about us</a></li> -->
                <!-- <li><a href="contact.php">contact</a></li> -->
                <?php
                  if(!isset($_SESSION['userId'])){
                    echo '<li><a href="loginnew.php"><button class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Login</button></a></li>';
                  } else {
                    echo '<li><a href="wishlist.php">wishlist</a></li>
                          <li><a href="transhist.php">history</a></li>
                          <li class="align-items-center checkout">
                            <!-- MODAL CONTENT BELOW -->
                            <a href="cart.php">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                             </a>
                          </li>

                          <li class="nav-item dropdown">

                          <a href = "profile.php"><img height="35" width="35" src="'.$_SESSION['image'].'"></img></a>

                          <ul aria-labelledby="notifications" class="dropdown-menu">
                              <li><a rel="nofollow" href="usernotif.php" class="dropdown-item d-flex">
                                  <div class="msg-body">
                                    <h6 class="" style="color: red;"><i class="fa fa-bullhorn"></i> System Message</h6><span style="font-size: 0.8em;">Have you received your item?</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="usernotif.php" class="dropdown-item d-flex">
                                  <div class="msg-body">
                                    <h6 class="" style="color: red;"><i class="fa fa-bullhorn"></i> System Message</h6><span style="font-size: 0.8em;">Your delivery is on the way</span>
                                  </div></a></li>
                              <li><a rel="nofollow" href="Controllers/Logout.php" class="dropdown-item all-notifications" style="padding-left:120px;"> <strong>Logout</strong></a></li>
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

    <div class="main_nav_container">
      <div class="container">
        <div class="row">
              <div class="products-breadcrumb">
        <div class="container">
            <ul style="display:-webkit-inline-box;">
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FURNITURE <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem; font-size: 0.9em;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="http://geniesoft.biz/wp-content/uploads/2017/11/red-living-room-set-modern-living-room-interior-with-red-sofa-red-living-room-furniture.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"This is a list of furniture types. Furniture includes objects such as tables, chairs, beds, desks, backpacks, dressers, or cupboards. These said objects are usually kept in a house or other building to make it suitable or comfortable for living or working in.</p>
                                </div>
                              </td>
                              <td class="rightmenu " width="20%" style="padding-left: 30px">
                                <a href="#" class="linkmenu linktop"><strong>Bedroom</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 8;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop"><strong>Dining Room</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 9;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>

                              <td class="rightmenu" width="20%" style="padding-left: 10px;">
                                <a href="#" class="linkmenu linktop"><strong>Kitchen</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 10;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br> 

                                <a href="#" class="linkmenu linktop"><strong>Living Room</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 11;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>

                              <td class="rightmenu" width="20%" style="padding-left: 10px">

                                <a href="#" class="linkmenu linktop"><strong>Kids Furniture</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 12;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop"><strong>Office Furniture</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 13;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop"><strong>Outdoor Furniture</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 14;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }
                                ?>
                                      <a href="#" class="linkmenu linkcontent"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BED & BATH <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem;">
                      <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg"><img style="text-align:center; margin-bottom:10px; margin-top: 5px;" src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DECOR <span></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="30%" style="padding-left:20px;"><div class="leftimg"><img style="text-align:center; margin-bottom:10px; margin-top: 5px;" src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOUSEWARE <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="30%" style="padding-left:20px;"><div class="leftimg"><img style="text-align:center; margin-bottom:10px; margin-top: 5px;" src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WINDOW TREAMENTS <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem;  margin-left: -300px;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="30%" style="padding-left:20px;"><div class="leftimg"><img style="text-align:center; margin-bottom:10px; margin-top: 5px;" src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent" width="30%">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown nav2">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIGHTING <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem;  margin-left: -600px;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="30%" style="padding-left:20px;"><div class="leftimg"><img style="text-align:center; margin-bottom:10px; margin-top: 5px;" src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent" width="30%">
                                  <strong>Furniture Here</strong>
                                  <p style="padding-right: 7px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong><br>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress<br>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress<br>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress<br>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
        </div>
    </div>
        </div>
      </div>
    </div>

  </header>
