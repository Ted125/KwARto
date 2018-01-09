<?php
  //User Card
  echo "

  <div id='".$userMenuId."' class='col-lg-3 col-md-6 mb-4'>
    <div class='card'>
      <img class='card-img-top' src='http://placehold.it/500x325' alt='Card image cap'>
      <div class='card-block'>
        <h4 class='card-body'>User ".$userMenuId."</h4>
        </div>

        <div>
      <a href='Views/test.php?id=".$userMenuId."'' class='btn intBtnCard intBtn' >Ban</a>
      </div>
    </div>
  </div>

  ";
?>