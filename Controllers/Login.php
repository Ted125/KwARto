<?php
  require_once("../Models/User.php");

  new Login();

  class Login{
    public function __construct(){
      $user = new User();
      $user->Login();
    }
  }
?>
