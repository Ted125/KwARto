<div class="item clearfix">
  <div class="feed d-flex justify-content-between">
    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="<?php
                      if(file_exists('Resources/Images/User/'.$row['userId'].'/'.$row['image'].'')) {
                        echo 'Resources/Images/User/'.$row['userId'].'/'.$row['image'].'';
                      }else{
                        echo 'Resources/Images/User/default/default.png';
                      }
                      ?>" alt="person" class="img-fluid rounded-circle"></a>
      <div class="content">
        <h5>
          <?php echo $row['name'];?>
          <?php
            for($x = 0; $x < $row['rating']; $x++){
              echo '
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
              ';
            }
          ?>
        </h5>
        <span>
          <?php echo $row['firstName']." ".$row['lastName'];?>
        </span>
        <div class="full-date">
          <small>
          <?php 
            //echo $row['dateAdded'];
            $date = date_create($row['dateAdded']);
            echo date_format($date, 'h:iA M d,Y');
          ?>
          </small>
        </div>
      </div>
    </div>
    <div class="date text-right">
      <small>
        <?php 
            //echo $row['dateAdded'];
            date_default_timezone_set('Asia/Manila');
            $dateToday = date_create(date('Y-m-d H:i:s'));
            $dateAdded = date_create($row['dateAdded']);
            $diff = date_diff($dateAdded, $dateToday);
            if(strcmp($diff->format("%a"),'1') > 0){
              echo $diff->format("%a days");  
            } else if(strcmp($diff->format("%h"),'1') > 0){
              echo $diff->format("%h hours");
            } else if(strcmp($diff->format("%i"),'1') > 0){
              echo $diff->format("%i minutes");
            } else {
              echo $diff->format("%s seconds");
            }
            
          ?>
      </small>
    </div>
  </div>
  <div class="content"><?php echo $row['title'];?></div>
  <span class="fa fa-thumbs-up"> <?php echo $row['likes'];?></span>
  <div class="quote has-shadow"> <small><?php echo $row['body'];?></small></div>
  <div class="CTAs pull-right"><a href="single.php" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
</div>