<?php
  switch($row['state']){
    case "pending": $color = "#ffc36d"; break;
    case "shipping": $color = "#ffc36d"; break;
    case "delivered": $color = "#54e69d"; break;
    default : $color = "#D42D2D";
  }
?>
<div class="project">
  <div class="row bg-white has-shadow">
    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
      <div data-toggle="modal" data-target="<?php echo "#myModal".$count;?>" class="project-title d-flex align-items-center">
        <div class="image has-shadow"><img src="http://dondonenglish.com/wp/wp-content/uploads/2017/08/avatar-8.png" alt="..." class="img-fluid"></div>
        <div class="text">
          <h3 class="h4">Order ID: #<?php echo $row['orderId'];?></h3><small><?php echo $row['firstName']." "; echo $row['lastName'];?> - <?php echo $row['totalFee'];?></small>
          <div id="<?php echo "myModal".$count;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <div class="" style="margin-bottom: 10px;">
                    <span><h3>Status:</h3></span>
                    <?php echo $row['state'];?><span class="caret"></span></button>
                    <form action="Controllers/SellerChangeOrderState.php" method="POST">
                      <input type="hidden" name="orderId" value="<?php echo $row['orderId'];?>">
                      <select class="form-control" id="weightUnit" name="state" required>
                        <option value="pending">Pending</option>
                        <option value="delivered">Delivered</option>
                        <option value="shipping">Shipping</option>
                      </select>
                      <input type="submit">
                    </form>
                  </div>

                  <h5 style="color: #555">Order details:</h5>
                  <p class="small">The shipment was made via courier shipping. The items will be delivered according to the information provided by the buyer of the products/items that are listed below.</p>

                  <div class="recent-activities card">
                    <div class="card-header">
                      <h3 class="h4">Order Summary</h3>
                    </div>
                    <div class="card-body no-padding">
                      <div class="item">
                        <div class="row" style="margin-bottom: 0px;">
                          <div class="col-4 date-holder text-right">
                            <div class="text-center"><img style="max-width: 100px;" src="<?php
                      if(file_exists('Resources/Images/Furniture/'.$row['furnitureId'].'/1.jpg')) {
                        echo 'Resources/Images/Furniture/'.$row['furnitureId'].'/1.jpg';
                      }else{
                        echo 'Resources/Images/Furniture/default/default.png';
                      }
                      ?>"></div>
                            <div class="date"><span>P<?php echo $row['price'];?></span><span class="text-info"></span></div>
                          </div>
                          <div class="col-8 content">
                            <h5><?php echo $row['name'];?></h5>
                            <p><?php echo $row['description'];?></p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <br>
                  <div class="text-right"><h3 class="h4">Amount: P<?php echo $row['price'];?></h3></div>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="project-date"><span class="hidden-sm-down"><?php echo $row['customer_orderDateAdded'];?></span></div>
    </div>
    <div class="right-col col-lg-6 d-flex align-items-center">
      <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
      <div class="comments"><i class="fa fa-comment-o"></i>8</div>
      <div class="project-progress">
        <div class="progress">
          <div role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
        </div>
      </div>
      <div class="comments">Status: <span style='<?php echo "color: ".$color;?>'><?php echo $row['state'];?></span></div>
    </div>
  </div>
</div>