<?php
  $color = "#333333";
  if(strcmp($row['userStatus'], 'inactive') != 0){
    $color=(strcmp($row['userStatus'], 'active') == 0)?"#9ACD32":"#FF0000";
  }
?>
<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['name'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['description'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['email'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>" style = "color:<?php echo $color;?>"><?php echo $row['userStatus'];?></td>
  <td>
  <?php
  if(strcmp($row['userStatus'], 'active') != 0){
    echo 
    '<button type="button" data-toggle="modal" data-target="#banModal'.$row['userId'].'" class="btn btn-primary">Unban</button>
    <!-- Modal-->
    <div id="banModal'.$row['userId'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">  
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to unban this user?</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            <form  method = "post" action = "Controllers/ActivateUser.php">
            <input type = "hidden" name = "userId" value = '.$row['userId'].' />
            <input type = "submit" class="btn btn-primary" value = "Yes"/>
            </form>
          </div>
        </div>
      </div>
    </div>';
  }else{
    echo 
    '<button type="button" data-toggle="modal" data-target="#banModal'.$row['userId'].'" class="btn btn-primary">Ban</button>
    <!-- Modal-->
    <div id="banModal'.$row['userId'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to ban this manufacturer?</p>
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
          <form  method = "post" action = "Controllers/DeactivateUser.php">
          <input type = "hidden" name ="userId" value = "'.$row['userId'].'" />
          <input type = "hidden" name = "userType" value = '.$row['userType'].' />
          <input type = "submit" class="btn btn-primary" value = "Yes"/>
          </form>
          </div>
        </div>
      </div>
    </div>';
    }
  ?>
  </td>

  <!-- Modal Contents for Row -->
  <div class="modal fade" id="mrowModal<?php echo $row['userId'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img src="<?php echo 'Resources/Images/User/'.$row['userId'].'/'.$row['image'].'';?>" id = "pendingpics" width = "200px" height = "200px" alt ="">
            </div>
            <div class="col-7">
             <div class="row" style="padding-left: 20px;"><h5>User ID: <h5  style="font-weight: normal; padding-left: 5px;"></h5><?php echo $row['userId'];?></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Seller ID: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['sellerId'];?></h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Company Name: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['name'];?></h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>User Type: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['userType'];?></h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['email'];?></h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Phone Number: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['mobileNumber'];?></h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Join Date: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['dateAdded'];?></h5></h5></div>
             <!-- <div class="row" style="padding-left: 20px;"><h5>Added By: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['addedBy'];?>3123</h5></h5></div> -->
           </div>
         </div>
         <hr>
           <div class =  "col-8">
              Securities and Exchange Commission / Department of Trade and Industry form
              <img class = "document" alt = "" src = Resources/Documents/Seller/<?php echo $row['sellerId'];?>/<?php echo $row['sellerId'];?>_secdti.jpg>
            </div>
            <hr>
            <div class =  "col-8">
              Business Permit
              <img class = "document" alt = "" src = Resources/Documents/Seller/<?php echo $row['sellerId'];?>/<?php echo $row['sellerId'];?>_busiper.jpg>
            </div>
            <hr>
            <div class =  "col-8">
              BIR
              <img class = "document" alt = "" src = Resources/Documents/Seller/<?php echo $row['sellerId'];?>/<?php echo $row['sellerId'];?>_bir.jpg>
            </div>
            </div>
       </div>
     </div>
   </div>
 </div>
</tr>