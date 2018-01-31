<div class="item clearfix">
  <div class="feed d-flex justify-content-between">
    <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
      <div class="content">
        <h5><?php echo $row['name'];?></h5><span><?php echo $row['firstName']." ".$row['lastName'];?></span>
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