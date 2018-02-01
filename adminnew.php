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
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand">
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
            <div class="avatar"><img src="<?php
              if(file_exists('Resources/Images/User/'.$_SESSION['userId'].'/'.$_SESSION['image'].'')) {
                echo 'Resources/Images/User/'.$_SESSION['userId'].'/'.$_SESSION['image'].'';
              }else{
                echo 'Resources/Images/User/default/defaultadmin.png';
              }
            ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4"><?php echo $_SESSION['username']?></h1>
              <p>Administrator</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
                    <!-- <li><a href="cats.php"> <i class="fa fa-archive"></i>Categories Management</a></li> -->
                    <li><a href="quescomp.php"> <i class="fa fa-envelope-open-o"></i>Comments & Feedback</a></li> 
                    <li><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Reports</a></li>
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li class="active"> <a href="adminnew.php"> <i class="fa fa-user"></i>Register </a></li>
            <li><a href="Controllers/Logout.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Create Admin</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Create Admin  </li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms" style="background-color: #faf6f6"> 
            <div class="container-fluid">
              <div class="row">
                
                <!-- General Information -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">New Admin Information</h3>
                    </div>
                    <div class="card-body row">
                      <form id="register-form" class="form-horizontal col-lg-8" method="post" action="Controllers/RegisterAdmin.php"> 

                        <?php if(isset($_GET['error'])){
                          echo '
                             <div class>
                              <p style="color: #FF0000;">Something went badly wrong. Try again next time.</p>
                              </div>
                          ';

                        }
                        if(isset($_GET['success'])){
                          echo '
                             <div class>
                              <p style="color: #9ACD32;">Admin Successfully registered.</p>
                              </div>
                          ';
                        }
                        ?>
                       

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">User Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="registerUsername" required class="input-material">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Mobile Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="registerPhone" required class="input-material">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">E-mail Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="registerEmail" required class="input-material">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="registerPassword" required class="input-material">
                          </div>
                        </div>

                        <div class="line"></div>
                                                
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="button" data-toggle="modal" data-target="#myModalconf" class="btn btn-primary">Create</button>
                              <!-- Modal-->
                              <div id="myModalconf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to create new admin?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="submit" class="btn btn-primary">Yes</button>
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