<!DOCTYPE html>
<?php
  ob_start();
  //require("Controllers/Login.php");
  session_start();
  if(strcmp($_SESSION['userType'],'seller') != 0){
      header("Location:index.php");
  }else if(strcmp($_SESSION['userStatus'], 'inactive') == 0){
    header("Location:uploaddocument.php");
  }
?>
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
                <!-- <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li> -->
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
            <div class="avatar"><img src="<?php
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
                    <li class="active"><a href="manuindex.php"> <i class="icon-list"></i>Reports</a></li>
                    <li><a href="prodsmanu.php"> <i class="icon-padnote"></i>Products Management</a></li>
                    <li><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li><a href="uploaddocument.php"> <i class="fa fa-upload"></i>Upload Documents</a></li>
                    <li><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
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
              <h2 class="no-margin-bottom">Reports</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Reports </li>
            </ul>
          </div>
          <!-- Include Stuff -->
          <?php
            include('Models/Database.php');
            include('Controllers/SellerGetTotalSales.php');
            include('Controllers/SellerGetTotalReviews.php');
            include('Controllers/SellerGetRatingSum.php');
            include('Controllers/SellerGetTotalQuestions.php');
            include('Controllers/SellerGetTotalProducts.php');
          ?>
          <!-- Charts Section-->
          <section class="charts" style="background-color: #faf6f6">

            <section class="dashboard-counts no-padding-bottom" style="padding-top: 0px;">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="fa-money"></i></div>
                    <div class="title"><span>Total<br>Sold</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php echo $stock_sold['sold_stock'];?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number">
                      <strong>
                      <?php

                        echo $stock_sold['sold_stock'];
                      ?>
                      </strong>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="fa fa-comment-o"></i></div>
                    <div class="title"><span>Total<br>Comments</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php echo $reviews['reviews'];?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number">
                      <strong>
                      <?php

                        echo $reviews['reviews'];
                        if($reviews['reviews'] != 0){
                          $aveRating = round((float)$ratingSum['ratingSum']/(float)$reviews['reviews'], 2);
                        } else {
                          $aveRating = 0;
                        }
                      ?>
                      </strong>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-star"></i></div>
                    <div class="title"><span>Average<br>Ratings</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php echo (string)(((float)$aveRating/5)*100);?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number">
                      <strong>
                      <?php

                        echo $aveRating;
                      ?>
                      </strong>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="fa fa-warning"></i></div>
                    <div class="title"><span>New<br>Questions</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php echo $questions['questions'];?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number">
                      <strong>
                      <?php

                        echo $questions['questions'];
                      ?>
                      </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <br>
            <div class="container-fluid">
              <div class="row">
                <!-- Line Charts-->
                <div class="col-lg-8">
                  <div class="line-chart-example card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Total Sales</h3>
                    </div>
                    <div class="card-body">
                    <div id="chart_div_3" style="width: 100%; height: 250px;"></div>
                      <!-- reused these charts. just make new ones in charts-custom.js .. templated na to-->
                    </div>
                  </div>
                </div>

                <div class="statistics col-lg-4 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-bed"></i></div>
                    <div class="text">
                      <strong>
                      <?php echo $total_furniture['total_furniture'];?>
                      </strong><br><small>Added Products</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-rub"></i></div>
                    <div class="text">
                      <strong>
                      <?php

                        echo $stock_sold['sold_stock'];
                      ?>
                      </strong><br><small>Completed Transactions</small></div>
                  </div>
                  <!-- <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-mail-reply"></i></div>
                    <div class="text"><strong>10</strong><br><small>Product Returns</small></div>
                  </div> -->
                </div>

                <div class="col-lg-12">
                  <div class="line-chart-example card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Top Selling Products</h3>
                    </div>
                    <div class="card-body">
                    </div>
                    <div id="top_x_div_3" style="width: 100%; height: 157px; margin-bottom: 2%; margin-left: 2%"></div>
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
    <!-- <script src="js/charts-custom.js"></script> -->
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.load('current', {'packages':['corechart']});                   
    google.charts.setOnLoadCallback(drawStuff);
    google.charts.setOnLoadCallback(drawChart);
  
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales'],
        <?php require("Controllers/RetrieveTotalSales.php")?>
      ]);

      var options = {
        title: 'Total Sales',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div_3'));

      chart.draw(data, options);
    }
      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Furniture', 'Furniture Sold', ],
          <?php require("Controllers/RetrieveTopSellingSellerProducts.php")?>
        ]);

        var options = {
          width: 1500,
          legend: { position: 'none' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Total stock sold'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div_3'));
        chart.draw(data, options);
      };

    </script>
  </body>
</html>
