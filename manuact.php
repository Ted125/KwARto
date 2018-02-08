<!DOCTYPE html>
<?php
  ob_start();
  //require("Controllers/Login.php");
  session_start();
  if(strcmp($_SESSION['userType'],'seller') != 0){
      header("Location:index.php");
  }else if(strcmp($_SESSION['userStatus'], 'inactive') == 0){
    header("Location:uploaddocument.php");
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>kwARto 2018</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Web Icon -->
    <link rel="shortcut icon" href="images/icon.png">

  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>kw </span><strong>AR</strong>to</div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Notifications -->

                <!-- Logout    -->
                <li class="nav-item"><a href="Controllers/Logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php
                      if(file_exists('Resources/Images/User/'.$_SESSION['userId'].'/'.$_SESSION['image'].'')) {
                        echo 'Resources/Images/User/'.$_SESSION['userId'].'/'.$_SESSION['image'].'';
                      }else{
                        echo 'Resources/Images/User/default/default.png';
                      }
                      ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['name'];?></h1>
              <p>Manufacturer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="manuindex.php"> <i class="icon-list"></i>Reports</a></li>
                    <li><a href="prodsmanu.php"> <i class="icon-padnote"></i>Products Management</a></li>
                    <li><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li><a href="uploaddocument.php"> <i class="fa fa-upload"></i>Upload Document</a></li>
                    <li><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
                    <li class="active"><a href="manuact.php"> <i class="fa fa-street-view"></i>Customer Activity</a></li>

          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="manuprofile.php"> <i class="icon-user"></i>Profile </a></li>
            <li><a href="Controllers/Logout.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Customer Activity</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Customer Activity</li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6">
            <div class="container-fluid">
              <div class="row">
                <!-- Customer Questions -->
                <div class="col-lg-6">
                  <div class="daily-feeds card">
                    <div class="card-header">
                      <h3 class="h4">Customer Questions</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Questions-->
                       <?php include('Controllers/SellerDisplayQuestions.php');?>
                    </div>
                  </div>
                </div>
                <!-- Customer Comments -->
                <div class="col-lg-6">
                  <div class="daily-feeds card">
                    <div class="card-header">
                      <h3 class="h4">Customer Comments</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Reviews-->
                        <?php include('Controllers/SellerDisplayReviews.php');?>
                    </div>
                  </div>
                </div>

                <!-- Ratings-->
                <!-- <div class="col-lg-12">
                  <div class="recent-updates card">
                    <div class="card-header">
                      <h3 class="h4">Product Ratings</h3>
                    </div>
                    <div class="card-body no-padding">

                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="icon"><i class="fa fa-star-half-o"></i></div>
                          <div class="title">
                            <a href="#" style="text-decoration: none;"><h5>Comfy Chair</h5></a>
                            <p>Jane Doe</p>
                            </div>
                          </div>
                            <div class="text-right">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                            </div>
                        <div class="date text-right"><strong>29</strong><span>December 2017</span></div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 col-lg-12 text-right">
                  <p>kwARto &copy; 2017-2019</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
