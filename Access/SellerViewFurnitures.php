<tr>
  <?php include('Controllers/SellerGetAvailableStock.php');?>
  <th scope="row"><?php echo $count;?></th>
  <td><?php echo $row['furnitureName'];?></td>
  <td><?php echo $stock['available_stock'];?></td>
  <td><?php echo $row['price'];?></td>
  <td>
    <button type="button" data-toggle="modal" data-target=<?php echo "#modal".$count;?> class="btn btn-primary">Edit</button>
    <!-- Modal-->
    <div id=<?php echo "modal".$count;?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Update Product</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form>
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
                <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
                <img src="http://www.firemagicgrills.com/wp-content/uploads/accessories-small-placeholder.jpg">
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
                <label>Quantity</label>
                <input type="text" value=<?php echo $stock['available_stock'];?> class="form-control">
              </div>
              <div class="form-group">       
                <label>Discount</label>
                <input type="text" value=<?php echo $row['discount'];?> class="form-control">
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

    <button type="button" data-toggle="modal" data-target="#restockModal" class="btn btn-primary">Restock</button>
    <div id="restockModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Restock Product</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form>

              <div class="form-group">       
                <label>Length</label>
                <input type="text" value="10" class="form-control">
              </div>

              <div class="form-group">
                <p>Are you sure you want to update these changes?</p>       
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Yes</button>
          </div>
        </div>
      </div>
    </div>

  </td>
</tr>