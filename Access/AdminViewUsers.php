<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target= "<?php echo '#rowModal'.$row['userId'];?>"><?php echo $row['firstName'];?></td>
  <td data-toggle="modal" data-target="<?php echo '#rowModal'.$row['userId'];?>"><?php echo $row['middleName'];?></td>
  <td data-toggle="modal" data-target="<?php echo '#rowModal'.$row['userId'];?>"><?php echo $row['lastName'];?></td>
  <td data-toggle="modal" data-target="<?php echo '#rowModal'.$row['userId'];?>"><?php echo $row['email'];?></td>
  <td>
    <button type="button" data-toggle="modal" data-target="#banModal" class="btn btn-primary">Ban</button>
    <!-- Modal-->
    <div id="banModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to ban this user?</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            <form  method = "post" action = "Controllers/DeactivateUser.php">
            <input type = "hidden" name = "userId" value =<?php echo $ctr;?> />
            <input type = "submit" class="btn btn-primary" value = "Yes"/>
            </form>
          </div>
        </div>
      </div>
    </div>
  </td>
</tr>

<!-- Modal Contents for Row -->
<div class="modal fade" id="<?php echo '#rowModal'.$row['userId'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content " style="width: 600px;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-5">
                                          <img src="Resources/Images/Profile/3.jpg" id = "pendingpics">
                                      </div>
                                      <div class="col-7">
                                         <div class="row" style="padding-left: 20px;"><h5>User ID: <h5  style="font-weight: normal; padding-left: 5px;">'.$appRow['userId'].'</h5>  </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Seller ID: <h5 style="font-weight: normal; padding-left: 5px;">'.$appRow['sellerId'].'</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Company Name: <h5 style="font-weight: normal; padding-left: 5px;">'.$appRow['name'].'</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>User Type: <h5 style="font-weight: normal; padding-left: 5px;">'.$appRow['userType'].'</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>User Status:<h5 style="font-weight: normal; padding-left: 5px;">'.$appRow['userStatus'].'</h5> </h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;">'.$appRow['email'].'</h5></h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Mobile Number: <h5 style="font-weight: normal; margin-left: 5px;">'.$appRow['mobileNumber'].'</h5></h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Join Date: <h5 style="font-weight: normal; margin-left: 5px;">'.$appRow['dateAdded'].'</h5></h5></div>
                                         <div class="row" style="padding-left: 20px;"><h5>Added By: <h5 style="font-weight: normal; margin-left: 5px;">'.$appRow['addedBy'].'</h5></h5></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
</div>