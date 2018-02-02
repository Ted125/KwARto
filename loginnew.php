<!DOCTYPE html>
<?php
  ob_start();
  if(isset($_SESSION)){
  session_unset();
  session_destroy();
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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

    <!-- Favicon-->
    <link rel="icon" type="image/png" href=" images/icon.png" />
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>kwARto</h1>
                  </div>
                  <p>Revolutionizing the online furniture shopping experience.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php
                    if(isset($_GET['error'])){
                      echo '<p id="error-msg" class="text text-danger">*Account is Invalid or Banned. Please Try Again.</p>';
                    }
                    if(isset($_GET['success'])){
                      echo '<p id="error-msg" class="text text-success">*Successfully created new account!</p>';
                    }
                  ?>
                  <form id="login-form" method="post" action= "Controllers/Login.php">
                    <div class="form-group">
                      <input id="login-email" type="text" name="loginEmail" required="" class="input-material">
                      <label for="login-email" class="label-material">E-mail Address</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <input id="login" type="submit" class="btn btn-primary" value="Login">
                  </form><a href="forgot.php" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small>
                  <a href="registernew.php" class="signup">Signup Customer</a>
                  <br>
                  <small>Wanna be registered as a new seller? </small>
                  <a href="registernewseller.php" class="signup">Signup Seller</a>

                  <br><br><br>
                    <a href="index.php" class="signup" style="position: absolute; right: 50px; bottom: 50px;"><i class="fa fa-chevron-left" style="font-size: 1em;"></i> Back to Home</a>

                  <!-- <br><br>
                  <div>
                    <a id="fblogin" href="#" style="background-color: #29487d; border-color: #29487d" class="btn btn-primary"><i class="fa fa-facebook-square"></i> Login with Facebook</a>
                    <a id="glogin" href="#" style="background-color: #dd4935; border-color: #dd4935" class="btn btn-primary"><i class="fa fa-google-plus"></i> Login with Google</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
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
