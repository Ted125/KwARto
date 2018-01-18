<?php
  $color = "#333333";
  $color = ($row['live'] == 1)?"#9ACD32":"#FF0000";
  $live = ($row['live'] == 1)?"Yes":"No";
?>
<tr>
  <th scope="row"><?php echo $count;?></th>
  <td><?php echo $row['furnitureName'];?></td>
  <td></td>
  <td><?php echo $row['price'];?></td>
  <td style = "color:<?php echo $color?>;" ;?><?php echo $live?></td>
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
</tr>