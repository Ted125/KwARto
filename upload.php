<!DOCTYPE html>
<html>
  <head>
    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KwARto | Web Application</title>
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
                    <li class="active"><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
                    <li><a href="manuact.php"> <i class="fa fa-street-view"></i>Customer Activity</a></li>
 
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="manuprofile.php"> <i class="icon-user"></i>Profile</a></li>
            <li><a href="Controllers/Logout.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Upload Product</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Upload Product</li>
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
                      <h3 class="h4">Upload Product</h3>
                    </div>
                    <div class="card-body row">

                      <div class="steps-form-2 col-lg-12">
                      <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                          <div class="steps-step-2">
                              <a href="#step-4" type="text" class="btn btn-tab1 btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Product Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Step One</a>
                          </div>
                          <div class="steps-step-2">
                              <a href="#step-5" type="text" class="btn btn-tabnext btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Category Selection"><i class="fa fa-pencil" aria-hidden="true"></i> Step Two</a>
                          </div>
                          <div class="steps-step-2">
                              <a href="#step-6" type="text" class="btn btn-tabnext btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Product Image"><i class="fa fa-photo" aria-hidden="true"></i> Step Three</a>
                          </div>
                          <div class="steps-step-2">
                              <a href="#step-7" type="text" class="btn btn-tabnext btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i> Step Four</a>
                          </div>
                      </div>
                  </div>

                  <form role="form" class="col-lg-12" action="Controllers/SellerUploadFurniture.php" method="post" enctype="multipart/form-data" name="formUploadFile">
                  <div class="row setup-content-2" id="step-4">
                  <div class="col-lg-12">
                      <h3 class="font-bold pl-0 my-4"><strong>Product Information</strong></h3>
                      <div class="form-group">
                      <label>Product Name</label>
                        <input type="text" placeholder="Product Name" class="form-control" name="newName">
                      </div>
                      <div class="form-group">       
                        <label>Description</label>
                        <textarea class="form-control" rows="3" id="description" placeholder="Description of the item goes here" name="newDesc"></textarea>
                      </div>
                      <div class="form-group">       
                        <label>Model</label>
                        <input type="text" placeholder="0" class="form-control" name="newModel">
                      </div>
                      <div class="form-group">       
                        <label>Model Name</label>
                        <input type="text" placeholder="0" class="form-control" name="newModelName">
                      </div>
                      <div class="form-group">       
                        <label>Category</label>
                        <input type="text" placeholder="0" class="form-control" name="newCategoryId">
                      </div>
                      <div class="form-group">       
                        <label>Version Of</label>
                        <input type="text" placeholder="0" class="form-control" name="newVersionOf">
                      </div>
                      <div class="form-group">       
                        <label>Color</label>
                        <input type="text" placeholder="0" class="form-control" name="newColor">
                      </div>
                      <div class="form-group">       
                        <label>Weight</label>
                        <input type="text" placeholder="0" class="form-control" name="newWeight">
                      </div>
                      <div class="form-group">       
                        <label>Weight Unit</label>
                        <select class="form-control" name="newWeightUnit">
                          <option>kilo/s</option>
                          <option>pound/s</option>
                        </select>
                      </div>
                      <div class="form-group">       
                        <label>Length</label>
                        <input type="text" placeholder="0" class="form-control" name="newLength">
                      </div>
                      <div class="form-group">       
                        <label>Width</label>
                        <input type="text" placeholder="0" class="form-control" name="newWidth">
                      </div>
                      <div class="form-group">       
                        <label>Height</label>
                        <input type="text" placeholder="0" class="form-control" name="newHeight">
                      </div>
                      <div class="form-group">       
                        <label>Warranty ID</label>
                        <input type="text" placeholder="" class="form-control" name="newWar">
                      </div>
                      <div class="form-group">       
                        <label>Size Unit</label>
                        <select class="form-control" name="newSizeUnit">
                          <option>millimeter/s</option>
                          <option>centimeter/s</option>
                          <option>inch/es</option>
                          <option>meter/s</option>
                        </select>
                      </div>
                      <div class="form-group">       
                        <label>Price</label>
                        <input type="text" placeholder="0.00" class="form-control" name="newPrice">
                      </div>
                      <div class="form-group">       
                        <label>Discount</label>
                        <input type="text" placeholder="0.00" class="form-control" name="newDiscount">
                      </div>
                      <br>
                      <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                    </div>
                  </div>
                  <div class="row setup-content-2" id="step-5">
                      <div class="col-md-12">
                          <h3 class="font-bold pl-0 my-4"><strong>Category Selection</strong></h3>
                          <div class="form-group">       
                            <label>Category Name</label>
                            <input type="text" placeholder="Enter Category Name..." class="form-control" name="newPrice">
                          </div>
                          <div class="form-group">       
                            <label>Category</label>
                            <select class="form-control" name="newCategory">
                              <option>Furniture Items</option>
                              <option>Bed + Bath</option>
                              <option>Decor Items</option>
                              <option>Houseware</option>
                              <option>Window Treatments</option>
                              <option>Lighting</option>
                            </select>
                          </div>
                          <div class="form-group">       
                            <label>Sub-Category</label>
                            <select class="form-control" name="newCategory">
                              <option>Subitem 1</option>
                              <option>Subitem 2</option>
                              <option>Subitem 3</option>
                              <option>Subitem 4</option>
                              <option>Subitem 5</option>
                              <option>Subitem 6</option>
                            </select>
                          </div>
                          <br>
                          <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                          <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                      </div>
                  </div>
                  <div class="row setup-content-2" id="step-6">
                    <div class="col-lg-12 text-center">
                        <h3 class="font-bold pl-0 my-4"><strong>Upload Image</strong></h3>
                        <img src="http://via.placeholder.com/300"><br>
                      <div style="margin-top: 5px;">
                        <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                        <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                        <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                        <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                      </div>    
                        <label>Select file to upload:</label>
                        <input type="file" name="image" />
                      <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Upload Photos</button><br>
                      <div class="form-group text-left">       
                        <br><h4 style="margin-bottom: 0px;">3D Model</h4><br>
                        <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                        <input type="file" name="newData" />
                        <input type="hidden" class="btn btn-primary" name="newSellerId" value=<?php echo $_SESSION['sellerId'];?> />
                        <!-- <button style="background-color: #d42d2d; color: white;" class="btn btn-primary form-control">Upload</button> -->
                      </div>
                      <br>
                      <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                      <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                    </div>
                  </div>
                  <div class="row setup-content-2" id="step-7">
                      <div class="col-md-12">
                          <h3 class="font-bold pl-0 my-4"><strong>Finish Upload</strong></h3>
                          <div class="form-group">
                              <input type="checkbox" id="checkbox111">
                              <label for="checkbox111">I agree to the <a style="text-decoration: none;" href="terms.php">terms and conditions</a></label>
                          </div>
                          <div class="form-group">
                              <input type="checkbox" id="checkbox112">
                              <label for="checkbox112">I have read the <a style="text-decoration: none;" href="privacy.php">privacy policy</a></label>
                          </div>
                          <h2 class="text-center font-bold my-4">Upload product!</h2>
                          <br>
                          <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                          <button class="btn btn-primary btn-rounded float-right" type="submit">Submit</button>
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
  <script type="text/javascript">
  // Stepper JS
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  // Steppers                
  $(document).ready(function () {
    var navListItems = $('div.setup-panel-2 div a'),
            allWells = $('.setup-content-2'),
            allNextBtn = $('.nextBtn-2'),
            allPrevBtn = $('.prevBtn-2');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-tab1').addClass('btn-tabnext');
            $item.addClass('btn-tab1');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });
    
    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

            prevStepSteps.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content-2"),
            curStepBtn = curStep.attr("id"),
            nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i< curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepSteps.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel-2 div a.btn-tab1').trigger('click');
  });
  </script>
  </body>
</html>