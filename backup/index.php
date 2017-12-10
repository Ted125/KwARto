<!DOCTYPE html>
<html lang="en">
  <?php
    session_start();
  ?>
  <head>

    <?php include'Access/Header.php'; ?>

  </head>
  <style>

    <?php include'Access/Style.php'; ?>

  </style>
  <body>

    <?php include'Access/Navbar.php'; ?>
    <?php include'Access/RegisterForm.php'; ?>
    <br>
    <!-- Page Content -->
    <div class="container">
      <div class="text-center">
        <ul class="nav my-4 intTab">
          <li class="active"><a data-toggle="tab" href="#users">Users</a></li>
          <li><a data-toggle="tab" href="#manus">Manufacturers</a></li>
          <li><a data-toggle="tab" href="#prods">Products</a></li>
        </ul>
      </div>

      <div class="tab-content">

        <!-- Users Information Here -->
        <div id="users" class="tab-pane fade in active">
          <div class="row text-center">

            <?php
              $userMenuId = 0;
              for($cnt = 0; $cnt < 3; $cnt++, $userMenuId++){
                include'Access/CardUser.php';
              }//testing only

            ?>


          </div>
        </div>

        <!-- Manufacturers Information Here -->
        <div id="manus" class="tab-pane fade">
          <div class="row text-center">

            <?php
              $manuMenuId = 0;
              include'Access/CardManu.php';
            ?>

          </div>
        </div>

        <!-- Products Information Here -->
        <div id="prods" class="tab-pane fade">
          <div class="row text-center">

            <?php
              $prodMenuId = 0;
              include'Access/CardProd.php';
            ?>

          </div>

          </div>
        </div>

      </div>
    </div>
    <!-- /.container -->

    <?php include'Access/Footer.php'; ?>
    <?php include'Access/ScriptLinks.php'; ?>


  </body>

</html>
