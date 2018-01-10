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
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li class="active"><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
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
              <h2 class="no-margin-bottom">Products Management</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Products Management</li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6">   
            <div class="container-fluid">
              <div class="row">
                
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Registered Products List</h3>
                    </div>
                    <div class="card-body">
                      <h6 class="text-muted">* Click to see more details</h6>
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td data-toggle="modal" data-target="#prowModal">Wooden Stool</td>
                            <td data-toggle="modal" data-target="#prowModal">12</td>
                            <td data-toggle="modal" data-target="#prowModal">200.00</td>
                            <td data-toggle="modal" data-target="#pStatus" style="color: green">Live</td>
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
                                      <p>Are you sure you want to ban this product?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>

                            <!-- Modal Contents for product status -->
                            <div id="pStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Change Status</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Update this product's status?</p>
                                      <small>Products with the status: <span style="color: green">Live</span> will be visible to users</small><br>
                                      <small>Products with the status: <span style="color: red">Hidden</span> will not be visible to users</small>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            <!-- Modal Contents for Row -->
                            <div class="modal fade" id="prowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content " style="width: 600px;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-5 text-center" style="padding-right: 0px;">
                                          <img src="https://cdn.tutsplus.com/net/uploads/legacy/958_placeholders/placehold.gif">
                                      </div>
                                      <div class="col-7">
                                         <div class="row" style="padding-left: 20px;"><h5>Product Name: <h5  style="font-weight: normal; padding-left: 5px;">John</h5>  </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Quantity: <h5 style="font-weight: normal; padding-left: 5px;">12</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Length: <h5 style="font-weight: normal; padding-left: 5px;">4</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Width: <h5 style="font-weight: normal; padding-left: 5px;">4</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Height: <h5 style="font-weight: normal; padding-left: 5px;">4</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Unit: <h5 style="font-weight: normal; padding-left: 5px;">m</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Price: <h5 style="font-weight: normal; padding-left: 5px;">P920.00</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Rating: <h5 style="font-weight: normal; padding-left: 5px;">4.5</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Warranty ID: <h5 style="font-weight: normal; padding-left: 5px;">None</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Discount: <h5 style="font-weight: normal; padding-left: 5px;">None</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Description: <h5 style="font-weight: normal; margin-left: 5px;">This is a very long description for the selected product for display purposes only. </h5></h5></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Comfy Chair</td>
                            <td>235</td>
                            <td>800.00</td>
                            <td style="color: red;">Hidden</td>
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
                                      <p>Are you sure you want to ban this product?</p>
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
                            <td>Satin Finish Table</td>
                            <td>341</td>
                            <td>1285.00</td>
                            <td style="color: green">Live</td>
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
                                      <p>Are you sure you want to ban this product?</p>
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
                            <td>Ceramic Bathtub</td>
                            <td>77</td>
                            <td>2900.00</td>
                            <td style="color: green">Live</td>
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
                                      <p>Are you sure you want to ban this product?</p>
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