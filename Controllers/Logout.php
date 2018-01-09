<?php
  session_start();
  $_SESSION['userId'] = null;

  header( "Location: http://localhost/capstone-project/" );
?>
