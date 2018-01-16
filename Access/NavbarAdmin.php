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
          <h1 class="h4"><?php echo $_SESSION['email']?></h1>
          <p>Super Admin</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li class="active"><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
        <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
        <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
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