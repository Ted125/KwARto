<!DOCTYPE html>
<?php
  session_start();
  if(strcmp($_SESSION['userType'],'admin') != 0){
      header("Location:index.php");
  }
?>
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
    
    <link href="tree.css" type="text/css" rel="stylesheet" />
    <!-- Web Icon -->
    <link rel="shortcut icon" href=" images/icon.png">
   
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
                <!-- Navbar Brand --><a href="admindex.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>kw </span><strong>AR</strong>to</div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
               
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
            <div class="avatar"><img src="https://www.shareicon.net/data/2016/07/05/791221_man_512x512.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['email']?></h1>
              <p style="padding-bottom: 0px;">Super Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
                    <li class="active"><a href="cats.php"> <i class="fa fa-archive"></i>Categories Management</a></li>
                    <li><a href="quescomp.php"> <i class="fa fa-envelope-open-o"></i>Complaints & Questions</a></li> 
                    <li><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Reports</a></li>
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li> <a href="adminnew.php"> <i class="fa fa-user"></i>Register </a></li>
            <li><a href="Controllers/Logout.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Categories Management</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a style="text-decoration: none;" href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="cats.php" style="text-decoration: none; color: #555;">Categories Management</a></li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6">   
            <div class="container-fluid">
              <div class="row">               

                <div class="col-lg-5">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Categories List</h3>
                    </div>
                    <div class="card-body">
                      <h6 class="text-muted">* Click to see more details</h6>
                      <ul class="tree">
                        <li><a style="background-color: #d42d2d; color: white;" data-toggle="modal" data-target="#myModalcat1" >Furniture Items</a>
                          <ul>
                            <li><a>Bedroom</a></li>
                            <li><a>Dining Room</a></li>
                            <li><a>Kids Furniture</a></li>
                            <li><a>Living Room</a></li>
                            <li><a>Office Furniture</a></li>
                            <li><a>Outdoor Furniture</a></li>
                          </ul>
                        </li>
                        <li> <a style="background-color: #d42d2d; color: white;">Bed and Bath</a>
                          <ul>
                            <li><a>Matress</a></li>
                            <li><a>Pillows</a></li>
                            <li><a>Bedsheets</a></li>
                            <li><a>Throws + Blankets</a></li>
                            <li><a>Bathware</a></li>
                          </ul>
                        </li>
                        <li> <a style="background-color: #d42d2d; color: white;">Decor Items</a>
                          <ul>  
                            <li><a>Accent Pillows + Throws</a></li>
                            <li><a>Wall Decors + Mirrors</a></li>
                            <li><a>Home Accents</a></li>
                            <li><a>Carpets</a></li>
                            <li><a>Room Dividers</a></li>
                          </ul>
                        </li>
                        <li> <a style="background-color: #d42d2d; color: white;">Houseware</a>
                          <ul>
                            <li><a>Glassware</a></li>
                            <li><a>Sports Bottle + Flasks</a></li>
                            <li><a>Kitchenware</a></li>
                            <li><a>Dinnerware</a></li>
                            <li><a>Table Linens</a></li>
                          </ul>
                        </li>
                        <li> <a style="background-color: #d42d2d; color: white;">Window Treatments</a>
                          <ul>
                            <li><a>Accessories</a></li>
                            <li><a>Blinds</a></li>
                            <li><a>Curtain</a></li>
                            <li><a>Hooks</a></li>
                            <li><a>Rods</a></li>
                            <li><a>Tassels</a></li>
                          </ul>
                        </li>
                        <li> <a style="background-color: #d42d2d; color: white;">Lighting</a>
                          <ul>
                            <li><a>Table Lamp + Desk Lamp</a></li>
                            <li><a>Floor Lamps</a></li>
                            <li><a>Wall Lamps</a></li>
                            <li><a>Chandelier</a></li>
                            <li><a>Pendant Lighting</a></li>
                            <li><a>Outdoor Lighting</a></li>
                            <li><a>Ceiling Lights</a></li>
                            <li><a>Ceiling Fan</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>  

                <div class="col-lg-7">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Categories Management</h3>
                    </div>
                    <div class="card-body">
                      <h6 class="text-muted">* Add a new category to the list</h6><br>
                      <form class="form-horizontal col-lg-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-lg-4 form-control-label">Category Name</label>
                          <div class="col-sm-8 col-lg-8">
                            <input type="text" class="form-control" placeholder="Category Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-lg-4 form-control-label">Category Description</label>
                          <div class="col-sm-8 col-lg-8">
                            <textarea class="form-control" style="overflow: hidden;" placeholder="Write a description"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-4 col-lg-4 form-control-label">Category Parent</label>
                             <div class="btn-group col-sm-8 col-lg-8">
                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               No Parent
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Furniture Items</a>
                                <a class="dropdown-item" href="#">Bed + Bath</a>
                                <a class="dropdown-item" href="#">Decor Items</a>
                                <a class="dropdown-item" href="#">Houseware</a>
                                <a class="dropdown-item" href="#">Window Treatments</a>
                                <a class="dropdown-item" href="#">Lighting</a>
                              </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row" style="float: right;">
                          <div class="">
                            <button type="button" data-toggle="modal" data-target="#myModalconf" class="btn btn-primary">Add Category</button>
                              <!-- Modal-->
                              <div id="myModalconf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to add this category?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div> 
              </div>
            </div>


            <!-- MODAL CONTENTS -->

            <div id="myModalcat1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Update Category</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form class="form-horizontal col-lg-12">
                                        <div class="form-group row">
                                          <label class="col-sm-4 col-lg-4 form-control-label">Category Name</label>
                                          <div class="col-sm-8 col-lg-8">
                                            <input type="text" class="form-control" value="Category Name">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-sm-4 col-lg-4 form-control-label">Category Description</label>
                                          <div class="col-sm-8 col-lg-8">
                                            <textarea class="form-control" style="overflow: hidden;" value="Write a description">This is the description</textarea>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-sm-4 col-lg-4 form-control-label">Category Parent</label>
                                             <div class="btn-group col-sm-8 col-lg-8">
                                              <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               No Parent
                                              </button>
                                              <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Furniture Items</a>
                                                <a class="dropdown-item" href="#">Bed + Bath</a>
                                                <a class="dropdown-item" href="#">Decor Items</a>
                                                <a class="dropdown-item" href="#">Houseware</a>
                                                <a class="dropdown-item" href="#">Window Treatments</a>
                                                <a class="dropdown-item" href="#">Lighting</a>
                                                <a class="dropdown-item" href="#">Deals</a>
                                              </div>
                                            </div>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                      <button type="button" data-dismiss="modal" class="btn" style="background-color: #444; color: white;">Delete Category</button>
                                      <button type="button" class="btn btn-primary">Save Changes</button>
                                    </div>
                                  </div>
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