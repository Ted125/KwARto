<!DOCTYPE html>
<?php
  ob_start();
  //require("Controllers/Login.php");
  session_start();
  if(strcmp($_SESSION['userType'],'seller') != 0){
      header("Location:index.php");
  }
?>
<html>
  <head>
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
      .notif1{
        font-size : 20px;
      }
      .notif1{
        font-size : 20px; 
      }
      .notif1{
        font-size : 20px; 
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
            <div class="avatar"><img src ="<?php
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
                    <li class = "active"><a href="uploaddocument.php"> <i class="fa fa-upload"></i>Upload Documents</a></li>
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
              <h2 class="no-margin-bottom">Upload Document</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Upload Document  </li>
            </ul>
          </div>
           <!-- Forms Section-->           
            <section class="forms" style="background-color: #faf6f6">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                       <div class="card">
                       <div class="card-header d-flex align-items-center">
                           <h5>In order to approve your application, the kwARto team would like to require you these documents in order for to you to do business with us.</h3>
                       </div>
                       <div class="col-xs-3">
                           <?php
                               if($_GET['success'] == 1){
                                 echo '<p style ="margin : 1em; color:	#9ACD32"; >Your documents were successfully uploaded and the kwARto admins will soon begin reviewing the documents. Please bear with us for a while. Thank you!<p>';
                               }
                           ?>
                         </div> 
                           <form class="form-horizontal col-lg-8" role="form" enctype="multipart/form-data" action="Controllers/AddSellerDocuments.php" method="POST">
                                <img id = "1">
                                <div class="col-xs-3">
                                    <label class="col-sm-3 form-control-label" style="margin-top: 15px;">Upload SEC/DTI registration form: <span id = "notif1"></span></label>
                                    <div class="col-sm-9">
                                        <div id="upload_button">
                                        <label>
                                            <input id = "first" type="file" onchange="readURL1(this)" name="newData1" id="gallery-photo-add" value="512000" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)">
                                            <span class="btn btn-primary" style="background-color: #d42d2d; border:none; margin-top: 10px; color: white;">Select</span>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <img id = "2">
                                <div class="col-xs-3">
                                    <label class="col-sm-3 form-control-label" style="margin-top: 15px;">Upload Business Permit: <span id = "notif2"></span></label>
                                    <div class="col-sm-9">
                                        <div id="upload_button">
                                        <label>
                                            <input id = "second" type="file" onchange="readURL2(this)" name="newData2" id="gallery-photo-add" value="512000" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)">
                                            <span class="btn btn-primary" style="background-color: #d42d2d; border:none; margin-top: 10px; color: white;">Select</span>             
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <img id = "3">
                                <div class="col-xs-3">
                                    <label class="col-sm-3 form-control-label" style="margin-top: 15px;">Upload BIR Registration form: <span id = "notif3"></span></label>
                                    <div class="col-sm-9">
                                        <div id="upload_button">
                                        <label>
                                            <input id = "third" type="file" onchange="readURL3(this)" name="newData3" id="gallery-photo-add" value="512000" ngf-select ng-model="new_files" ng-change="fs.uploadFiles(new_files)">
                                            <span class="btn btn-primary" style="background-color: #d42d2d; border:none; margin-top: 10px; color: white;">Select</span>                                     
                                        </label>
                                        </div>
                                    </div>
                                </div>
                              <div class="form-group terms-conditions">
                                  <input id="license" type="checkbox" class="checkbox-template" onclick="disableElement()">
                                  <label for="license">I agree to the terms and policies and swear that these documents are true to the best of my knowledge</label>
                              </div>
                              <button id = "enter" type="button" data-toggle="modal" data-target="#myModalSeller" class="btn btn-primary" disabled>Submit Documents</button>
                              <!-- Modal-->
                              <div id="myModalSeller" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                <div role="document" class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Are you sure you want to upload these documents?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                      <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                  </div>
                                </div>
                        </form>
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
<script>
  //Preview Image
  function readURL1(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#1')
        .attr('src', e.target.result)
        .width(350)
        .height(500);
      };
      reader.readAsDataURL(input.files[0]);
      $('#notif1').html('✓').css('color', 'green');
    }
  }

  function readURL2(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#2')
        .attr('src', e.target.result)
        .width(350)
        .height(500);
      };
      reader.readAsDataURL(input.files[0]);
      $('#notif2').html('✓').css('color', 'green');
    }
  }

  function readURL3(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#3')
        .attr('src', e.target.result)
        .width(350)
        .height(500);
      };
      reader.readAsDataURL(input.files[0]);
      $('#notif3').html('✓').css('color', 'green');
    }
  }

</script>
<script>
      function disableElement() {
          if (document.getElementById('license').checked && '' !== $('#first').val() && '' !== $('#second').val() && '' !== $('#third').val()) 
          {
            document.getElementById("enter").disabled = false;
          } else {
            document.getElementById("enter").disabled = true;
          }
      }
    </script>
</body>
</html>