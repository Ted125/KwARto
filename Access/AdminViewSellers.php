<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $row['name'];?></td>
  <td data-toggle="modal" data-target="#mrowModal">*MISSING ADDRESS FIELD, PLEASE NOTICE AND UPDATE SO I CAN ERASE & CHANGE THIS*</td>
  <td data-toggle="modal" data-target="#mrowModal"><?php echo $row['email'];?></td>
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
            <p>Are you sure you want to ban this manufacturer?</p>
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
          <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5">
              <img src="https://cdn.tutsplus.com/net/uploads/legacy/958_placeholders/placehold.gif">
            </div>
            <div class="col-7">
             <div class="row" style="padding-left: 20px;"><h5>First Name: <h5  style="font-weight: normal; padding-left: 5px;">John</h5>  </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Middle Name: <h5 style="font-weight: normal; padding-left: 5px;">Smithers</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Last Name: <h5 style="font-weight: normal; padding-left: 5px;">Smith</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Gender: <h5 style="font-weight: normal; padding-left: 5px;">Male</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Mobile Number:<h5 style="font-weight: normal; padding-left: 5px;">+63 123 456 7890</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;">name@user.com</h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Current Address: <h5 style="font-weight: normal; margin-left: 5px;">123 Internet Street, Long Address, Somewhere City, Cty</h5></h5></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</tr>