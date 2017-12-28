<!-- Navigation -->

<div class="logo_products">
        <div class="container">
            <div class="logo_products_left">
                <img src="images/newlogo.png" href="index.html" style="max-height: 50px;">
            </div>
            <div class="logo_products_right1">
                <div class="row">
                  <div class="col-md-8">

                    <form action="#" method="post">
                      <input class="field" type="text" style="padding:5px;" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
                    
                  </form>
                  </div>
                  <div class="col-md-1">
                    <button class="dropdown cart_details_drop" >
                   
                          <a href="#" class=" dropdown-toggle" data-toggle="dropdown">Cart</a>
                          <div class="mega-dropdown-menu">
                              <div class="w3ls_vegetables">
                                  <ul class="dropdown-menu drp-mnu">
                                      <li><span>0 items</span></li>
                                      <li><span>0.00</span></li>
                                  </ul>
                              </div>
                          </div>
                      </button> 
                  </div>

                </div>
            </div>
            <div class="logo_products_left1">
                <ul class="special_items items-bread">
                    <li><a href="index.php">Home</a></li>  
                    <li><a href="home.php">Store</a></li>           
                    <li><a href="privacy.php">Privacy Policy</a></li>              
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="mail.php">Contact Us</a></li>
                    <?php
                      if(!isset($_SESSION['userId'])){
                                  //Session is empty
                        echo "<li class='item-right'><button class='cart_details_drop'><a href='login.php' style='color: white;'><span>Login/Sign-Up</span></a></button></li> ";
                      } else {
                                  //Session is active
                        echo "<li class='nav-item'>
                        <p class='navtext' style='position: inherit;margin-left: 150px;'><b>Henlo</b>,";

                        if(strcmp($_SESSION['userType'], "admin") == 0){
                          echo "<a href='adminPage.php' id='username'>".$_SESSION['username']."</a>
                          |";
                        } else {
                          echo "<a href='profile.php' id='username'>".$_SESSION['username']."</a>
                          |";
                        }

                        echo "<button class='cart_details_drop' style='position: absolute;right: 190px;top: 80px;'><a href='Controllers/Logout.php' id='logoutForm' style='color: white;'><span>Logout</span></a></button></li>
                        ";
                      }
                    ?>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FURNITURE <span ></span></a>
                    <ul class="dropdown-menu proddrop">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BED & BATH <span ></span></a>
                    <ul class="dropdown-menu proddrop">
                      <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DECOR <span></span></a>
                    <ul class="dropdown-menu proddrop">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <!-- <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOUSEWARE <span ></span></a>
                    <ul class="dropdown-menu normalpadd">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WINDOW TREAMENTS <span ></span></a>
                    <ul class="dropdown-menu normalpadd">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIGHTING <span ></span></a>
                    <ul class="dropdown-menu normalpadd">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top"> 
                              <td width="30%"><div class="leftimg"><img src="http://via.placeholder.com/150x150"></div>
                                <div class="leftcontent">
                                  <strong>Furniture Here</strong>
                                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="45%">
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                    <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                              <td class="rightmenu" width="45%">
                                    
                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                                <a href="#" class="linkmenu linktop"><strong>Matress</strong></p>
                                <a href="#" class="linkmenu linkcontent">Foam Mattress</p>
                                <a href="#" class="linkmenu  linkcontent">Foam Mattress</p>
                                <a href="#" class=" linkmenu linkcontent">Foam Mattress</p>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </ul>
                </li>
            </ul>
        </div>
    </div>