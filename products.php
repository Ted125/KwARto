<!DOCTYPE html>
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
                <!-- Navbar Brand --><a href="products.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>kw </span><strong>AR</strong>to</div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn2" href="#" class="menu-btn shrinked"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row">
                <li class="nav-item"><a href="about.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="mail.php" class="nav-link">Contact Us</a></li>
                <li class="nav-item"><a href="privacy.php" class="nav-link">Privacy Policy</a></li>

              </ul>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                 
                <li class="nav-item"><a href="cprofile.php" class="nav-link">Welcome, Jane!</a></li>
                <!-- Logout    -->
                <li class="nav-item"><a href="loginnew.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar shrinked">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center" style="padding-left: 25px;">
            <div class="avatar"><a href="cprofile.php"><img src="https://www.shareicon.net/data/2016/07/05/791221_man_512x512.png" alt="..." class="img-fluid rounded-circle"></a></div>
            <div class="title">
              <h1 class="h4">Admin Name</h1>
              <p>Super Admin</p>
            </div>
          </div>
          <ul class="list-unstyled">
                    <li><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Deals</a></li>
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Featured</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>History</a></li>
                    <li class="active"><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Browse</a></li>
                    
          </ul>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Cart</a></li>
            <li><a href="loginnew.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner" style="width: 100%;">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Products</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Products </li>
            </ul>
          </div>
          <!-- Charts Section-->
          <section class="charts" style="background-color: #faf6f6">
            
            
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 col-lg-12 text-right">
                  <p>kwARto &copy; 2018-2019</p>
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
    <script src="js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>