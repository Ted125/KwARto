<?php
  $color = $cAvail = $cSold = $cHold = "#333333";
  $color = ($row['live'] == 1)?"#9ACD32":"#FF0000";
  $live = ($row['live'] == 1)?"Yes":"No";
  $status = ($row['status'] == 1)?"Active":"Banned";
  $cAvail = ($qtyAvail['available_stock'] == 0)?"#FF0000":"#9ACD32";
  $cSold = ($qtySold['sold_stock'] == 0)?"#FF0000":"";
  $cHold = ($qtyHold['on_hold_stock'] == 0)?"#FF0000":"#DAA520";
?>
<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>"><?php echo $row['furnitureName'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>" style = "color:<?php echo $cAvail?>;"><?php echo $qtyAvail['available_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>" style = "color:<?php echo $cSold?>;"><?php echo $qtySold['sold_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>" style = "color:<?php echo $cHold?>;"><?php echo $qtyHold['on_hold_stock']?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>">P <?php echo $row['price'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['furnitureId'];?>" style = "color:<?php echo $color?>;"><?php echo $live?></td>
  <td>
  <?php
  if(strcmp($row['status'], 'banned') == 0){
                                echo 
                                '<button type="button" data-toggle="modal" data-target="#banModal'.$row['furnitureId'].'" class="btn btn-primary">Unban</button>
                                <!-- Modal-->
                                <div id="banModal'.$row['furnitureId'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                                  <div role="document" class="modal-dialog">  
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Are you sure you want to unban this furniture?</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                        <form  method = "post" action = "Controllers/unbanFurniture.php">
                                        <input type = "hidden" name = "userId" value = '.$row['furnitureId'].' />
                                        <input type = "submit" class="btn btn-primary" value = "Yes"/>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>';
                              }else{
    echo 
    '<button type="button" data-toggle="modal" data-target="#banModal'.$row['furnitureId'].'" class="btn btn-primary">Ban</button>
    <!-- Modal-->
    <div id="banModal'.$row['furnitureId'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to ban this furniture?</p>
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
          <form  method = "post" action = "Controllers/banFurniture.php">
          <input type = "hidden" name ="userId" value = "'.$row['furnitureId'].'" />
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
  <div class="modal fade" id="mrowModal<?php echo $row['furnitureId'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content " style="width: 700px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Furniture Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-5">
                <img src="<?php echo "Resources/Images/Furniture/".$row['furnitureId']."/".$row['thumbnailPic'];?>" id = "pendingpics">
              </div>
              <div class="col-7">
              <div class="row" style="padding-left: 20px;"><h5>Furniture ID: <h5  style="font-weight: normal; padding-left: 5px;"></h5><?php echo $row['furnitureId'];?></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Seller Name: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['sellerName'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Furniture Name: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['furnitureName'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Furniture Description: <h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['furnitureDesc'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Warranty Policy:<h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['warrantyName'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Model:<h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['model'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Model Name:<h5 style="font-weight: normal; padding-left: 5px;"><?php echo $row['modelName'];?></h5> </h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Weight: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['weight']." ".$row['weightUnit'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Size: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['length']."x".$row['width']."x".$row['height']." ".$row['sizeUnit'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Package Size: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['packageLength']."x".$row['packageWidth']."x".$row['packageHeight']." ".$row['packageSizeUnit'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Price: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['price'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Discount: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['discount'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Sale: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['saleStart']."-".$row['saleEnd'];?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Live: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $live;?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Status: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $status;?></h5></h5></div>
              <div class="row" style="padding-left: 20px;"><h5>Category: <h5 style="font-weight: normal; margin-left: 5px;"><?php echo $row['categoryName'];?></h5></h5></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</tr>