<?php
  $color = "#333333";
  $color = ($row['live'] == 1)?"#9ACD32":"#FF0000";
  $live = ($row['live'] == 1)?"Yes":"No";
?>
<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $row['furnitureName'];?></td>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $qtyAvail['available_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $qtySold['sold_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $qtyHold['on_hold_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal">P <?php echo $row['price'];?></td>
  <td data-toggle="modal" data-target="#mrowModal" style = "color:<?php echo $color?>;" ;?><?php echo $live?></td>
  <td>
    <button type="button" data-toggle="modal" data-target="#banModal" class="btn btn-primary">Ban Furniture</button>
    <!-- Modal-->
    <div id="banModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to ban this product?</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            <button type="button" class="btn btn-primary">Yes</button>
          </div>
        </div>
      </div>
    </div>
  </td>
  
  <!-- Modal Contents for Row -->
  <div class="modal fade" id="mrowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content " style="width: 600px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Furniture Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-5">
                <img src="<?php echo $row['image'];?>" id = "pendingpics">
              </div>
              <div class="col-7">
              <div class="row" style="padding-left: 20px;"><h5>User ID: <h5  style="font-weight: normal; padding-left: 5px;"></h5><?php echo $row['userId'];?></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Seller ID: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['sellerId'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Company Name: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['name'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>User Type: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['userType'];?></h5> </h5></div>
              <div class="row" style="pFadding-left: 20px;"><h5>User Status:<h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['userStatus'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['email'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Phone Number: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['mobileNumber'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Join Date: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['dateAdded'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Added By: <h5 style="font-weight: normal; margin-left: 5px;">12<?php echo $row['addedBy'];?>3123</h5></h5></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</tr>