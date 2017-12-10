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