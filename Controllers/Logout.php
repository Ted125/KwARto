<?php
  session_start();
  $_SESSION['username'] = null;

  header( "Location: http://localhost/capstone-project/" );
?>
