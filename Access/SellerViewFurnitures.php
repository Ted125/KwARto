  <?php
  $color = ($row['live'] == 1)?"#9ACD32":"#FF0000";
  $live = ($row['live'] == 1)?"checked":" ";
  $status = ($row['live'] == 1)?"Live":"Not Live";
  $act = ($row['live'] == 1)?"fa fa-arrow-down":"fa fa-arrow-up";
  $ban = ($row['status'] == 0)?"disabled":" ";
  $ban_warn = ($row['status'] == 0)?"Banned":"Not Live";
?>
<tr>
  <?php include('Controllers/SellerGetAvailableStock.php');?>
  <?php include('Controllers/SellerGetOnHoldStock.php');?>
  <?php include('Controllers/SellerGetSoldStock.php');?>
  <th scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?> ><?php echo $count;?></th>
  <td align="left" scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $row['furnitureName'];?></td>
  <td scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $stockA['available_stock'];?></td>
  <td scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $stockO['on_hold_stock'];?></td>
  <td scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $stockS['sold_stock'];?></td>
  <td scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo "P".$row['price'];?></td>
  <td scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $stockA['dateUpdated'];?></td>
  <!-- <td style = "color:<?php echo $color?>;" scope="row" data-toggle="modal" data-target=<?php echo "#modal".$count;?>><?php echo $live;?></td> -->

  <!-- button for Toggle live --> 
  <td scope="row" data-target=<?php echo "#modal".$count;?>>
    <form method="post" action="Controllers/SellerToggleLive.php">
      <input type="hidden" value=<?php echo $row['live'];?> name="live"/>
      <input type="hidden" value=<?php echo $row['furnitureId'];?> name="furnitureId"/>
      <input type="checkbox" onChange="this.form.submit()" data-toggle="toggle" data-on="Live" data-off="<?php echo $ban_warn;?>" <?php echo $live;?> <?php echo $ban;?>>
    </form>
  </td> 
      <!-- <button type="submit" title="Live/Remove from live" style="margin-right: 3px;" class="btn btn-primary <?php echo $ban_warn;?>" <?php echo $ban;?>></button> -->

  <td class="row">

    <!-- Modal-->
    <!-- <div id=<?php echo "modal".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form method="post" action="#">
              <div class="form-group">
                <label>Live</label><br>
                <h2 style = "color:<?php echo $color?>;"><?php echo $live;?></h2>
              </div>
              <div class="form-group">       
                <label>Discount</label>
                <h2 style = "color: #9ACD32;"><?php echo $row['discount'];?>%</h2>
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" value="<?php echo $row['furnitureName'];?>" class="form-control">
              </div>
              <div class="form-group">       
                <label>Description</label>
                <textarea class="form-control" rows="3" id="description">T<?php echo $row['furnitureDesc'];?></textarea>
              </div>
              <div class="form-group">       
                <label style="margin-bottom: 0px;">Product Images</label><br>
                <p class="small">Maximum number of images is 5</p>
                <img src="<?php echo '../Capstone-Project/Resources/Images/Furniture/'.$row['furnitureId'].'/1.jpg'?>" width="240px" height="240px">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Update Photos</button>
              </div>
              <div class="form-group">       
                <label>Length</label>
                <input type="text" value=<?php echo $row['length'];?> class="form-control">
              </div>
              <div class="form-group">       
                <label>Width</label>
                <input type="text" value=<?php echo $row['width'];?> class="form-control">
              </div>
              <div class="form-group">       
                <label>Height</label>
                <input type="text" value=<?php echo $row['height'];?> class="form-control">
              </div>
              <div class="form-group">       
                <label>Warranty</label>
                <select name="account" class="form-control">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                </select>
              </div>
              <div class="form-group">       
                <label>Unit</label>
                <?php echo $row['sizeUnit'];?>
                <select name="account" class="form-control">
                  <option>millimeter/s</option>
                  <option>centimeter/s</option>
                  <option>inch/es</option>
                  <option>meter/s</option>
                </select>
              </div>
              <div class="form-group">       
                <label>Price</label>
                <input type="text" value=<?php echo $row['price'];?> class="form-control">
              </div>
              <div class="form-group">
                <p>Are you sure you want to update these changes?</p>       
                <input type="submit" value="Save changes" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- button for edit -->
    <form role="form" action="produpdate.php" method="POST">
      <input type="hidden" name="furnitureId" value="<?php echo $row['furnitureId'];?>"/>
      <input type="hidden" name="updateName" value="<?php echo $row['furnitureName'];?>"/>
      <input type="hidden" name="updateDesc" value="<?php echo $row['furnitureDesc'];?>"/>
      <input type="hidden" name="updateModelName" value="<?php echo $row['modelName'];?>"/>
      <input type="hidden" name="updateColor" value="<?php echo $row['color'];?>"/>
      <input type="hidden" name="updateWeight" value="<?php echo $row['weight'];?>"/>
      <input type="hidden" name="updateWeightUnit" value="<?php echo $row['weightUnit'];?>"/>
      <input type="hidden" name="updateLength" value="<?php echo $row['length'];?>"/>
      <input type="hidden" name="updateWidth" value="<?php echo $row['width'];?>"/>
      <input type="hidden" name="updateHeight" value="<?php echo $row['height'];?>"/>
      <input type="hidden" name="updateSizeUnit" value="<?php echo $row['sizeUnit'];?>"/>
      <input type="hidden" name="updatePrice" value="<?php echo $row['price'];?>"/>
      <input type="hidden" name="updatePackageLength" value="<?php echo $row['packageLength'];?>"/>
      <input type="hidden" name="updatePackageWidth" value="<?php echo $row['packageWidth'];?>"/>
      <input type="hidden" name="updatePackageHeight" value="<?php echo $row['packageHeight'];?>"/>
      <input type="hidden" name="updatePackageSizeUnit" value="<?php echo $row['packageSizeUnit'];?>"/>
      <button type="submit" title="Update Product"  style="margin-right: 3px;" class="btn btn-primary fa fa-edit"></button>
    </form>
    
    <!-- Button for Restock Furnitures -->
    <button type="button" title="Restock Product"  style="margin-right: 3px;" data-toggle="modal" data-target="<?php echo "#restockModal".$count;?>" class="btn btn-primary fa fa-plus"></button>
    <div id=<?php echo "restockModal".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Restock Product</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <form role="form" method="post" action="Controllers/SellerRestock.php">
            <div class="modal-body">
              <div class="form-group">       
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Amount to Restock" name="quantityAmount">
                <input type="hidden" class="form-control" value=<?php echo $row['furnitureId']?> name="furnitureId">
              </div>
              <div class="form-group" >
                <small style="position: absolute;bottom: 0; margin-top: 30px;">* Are you sure you want to update these changes?</small>       
              </div>
            </div>
          
          <div class="modal-footer">
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Yes"  />
              </div>
              </form>
            <div class="form-group">
              <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Button for Discount -->
    <button type="button" title="Add Promo/Discount" data-toggle="modal" data-target="<?php echo "#sale".$count;?>" class="btn btn-primary fa fa-tag"></button>
    <div id=<?php echo "sale".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Sale</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <form role="form" method="post" action="Controllers/SellerSetDiscount.php">
            <div class="modal-body">
                <small style="position: absolute;bottom: 0; margin-top: 30px;">* Are you sure you want to update these changes?</small>    
              <div class="form-group">
                <label>Discount (%)</label>
                <input type="number" class="form-control" name="discount" min="0" max="100">       
                <label>Sale Start</label>
                <input id=dateToday type="date" class="form-control" name="dateStart" value=<?php echo date('Y-m-d');?>>
                <input id=comDateToday type="hidden" class="form-control" name="comDateStart" value=<?php echo date('Y-m-d');?>>
                <label>Sale End</label>
                <input id=dateEnd type="date" class="form-control" name="dateEnd">
                <input type="hidden" class="form-control" value=<?php echo $row['furnitureId']?> name="furnitureId">
              </div>
              <div class="form-group">
              </div>
          </div>
              <div class="modal-footer">
              <div class="form-group">
                <input type="submit" id="discountBtn" class="btn btn-primary" value="Yes"  />
              </div>
              </form>
            <div class="form-group">
              <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>  
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Button for delete -->
    <button type="button" title="Add Promo/Discount" data-toggle="modal" data-target="<?php echo "#delete".$count;?>" class="btn btn-primary fa fa-tag"></button>
    <div id=<?php echo "delete".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Remove Product</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <form role="form" method="post" action="Controllers/SellerDeleteFurniture.php">
            <div class="modal-body">
                <small style="position: absolute;bottom: 0; margin-top: 30px;">* Are you sure you want to remove this furniture?</small>    
              <div class="form-group">
                <label>Name:</label>
                <span><?php echo $row['furnitureName'];?></span>     
                <input type="hidden" class="form-control" value=<?php echo $row['furnitureId']?> name="furnitureId">
              </div>
              <div class="form-group">
              </div>
          </div>
              <div class="modal-footer">
              <div class="form-group">
                <input type="submit" id="discountBtn" class="btn btn-primary" value="Yes"  />
              </div>
              </form>
            <div class="form-group">
              <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>  
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </td>
</tr>
<script>
      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      //document.getElementById("<?php echo "dateToday".$count;?>").min = d + "-" + m + "-" + y;

      // $(function() {
      //   $('#toggle').bootstrapToggle({
      //     on: 'Live',
      //     off: 'Not Live'
      //   });
      // });

      function toggleLive() {
        if(document.getElementById("liveCheckbox").checked = false){
          document.getElementById("furnLive").submit();
        } else {
          document.getElementById("furnLive").submit();
        }
      }

      //set date today
      function () { 
        var today = new Date();
        var end = new Date();
        var dateToday = today.getFullYear()+"-"today.getMonth()+1+"-"today.getDate();
        document.getElementById("dateToday").defaultValue = dateToday;
        document.getElementById("comDateToday").defaultValue = dateToday;
        end = document.getElementById("dateEnd").value;

      }

</script>