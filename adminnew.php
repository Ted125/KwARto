<!DOCTYPE html>
<?php
  session_start();
  if(strcmp($_SESSION['userType'],'admin') != 0){
      header("Location:index.php");
  }
?>
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
    <link rel="shortcut icon" href=" images/icon.png">
   
  </head>
  <body>
    
    <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form" method="post" action="Controllers/Register.php">
                    <div class="form-group">
                      <input id="register-fName" type="text" name="registerFName" required class="input-material">
                      <label for="register-fName" class="label-material">First Name</label>
                    </div>
                     <div class="form-group">
                      <input id="register-mName" type="text" name="registerMName" required class="input-material">
                      <label for="register-mName" class="label-material">Middle Name</label>
                    </div>
                     <div class="form-group">
                      <input id="register-lName" type="text" name="registerLName" required class="input-material">
                      <label for="register-lName" class="label-material">Last Name</label>
                    </div>
                     <div class="form-group">
                      <input id="register-bDay" type="date" name="registerBDay" required class="input-material">
                      <label for="register-bDay" class="label-material"></label>
                    </div>
                     <div class="form-group">
                      <input id="register-phone" type="text" name="registerPhone" required class="input-material">
                      <label for="register-phone" class="label-material">Phone Number</label>
                    </div>                    
                    <div class="form-group">
                      <input id="register-email" type="email" name="registerEmail" required class="input-material">
                      <label for="register-email" class="label-material">Email Address</label>
                    </div>
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                      <label for="register-passowrd" class="label-material">Password</label>
                    </div>
                    <div class="form-group terms-conditions">
                      <input id="license" type="checkbox" class="checkbox-template" onclick="disableElement()">
                      <label for="license">I agree to the terms and policies</label>
                    </div>
                    <button id="register" type="submit" class="btn btn-primary" disabled>Register</button>
                  </form><small>Already have an account? </small><a href="loginnew.php" class="signup">Login</a>
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