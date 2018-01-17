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
                <!-- Navbar Brand --><a href="admindex.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>kw </span><strong>AR</strong>to</div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications -->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">4</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-shopping-basket bg-orange"></i>You have 2 product purchases</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-star-o"></i>You have 2 new product ratings</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="manuact.php" class="dropdown-item all-notifications text-center"> <strong>view all notifications</strong></a></li>
                  </ul>
                </li>
                <!-- Messages -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">6</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Comfy Chair</h3><span>You have 2 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Wooden Stool</h3><span>You have 3 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Modern Table</h3><span>You have 1 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="manuact.php" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
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
              <h1 class="h4">Company Name</h1>
              <p>Manufacturer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="manuindex.php"> <i class="icon-list"></i>Reports</a></li>
                    <li><a href="prodsmanu.php"> <i class="icon-padnote"></i>Products Management</a></li>
                    <li><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li class="active"><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
                    <li><a href="manuact.php"> <i class="fa fa-street-view"></i>Customer Activity</a></li>
 
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
              <h2 class="no-margin-bottom">Transactions Management</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Transactions Management</li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6">   
            <div class="container-fluid">
              <!-- Project-->
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="http://dondonenglish.com/wp/wp-content/uploads/2017/08/avatar-8.png" alt="..." class="img-fluid"></div>
                      <div class="text">
                        <h3 class="h4">Order ID: #121238</h3><small>Jane Doe - P3,790.00</small>
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <div class="" style="margin-bottom: 10px;">
                                    <span><h3>Status:</h3></span>
                                      <button data-toggle="dropdown" style="background-color: #D42D2D; color: white;" type="button" class="btn btn-white dropdown-toggle">Pending<span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Pending</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Completed</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Cancelled</a></li>
                                      </ul>
                                  </div>

                                  <h5 style="color: #555">Order details:</h5>
                                  <p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

                                  <div class="recent-activities card">
                                    <div class="card-header">
                                      <h3 class="h4">Order Summary</h3>
                                    </div>
                                    <div class="card-body no-padding">
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/sofa-chair-512.png"></div>
                                            <div class="date"><span>P1,250.00 </span><span class="text-info">( 2 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Modern Table</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://image.freepik.com/free-icon/kitchen-chair_318-63175.jpg  "></div>
                                            <div class="date"><span>P400.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Wooden Stool</h5>
                                            <p>This is the description of the stool. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn.onlinewebfonts.com/svg/img_487298.png"></div>
                                            <div class="date"><span>P890.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Chic Table Piece</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="text-right"><h3 class="h4">Total: P3,790</h3></div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">January 03, 2018</span></div>
                  </div>
                  <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>8</div>
                    <div class="project-progress">
                      <div class="progress">
                        <div role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="comments">Status: <span style="color: #ffc36d;">Pending</span></div>
                  </div>
                </div>
              </div>
              <!-- Project-->
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-BqTNaupy8yjdKdQ7_S474SaAfSRnZ3emD03p9GPUw_02yhgC" alt="..." class="img-fluid"></div>
                      <div class="text">
                        <h3 class="h4">Order ID: #121212</h3><small>John Doe - P3,790.00</small>
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <div class="" style="margin-bottom: 10px;">
                                    <span><h3>Status:</h3></span>
                                      <button data-toggle="dropdown" style="background-color: #D42D2D; color: white;" type="button" class="btn btn-white dropdown-toggle">Completed<span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Pending</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Completed</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Cancelled</a></li>
                                      </ul>
                                  </div>

                                  <h5 style="color: #555">Order details:</h5>
                                  <p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

                                  <div class="recent-activities card">
                                    <div class="card-header">
                                      <h3 class="h4">Order Summary</h3>
                                    </div>
                                    <div class="card-body no-padding">
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/sofa-chair-512.png"></div>
                                            <div class="date"><span>P1,250.00 </span><span class="text-info">( 2 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Modern Table</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://image.freepik.com/free-icon/kitchen-chair_318-63175.jpg  "></div>
                                            <div class="date"><span>P400.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Wooden Stool</h5>
                                            <p>This is the description of the stool. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn.onlinewebfonts.com/svg/img_487298.png"></div>
                                            <div class="date"><span>P890.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Chic Table Piece</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="text-right"><h3 class="h4">Total: P3,790</h3></div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">December 29, 2017</span></div>
                  </div>
                  <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>5:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>10</div>
                    <div class="project-progress">
                      <div class="progress">
                        <div role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="comments">Status: <span style="color: #54e69d ;">Delivered</span></div>
                  </div>
                </div>
              </div>
              <!-- Project-->
              <div class="project">
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                    <div data-toggle="modal" data-target="#myModal" class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9tkyOrtoPs7Xpwc05MicxPBb1juMyl5s7sds8t-3gVakM0uj9" alt="..." class="img-fluid"></div>
                      <div class="text">
                        <h3 class="h4">Order ID: #543212</h3><small>Rachel Adams - P3,790.00</small>
                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <div class="" style="margin-bottom: 10px;">
                                    <span><h3>Status:</h3></span>
                                      <button data-toggle="dropdown" style="background-color: #D42D2D; color: white;" type="button" class="btn btn-white dropdown-toggle">Completed<span class="caret"></span></button>
                                      <ul class="dropdown-menu">
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Pending</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Completed</a></li>
                                        <li><a style="color: #D42D2D; text-decoration: none;" href="#">Cancelled</a></li>
                                      </ul>
                                  </div>

                                  <h5 style="color: #555">Order details:</h5>
                                  <p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

                                  <div class="recent-activities card">
                                    <div class="card-header">
                                      <h3 class="h4">Order Summary</h3>
                                    </div>
                                    <div class="card-body no-padding">
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn3.iconfinder.com/data/icons/glypho-free/64/sofa-chair-512.png"></div>
                                            <div class="date"><span>P1,250.00 </span><span class="text-info">( 2 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Modern Table</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://image.freepik.com/free-icon/kitchen-chair_318-63175.jpg  "></div>
                                            <div class="date"><span>P400.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Wooden Stool</h5>
                                            <p>This is the description of the stool. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="row" style="margin-bottom: 0px;">
                                          <div class="col-4 date-holder text-right">
                                            <div class="text-center"><img style="max-width: 100px;" src="https://cdn.onlinewebfonts.com/svg/img_487298.png"></div>
                                            <div class="date"><span>P890.00 </span><span class="text-info">( 1 )</span></div>
                                          </div>
                                          <div class="col-8 content">
                                            <h5>Chic Table Piece</h5>
                                            <p>This is the description of the table. i have to make the description long so that we can see the behavior of the modal content with multiple lines. i hope this description is long enough.</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="text-right"><h3 class="h4">Total: P3,790</h3></div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="project-date"><span class="hidden-sm-down">December 24, 2017</span></div>
                  </div>
                  <div class="right-col col-lg-6 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i>5:00 PM </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>10</div>
                    <div class="project-progress">
                      <div class="progress">
                        <div role="progressbar" style="width: 20%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="comments">Status: <span style="color: #D42D2D;">Cancelled</span></div>
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