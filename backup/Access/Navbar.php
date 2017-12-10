<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top topnav">
  <div class="container topnav">
    <div>
      <img class="logo" href="#" src="logo.png" ></img>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <form class="navbar-form ml-auto row">
          <div class="form-group mx-4" >
            <input type="text" class="form-control searchbar" placeholder="Search">
          </div>
          <button type="submit" class="btn intBtn" style="height: 38px;">Submit</button>
        </form>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <p class="navtext">Welcome, <span class="username">User!</span><img href="#" src="obj.jpg" style="max-height: 40px;" ></img></p>
        </li> -->
        <?php
          if(!isset($_SESSION['username'])){
            //Session is empty
            echo "<li class='nav-item'>
                    <p class='navtext'>Welcome!
                      <form action='Controllers/Login.php' method='POST'>
                        <input type='email' name='loginEmail' placeholder='Email'></input>
                        <input type='password' name='loginPassword' placeholder='********'></input>
                        <button type='submit' class='btn btn-sm'>Submit</button>
                      </form>
                      |
                      <a href='#' id='registerForm'>Register</a>
                    </p>
                  </li>";
          } else {
            //Session is active
            echo "<li class='nav-item'>
                    <p class='navtext'>Welcome,
                      <a href='#' id='username'>".$_SESSION['username']."".$_SESSION['email']."</a>
                      <img href='#' src='obj.jpg' style='max-height: 40px;' ></img>
                      |
                      <a href='Controllers/Logout.php' id='logoutForm'>Logout</a>
                    </p>
                  </li>";
          }

        ?>
        
      </ul>
    </div>
  </div>
</nav>