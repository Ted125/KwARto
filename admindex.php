<!DOCTYPE html>
<?php
  session_start();
  if(strcmp($_SESSION['userType'],'admin') != 0){
      header("Location:index.php");
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
                    <li class="active"><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
                    <!-- <li><a href="cats.php"> <i class="fa fa-archive"></i>Categories Management</a></li> -->
                    <li><a href="quescomp.php"> <i class="fa fa-envelope-open-o"></i>Comments & Feedback</a></li> 
                    <!-- <li><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Reports</a></li> -->
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li> <a href="adminnew.php"> <i class="fa fa-user"></i>Register New Admin</a></li>
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
          <!-- Charts Section-->
          <section class="charts" style="background-color: #faf6f6">

            <section class="dashboard-counts no-padding-bottom" style="padding-top: 0px;">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>Users</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php include('Controllers/AdminNewCustReports.php')?>%; height: 4px;" aria-valuenow="<?php include('Controllers/AdminNewCustReports.php')?>  " aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php include('Controllers/AdminNewCustReports.php')?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-check"></i></div>
                    <div class="title"><span>Pending<br>Transactions</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php include('Controllers/AdminPendTranReports.php')?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php include('Controllers/AdminPendTranReports.php')?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Added<br>Manufacturers</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php include('Controllers/AdminNewManuReports.php')?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php include('Controllers/AdminNewManuReports.php')?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Pending<br>Manufacturers</span>
                      <div class="progress">
                        <div role="progressbar" style="width: <?php include('Controllers/AdminPendManuReports.php')?>%; height: 4px;" aria-valuenow="{#val.value}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong><?php include('Controllers/AdminPendManuReports.php')?></strong></div>
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
                      <h3 class="h4">Registered Users</h3>
                    </div>
                      <div id="chart_div" style="width: 100%; height: 250px;"></div>
                      <div id="chart_div_2" style="width: 100%; height: 250px;"></div>
                  </div>
                </div>

                <div class="statistics col-lg-4 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-bed"></i></div>
                    <div class="text"><strong><?php include('Controllers/AdminTotalProdReports.php')?></strong><br><small>Added Products</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-rub"></i></div>
                    <div class="text"><strong><?php include('Controllers/AdminTotalComTranReports.php')?></strong><br><small>Completed Transactions</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-mail-reply"></i></div>
                    <div class="text"><strong><?php include('Controllers/AdminTotalCanTranReports.php')?></strong><br><small>Product Returns</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-comment-o"></i></div>
                    <div class="text"><strong><?php include('Controllers/AdminTotalReviewsReports.php')?></strong><br><small>User Reviews</small></div>
                  </div>
                </div>
                
                <div class="col-lg-6">
                  <div class="line-chart-example card no-margin-bottom">
                    
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Top Selling Manufacturers</h3>
                    </div>
                    <div class="card-body">
                      <div id="top_x_div" style="width: 100%; height: 157px;"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="line-chart-example card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Top Selling Products</h3>
                    </div>
                    <div class="card-body">
                      <div id="top_x_div_2" style="width: 100%; height: 157px;"></div>
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
    <!-- s<script src="js/charts-custom.js"></script> -->
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      google.charts.setOnLoadCallback(drawStuff1);
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Sellers'],
          <?php
              require("Controllers/RetrieveNewSellerCharts.php"); 
          ?>
        ]);

        var options = {
          title: 'Monthly Report of New Sellers',
          hAxis: {titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0},
          colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
        function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Customers'],
          <?php
              require("Controllers/RetrieveNewCustomerCharts.php"); 
          ?>
        ]);

        var options = {
          title: 'Monthly Report of New Customers',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_2'));
        chart.draw(data, options);
      }

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Manufacturers', 'Furniture Sold'],
          <?php require("Controllers/RetrieveTopSellingManufacturers.php")?>
        ]);

        var options = {
          width: 500,
          legend: { position: 'none' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Total amount sold'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
  
      function drawStuff1() {
        var data = new google.visualization.arrayToDataTable([
          ['Furniture', 'Furniture Sold'],
          <?php require("Controllers/RetrieveTopSellingProducts.php")?>
        ]);

        var options = {
          width: 500,
          legend: { position: 'none' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Stock sold'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" },
          colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div_2'));
        chart.draw(data, options);
      };

    </script>
</html>