<!DOCTYPE html>
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
                <li class="nav-item"><a href="loginnew.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
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
              <h1 class="h4">Admin Name</h1>
              <p>Super Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
                    <li class="active"><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
                    <li><a href="cats.php"> <i class="fa fa-archive"></i>Categories Management</a></li>
                    <li><a href="quescomp.php"> <i class="fa fa-envelope-open-o"></i>Complaints & Questions</a></li>
                    <li><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Reports</a></li>
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li><a href="loginnew.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Manufacturers Management</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Manufacturers Management</li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6">   
            <div class="container-fluid">
              <div class="row">
                
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Registered Users List</h3>
                    </div>
                    <div class="card-body">
                      <h6 class="text-muted">* Click to see more details</h6>
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>E-mail Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td data-toggle="modal" data-target="#mrowModal">Furniture City</td>
                            <td data-toggle="modal" data-target="#mrowModal">Mandaue City, Cebu</td>
                            <td data-toggle="modal" data-target="#mrowModal">name@company.com</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#banModal" class="btn btn-primary">Ban</button>
                              <!-- Modal-->
                              <div id="banModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to ban this manufacturer?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            
                            <!-- Modal Contents for Row -->
                            <div class="modal fade" id="mrowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content " style="width: 600px;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-5">
                                          <img src="https://cdn.tutsplus.com/net/uploads/legacy/958_placeholders/placehold.gif">
                                      </div>
                                      <div class="col-7">
                                         <div class="row" style="padding-left: 20px;"><h5>First Name: <h5  style="font-weight: normal; padding-left: 5px;">John</h5>  </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Middle Name: <h5 style="font-weight: normal; padding-left: 5px;">Smithers</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Last Name: <h5 style="font-weight: normal; padding-left: 5px;">Smith</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Gender: <h5 style="font-weight: normal; padding-left: 5px;">Male</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Mobile Number:<h5 style="font-weight: normal; padding-left: 5px;">+63 123 456 7890</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;">name@user.com</h5></h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Current Address: <h5 style="font-weight: normal; margin-left: 5px;">123 Internet Street, Long Address, Somewhere City, Cty</h5></h5></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Furniture Labs</td>
                            <td>H. Cortes, Mandaue City, Cebu</td>
                            <td>name@company.com</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ban</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to ban this manufacturer?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Uratex Foams</td>
                            <td>Paknaan Corner, Mandaue City, Cebu</td>
                            <td>name@company.com</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ban</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to ban this manufacturer?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Vertigo Chairs and Co.</td>
                            <td>Talisay City, Cebu</td>
                            <td>name@company.com</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ban</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to ban this manufacturer?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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