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
              <h1 class="h4">Company Name</h1>
              <p>Manufacturer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="manuindex.php"> <i class="icon-list"></i>Reports</a></li>
                    <li class="active"><a href="prodsmanu.php"> <i class="icon-padnote"></i>Products Management</a></li>
                    <li><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
                    <li><a href="manuact.php"> <i class="fa fa-street-view"></i>Customer Activity</a></li>
 
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="manuprofile.php"> <i class="icon-user"></i>Profile </a></li>
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
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Comfy Chair</td>
                            <td>42</td>
                            <td>890.00</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Edit</button>
                              <!-- Modal-->
                                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" value="Comfy Chair" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Description</label>
                                          <textarea class="form-control" rows="3" id="description">This is the description of the product. There are three rows for this space</textarea>
                                        </div>
                                        <div class="form-group">       
                                          <label style="margin-bottom: 0px;">Product Images</label><br>
                                          <p class="small">Maximum number of images is 5</p>
                                          <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                                          <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                                          <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                                          <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                                          <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                                          <button type="button" data-dismiss="modal" class="btn btn-primary">Update Photos</button>
                                        </div>
                                        <div class="form-group">       
                                          <label>Length</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Width</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Height</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Warranty</label>
                                          <select name="account" class="form-control">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                            <option>Option 4</option>
                                          </select>
                                        </div>
                                        <div class="form-group">       
                                          <label>Unit</label>
                                          <select name="account" class="form-control">
                                            <option>millimeter/s</option>
                                            <option>centimeter/s</option>
                                            <option>inch/es</option>
                                            <option>meter/s</option>
                                          </select>
                                        </div>
                                        <div class="form-group">       
                                          <label>Price</label>
                                          <input type="text" value="890.00" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Quantity</label>
                                          <input type="text" value="42" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Discount</label>
                                          <input type="text" value="0.00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <p>Are you sure you want to update these changes?</p>       
                                          <input type="submit" value="Save changes" class="btn btn-primary">
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Wooden Stool</td>
                            <td>123</td>
                            <td>499.50</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Edit</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" value="Comfy Chair" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Description</label>
                                          <textarea class="form-control" rows="3" id="description">This is the description of the product. There are three rows for this space</textarea>
                                        </div>
                                        <div class="form-group">       
                                          <label>Length</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Width</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Height</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Warranty ID</label>
                                          <input type="text" value="123091" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Unit</label>
                                          <select name="account" class="form-control">
                                            <option>millimeter/s</option>
                                            <option>centimeter/s</option>
                                            <option>inch/es</option>
                                            <option>meter/s</option>
                                          </select>
                                        </div>
                                        <div class="form-group">       
                                          <label>Price</label>
                                          <input type="text" value="890.00" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Quantity</label>
                                          <input type="text" value="42" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Discount</label>
                                          <input type="text" value="0.00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <p>Are you sure you want to update these changes?</p>       
                                          <input type="submit" value="Save changes" class="btn btn-primary">
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Water Bed</td>
                            <td>66</td>
                            <td>2,301.45</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Edit</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" value="Comfy Chair" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Description</label>
                                          <textarea class="form-control" rows="3" id="description">This is the description of the product. There are three rows for this space</textarea>
                                        </div>
                                        <div class="form-group">       
                                          <label>Length</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Width</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Height</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Warranty ID</label>
                                          <input type="text" value="123091" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Unit</label>
                                          <select name="account" class="form-control">
                                            <option>millimeter/s</option>
                                            <option>centimeter/s</option>
                                            <option>inch/es</option>
                                            <option>meter/s</option>
                                          </select>
                                        </div>
                                        <div class="form-group">       
                                          <label>Price</label>
                                          <input type="text" value="890.00" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Quantity</label>
                                          <input type="text" value="42" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Discount</label>
                                          <input type="text" value="0.00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <p>Are you sure you want to update these changes?</p>       
                                          <input type="submit" value="Save changes" class="btn btn-primary">
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Modern Chair</td>
                            <td>48</td>
                            <td>999.00</td>
                            <td>
                              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Edit</button>
                              <!-- Modal-->
                              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label>Name</label>
                                          <input type="text" value="Comfy Chair" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Description</label>
                                          <textarea class="form-control" rows="3" id="description">This is the description of the product. There are three rows for this space</textarea>
                                        </div>
                                        <div class="form-group">       
                                          <label>Length</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Width</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Height</label>
                                          <input type="text" value="100" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Warranty ID</label>
                                          <input type="text" value="123091" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Unit</label>
                                          <select name="account" class="form-control">
                                            <option>millimeter/s</option>
                                            <option>centimeter/s</option>
                                            <option>inch/es</option>
                                            <option>meter/s</option>
                                          </select>
                                        </div>
                                        <div class="form-group">       
                                          <label>Price</label>
                                          <input type="text" value="890.00" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Quantity</label>
                                          <input type="text" value="42" class="form-control">
                                        </div>
                                        <div class="form-group">       
                                          <label>Discount</label>
                                          <input type="text" value="0.00" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <p>Are you sure you want to update these changes?</p>       
                                          <input type="submit" value="Save changes" class="btn btn-primary">
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
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