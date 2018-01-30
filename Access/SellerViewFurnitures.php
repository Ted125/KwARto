  <?php
  $color = ($row['live'] == 1)?"#9ACD32":"#FF0000";
  $live = ($row['live'] == 1)?"Yes":"No";
  $status = ($row['live'] == 1)?"Live":"Not Live";
  $act = ($row['live'] == 1)?"fa fa-arrow-down":"fa fa-arrow-up";
  $ban = ($row['status'] == 0)?"disabled":" ";
  $ban_warn = ($row['status'] == 0)?"fa fa-times": $act;
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
      <input type="checkbox" data-toggle="toggle" data-on="Live" data-off="Not Live">
          <script>
            $(function() {
              $('#toggle').bootstrapToggle({
                on: 'Live',
                off: 'Not Live'
              });
            })
          </script>
        </td> 
      <!-- <button type="submit" title="Live/Remove from live" style="margin-right: 3px;" class="btn btn-primary <?php echo $ban_warn;?>" <?php echo $ban;?>></button> -->
    </form>

  <td class="row">

    <!-- Modal-->
    <div id=<?php echo "modal".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
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
                <h2 style = "color: #9ACD32;"><?php echo $row['discount'];?></h2>
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
    </div>
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
              <div class="form-group">
                <p>Are you sure you want to update these changes?</p>       
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Yes"  />
              </div>
            </div>
          </form>
          <div class="modal-footer">
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
              <div class="form-group">
                <label>Discount</label>
                <input id=<?php echo "dateToday".$count;?> type="number" class="form-control" name="discount" min="0" max="100">       
                <label>Sale Start</label>
                <input id=<?php echo "dateToday".$count;?> type="date" class="form-control" name="dateStart" min="">
                <label>Sale End</label>
                <input id=<?php echo "dateToday".$count;?> type="date" class="form-control" name="dateEnd" min="">
                <input type="hidden" class="form-control" value=<?php echo $row['furnitureId']?> name="furnitureId">
              </div>
              <div class="form-group">
                <p>Are you sure you want to update these changes?</p>       
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Yes"  />
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
      document.getElementById("<?php echo "dateToday".$count;?>").min = d + "-" + m + "-" + y;
</script>