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
    
    <!-- STYLING FOR UPLOAD BUTTON -->
    <style type="text/css">
      #upload_button {
        display: inline-block;
      }
      #upload_button input[type=file] {
        display:none;
      }
    </style>

    <style>
    /* Tooltip container */
    .tooltip {
      position: relative;
      display: inline-block;
      border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
    }

    /* Tooltip text */
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      padding: 5px 0;
      border-radius: 6px;

      /* Position the tooltip text - see examples below! */
      position: absolute;
      z-index: 1;
    }

    /* Show the tooltip text when you mouse over the tooltip container */
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }

    /*GALLERY STYLE*/
    .gallery img{
      padding: 5px;
      border-style: double;
    }
  </style>
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
              <h1 class="h4"><?php echo $_SESSION['name'];?></h1>
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
            <li> <a href="manuprofile.php"> <i class="icon-user"></i>Profile</a></li>
            <li><a href="Controllers/Logout.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Product</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Update Product</li>
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
                      <h3 class="h4">Update Product</h3>
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
                      </div>
                  </div>

                  <form role="form" class="col-lg-12" action="Controllers/SellerUpdateFurniture.php" method="post" enctype="multipart/form-data" name="formUploadFile">
                  <div class="row setup-content-2" id="step-4">
                  <div class="col-lg-12">
                      <h3 class="font-bold pl-0 my-4"><strong>Product Information</strong></h3>
                      <div class="form-group">
                      <label>Product Name</label>
                        <input type="text" placeholder="Product Name" class="form-control" id="name" name="newName" value="<?php echo $_POST['updateName']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Description</label>
                        <textarea class="form-control" rows="3" id="description" placeholder="Description of the item goes here" name="newDesc" required><?php echo $_POST['updateDesc']?></textarea>
                      </div>
                      <div class="form-group">       
                        <label>Model Name</label>
                        <input type="text" placeholder="" class="form-control" id="modelName" name="newModelName" value="<?php echo $_POST['updateModelName']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Color</label>
                        <input type="text" class="form-control" name="newColor" value="<?php echo $_POST['updateColor']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Weight</label>
                        <input type="text" placeholder="0" class="form-control" id="weight" name="newWeight" value="<?php echo $_POST['updateWeight']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Weight Unit</label>
                        <input type="text" class="form-control" value="<?php echo $_POST['updateWeightUnit']?>" disabled>
                      </div>
                      <div class="form-group">       
                        <label>Length</label>
                        <input type="number" placeholder="0" class="form-control" id="length" name="newLength" value="<?php echo $_POST['updateLength']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Width</label>
                        <input type="number" placeholder="0" class="form-control" id="width" name="newWidth" value="<?php echo $_POST['updateWidth']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Height</label>
                        <input type="number" placeholder="0" class="form-control" id="height" name="newHeight" value="<?php echo $_POST['updateHeight']?>" required>
                      </div>
                      <div class="form-group">       
                        <label>Size Unit</label>
                        <input type="text" class="form-control" value="<?php echo $_POST['updateSizeUnit']?>" disabled>
                      </div>
                      <div class="form-group">       
                        <label>Warranty ID</label>
                            <select class="form-control" name="newWar" required>
                              <?php include("Controllers/SellerDisplayAllWarranty.php");?>
                            </select>
                      </div>
                      <div class="form-group">       
                        <label>Price</label>
                        <input type="text" placeholder="0.00" class="form-control" id="price" name="newPrice" value="<?php echo $_POST['updatePrice']?>" required>
                      </div>
                      <br>
                      <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                    </div>
                  </div>
                  <div class="row setup-content-2" id="step-5">
                      <div class="col-md-12">
                          <h3 class="font-bold pl-0 my-4"><strong>Package Selection</strong></h3>
                          <div class="form-group">       
                            <label>Packages</label>
                          </div>
                          <div class="form-group">       
                            <label>Height</label>
                            <input type="number" placeholder="0" class="form-control" name="newPackageHeight" value="<?php echo $_POST['updatePackageLength']?>">
                          </div>
                          <div class="form-group">       
                            <label>Width</label>
                            <input type="number" placeholder="0" class="form-control" name="newPackageWidth" value="<?php echo $_POST['updatePackageWidth']?>">
                          </div>
                          <div class="form-group">       
                            <label>Length</label>
                            <input type="number" placeholder="0" class="form-control" name="newPackageLength" value="<?php echo $_POST['updatePackageHeight']?>">
                          </div>
                          <div class="form-group">       
                            <label>Size Unit</label>
                            <input type="text" class="form-control" value="<?php echo $_POST['updatePackageSizeUnit']?>" disabled>
                          </div>
                          <div class="package">  
                              <!-- Display package -->
                              <?php include("Controllers/SellerDisplayFurniturePackage.php");?>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <h3 class="font-bold pl-0 my-4"><strong>Specification</strong></h3>
                          <div class="form-group">       
                            <label>Specification about the product</label>
                          </div>
                          <br>
                          <div class="spec">  
                              <?php include("Controllers/SellerDisplayFurnitureSpecification.php");?>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <h3 class="font-bold pl-0 my-4"><strong>Category Selection</strong></h3>
                          <div class="form-group">       
                            <label>Category</label>
                            <select class="form-control" name="newCategoryId">
                              <?php include("Controllers/SellerDisplayAllCategory.php");?>
                            </select>
                          </div>
                          <br>
                          <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                          <button id="upload" class="btn btn-primary btn-rounded float-right" type="submit">Submit</button>
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

  //Preview Image
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

      if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();

          reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).height(150).width(150).appendTo(placeToInsertImagePreview);
          }

          reader.readAsDataURL(input.files[i]);
        }
      }

    };

    $('#gallery-photo-add').on('change', function() {
      imagesPreview(this, 'div.gallery');
    });
  });

  //Empty gallery
  function emptyGallery() {
    $( ".gallery" ).empty();
  }
  //Preview final input
    function showInput() {
      document.getElementById('prevModelName').innerHTML = document.getElementById("modelName").value;
      document.getElementById('prevName').innerHTML = document.getElementById("name").value;
      document.getElementById('prevPrice').innerHTML = document.getElementById("price").value;
      document.getElementById('prevSize').innerHTML = document.getElementById("length").value +" X "+
                                                      document.getElementById("width").value +" X "+
                                                      document.getElementById("height").value +""+
                                                      document.getElementById("sizeUnit").value +" - "+
                                                      document.getElementById("weight").value +""+
                                                      document.getElementById("weightUnit").value;

    }

    //Package
    var i = 2;
    function addPackage(){
      if(i <= 5){
        $('.package').append('<div id="packageField'+ i +'"><span style="font-size: 18px;">Package '+ i +'</span><input type="text" placeholder="Enter Package Name..." class="form-control" name="package'+ i +'"><br></div>'

          );
        i++;
        console.log(i);
      }
    }

    function removePackage(){
      if(i > 2){
        $('#packageField'+ (--i) +'').remove();
        console.log(i);
      }
    }

    //Specification
    var j = 2;
    function addSpec(){
      if(j <= 5){
        $('.spec').append('<div id="specField'+ j +'"><span style="font-size: 18px;">Specification '+ j +'</span><input type="text" placeholder="Enter Specification Name..." class="form-control" name="spec'+ j +'"><br></div>');
        j++;
        console.log(j);
      }
    }

    function removeSpec(){
      if(j > 2){
        $('#specField'+ (--j) +'').remove();
        console.log(j);
      }
    }

  </script>
  </body>
</html>