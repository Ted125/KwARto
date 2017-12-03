<?php
  //User Card
  // echo "

  // <div id='".$prodMenuId."' class='col-lg-3 col-md-6 mb-4'>
  //   <div class='card'>
  //     <img class='card-img-top' src='http://placehold.it/500x325' alt='Card image cap'>
  //     <div class='card-block'>
  //       <h4 class='card-body'>Prod ".$prodMenuId."</h4>
  //       </div>

  //       <div>
  //     <a href='Views/test.php?id=".$prodMenuId."'' class='btn intBtnCard intBtn' >Ban</a>
  //     <a href='Views/display.php?id=".$prodMenuId."'' class='btn intBtnCard intBtn' >View</a>
  //     </div>
  //   </div>
  // </div>

  // ";
?>

<?php echo "<div id='".$prodMenuId."' class='col-lg-3 col-md-6 mb-4'>"; ?>
  <div class='card'>
    <img class='card-img-top' src='http://placehold.it/500x325' alt='Card image cap'>
    <div class='card-block'>
      <?php echo "<h4 class='card-body'>Prod ".$prodMenuId."</h4>" ?>
    </div>
    <div class="col-lg-3">
      <!-- <div align="center">
        <?php echo "<a href='Views/test.php?id=".$prodMenuId."'' class='btn intBtnCard intBtn' >Ban</a>"; ?>
      </div> -->
      <div align="left">
        <?php echo "<a href='Views/display.php?id=".$prodMenuId."''><button class='btn btn-success'><span class='glyphicon glyphicon-search'>View</span></button></a>"; ?>
      </div>
    </div>
  </div>
</div>