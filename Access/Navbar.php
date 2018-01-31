
<header class="header trans_300">

    <div class="top_nav" style="height: 90px!important; background-color: white;">
      <div class="container">
        <div class="row">
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
                          <input type="text" placeholder="What are you looking for?" name="search" style="border: 0; outline: 0; background: transparent; border-bottom: 1px solid #d42d2d; color: #d42d2d; width:300px; font-size: 1em; padding:10px 10px 0px 10px;">
                          <button style="padding: 10px 15px 10px 15px;border: none;background: none;" type="submit"><i class="fa fa-search" style="font-size: 1em;"></i></button>
                        </form>
                     </div>
                    </li>
                    <li><a href="index.php">home</a></li>
                    <li><a href="categories.php" id = "navbarCategories">categories</a></li>
                    <?php
                      if(!isset($_SESSION['userId'])){
                        echo '<li><a href="loginnew.php"><button class="btn btn-primary" style="background-color: #d42d2d; border: 0px;">Login</button></a></li>';
                      } else if(strcmp($_SESSION['userType'], "admin") == 0){
                        echo '<li><a href="admindex.php"><button class="btn btn-primary" style="margin-right: -50px; background-color: #d42d2d; border: 0px;">Back to Dashboard</button></a></li>';
                      } else if(strcmp($_SESSION['userType'], "seller") == 0){
                        echo '<li><a href="manuindex.php"><button class="btn btn-primary" style="margin-right: -50px; background-color: #d42d2d; border: 0px;">Back to Dashboard</button></a></li>';
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
                              <td width="15%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="https://sep.yimg.com/ay/yhst-130150896824807/orange-fabric-sofa-loveseat-and-chair-set-22.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Furniture</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">Home is that blissful place where you can kick off your shoes, put your feet up, and just be yourself, but if your furniture isn’t comfortable or looks out of place, you don’t get that sense of relief when you walk in the door. Purchasing furniture for your home lets you create the relaxed ambiance and character that makes an otherwise plain house feel like your home. Furnishings from KwARto and its partners provide you with the quality you want and also give you that peaceful, at-home feeling so you can kick back and relax.</p>
                                </div>
                              </td>
                              <td class="rightmenu " width="23%" style="padding-left: 30px">
                                <a href="#" class="linkmenu linktop" name = "8"><strong>Bedroom</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "9"><strong>Dining Room</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>

                              <td class="rightmenu" width="20%" style="padding-left: 10px;">
                                <a href="#" class="linkmenu linktop" name = "10"><strong>Kitchen</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "11"><strong>Living Room</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>

                              <td class="rightmenu" width="20%" style="padding-left: 10px">

                                <a href="#" class="linkmenu linktop" name = "12"><strong>Kids Furniture</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "13"><strong>Office Furniture</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "14"><strong>Outdoor Furniture</strong><br></a>

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

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
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
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem; font-size: 0.9em;">
                      <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="http://homesfeed.com/wp-content/uploads/2015/02/white-painted-wall-white-ceramic-floor-white-painted-ceiling-white-cozy-armchair-white-bedsheet-red-bedspread-white-cushions-round-unframed-mirror-gray-bedroom-rug.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Bed & Bath</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">One of the least-mentioned but most important rooms in the home, decorating your bathroom to your exact taste and style is a must. Essentially, this is the room that gets your day off on the right foot every morning, the room where you bathe your children and perhaps even the room where you take in a good book. Choose different bath accessories, furniture and decor to let your personal tastes shine through and to give your bathroom a complete, updated look</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "90"><strong>Mattress</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 90;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "89"><strong>Pillows</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 89;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "88"><strong>Bed Sheets</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 88;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "87"><strong>Throws + Blankets</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 87;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "86"><strong>Bathware</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 86;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DECOR <span></span></a>
                    <ul class="dropdown-menu proddrop" style="min-width: 50rem; font-size: 0.9em;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="http://midtownkalamazoo.com/img/living-room-decorations/_large/attractive-living-rooms-room-decor-images-red-living-room-decor-red-plus-red-together-with-living-rooms-room-decor-images_living-room-decorations_1200x1000.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Decor</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">Moving into a new home or redecorating an existing space is an exciting journey, and you can do it all on your own by selecting statement pieces and decorative accents. Allow us at Pottery Barn to make the process even more delightful for you with our guide to getting started. To begin, consider what your personal style is and find products that coordinate with the theme.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "117"><strong>Accent Pillows + Throws</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 117;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "116"><strong>Wall Decor + Mirrors</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 116;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "115"><strong>Home Accents</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 115;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "114"><strong>Carpets</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 114;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "113"><strong>Room Dividers</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 113;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOUSEWARE <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="margin-left: -150px; min-width: 50rem; font-size: 0.9em;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="https://gomeraindividual.com/wp-content/uploads/2017/06/wohnen-23.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Houseware</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">Create an inspiring and appetizing dining experience with a smart makeover where your meals happen. If your breakfasts are boring start the day brightly with Leon bowls and dinnerware. The tasteful and fresh hand-painted cobalt blues and orange-golds on Leon dishwasher- and microwave-safe stoneware will perk up the gloomiest mornings. Bring more happy glow to the table in a dim breakfast area with the Explosion Chandelier or Belleville Pendant from the diverse lighting collection at KwARto.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "139"><strong>Dinnerware</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 139;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name ="138"><strong>Table Linens</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 138;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "137"><strong>Glassware</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 137;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "136"><strong>Sports Bottle + Flasks</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 136;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "135"><strong>Kitchenware</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 135;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WINDOW TREAMENTS <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="margin-left: -350px; min-width: 50rem; font-size: 0.9em;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="https://s-media-cache-ak0.pinimg.com/originals/2f/79/1d/2f791d46dbc8e804c0915ba7efb8635d.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Window Treatments</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">Once a room has been outfitted with furniture, it’s time to put on the finishing touches and add strength, beauty and usefulness with the right rugs and window treatments. From large area rugs that cover your entire floor to blackout curtains that keep out light when you want to, there are many options available for rugs and windows when you shop  KwARto.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "155"><strong>Window Accessories</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 155;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "154"><strong>Blinds</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 154;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "153"><strong>Curtain</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 153;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "152"><strong>Hooks</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 152;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "151"><strong>Rods</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 151;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "150"><strong>Tassels</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 150;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LIGHTING <span ></span></a>
                    <ul class="dropdown-menu proddrop" style="margin-left: -600px; min-width: 50rem; font-size: 0.9em;">
                        <table >
                          <tbody style="width:100%;">
                            <tr valign="top">
                              <td width="20%" style="padding-left:20px;"><div class="leftimg text-center"><img style="text-align:center;max-height: 150px; margin-bottom:10px; margin-top: 5px;" src="http://www.ifdm.it/media/post/dett/das-haus-imm-2018-lucie-koldova_07_6a5dfc.jpg"></div>
                                <div class="leftcontent">
                                  <strong>Lighting</strong>
                                  <p style="padding-right: 7px; font-size: 0.9em; text-align: justify;">Use home lighting fixtures to define the design aesthetic of your rooms and provide illumination for everyday tasks. We carry a wide selection of lighting fixtures for the home, from bright bathroom sconces to ornate chandeliers perfect for hanging above a formal dining room table. Light up a living room with floor lamps or wall fixtures that draw attention to a stunning piece of canvas wall art. Hang casual pendants above kitchen tables and islands for focused light or in breakfast nooks to brighten up the area. Check out the latest in on-trend home lighting to find lamps and wall sconces to give your home an instant upgrade.</p>
                                </div>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "166"><strong>Table Lamp + Desk Lamp</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 166;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "165"><strong>Floor Lamps</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 165;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "164"><strong>Wall Lamps</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 164;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "163"><strong>Chandelier</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 163;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
                              </td>
                              <td class="rightmenu" width="35%" style="padding-left: 20px">
                                <a href="#" class="linkmenu linktop" name = "162"><strong>Pendant Lighting</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 162;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "161"><strong>Outdoor Lighting</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 161;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "160"><strong>Ceiling Lights</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 160;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>

                                <br>

                                <a href="#" class="linkmenu linktop" name = "159"><strong>Ceiling Fan</strong><br></a>

                                <?php
                                  $_POST["categoryId"] = 159;

                                  require($_SERVER['DOCUMENT_ROOT'] . "/Capstone-Project/Controllers/LoadCategorySubtree.php");

                                  if($categorySubtreeResult != null){
                                    $i = 0;

                                    while($subtreeRow = mysqli_fetch_assoc($categorySubtreeResult)){
                                      $i++;

                                      if($i == 1){
                                        continue;
                                      }

                                      echo "<span>";

                                      for($spaceCount = 0; $spaceCount < $subtreeRow["depth"] - 1; $spaceCount++){
                                        echo "&emsp;";
                                      }

                                      echo "</span>";
                                ?>
                                      <a href="#" class="linkmenu linkcontent" name = "<?php echo $subtreeRow['categoryId']; ?>"><?php echo $subtreeRow["name"]; ?><br></a>
                                <?php
                                    }
                                  }
                                ?>
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
  <form id = "chosenNavForm" action = "categories.php" method = "POST">
    <input id = "chosenNavCategory" type = "hidden" name = "searchCategoryId" value = "1">
  </form>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
  $(".rightmenu").on("click", ".linkmenu", function(e){
    e.preventDefault();
    $("#chosenNavCategory").val($(this).attr("name"));
    $("#chosenNavForm").submit();
  });
</script>
