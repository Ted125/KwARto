<?php
  session_start();
  session_unset();
  session_destroy();
  $_SESSION['userId'] = null;

  header("Location: ../loginnew.php" );
?>
