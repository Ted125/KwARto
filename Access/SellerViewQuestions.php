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
        <h5><?php echo $row['name'];?></h5><span><?php echo $row['firstName']." ".$row['lastName'];?></span>
        <div class="full-date">
          <small>
          <?php 
            //echo $row['dateAdded'];
            $date = date_create($row['datePosted']);
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
            $dateAdded = date_create($row['datePosted']);
            $diff = date_diff($dateAdded, $dateToday);
            if(strcmp($diff->format("%a days"),'1') > 0){
              echo $diff->format("%a days");  
            } else {
              echo $diff->format("%h hours");
            }
            
          ?>
      </small>
    </div>
  </div>
  <div class="quote has-shadow"> <small><?php echo $row['question'];?></small></div>
  <div class="CTAs pull-right"><a href="single.php" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
</div>