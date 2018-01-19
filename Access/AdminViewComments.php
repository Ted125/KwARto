<tr>
    <th scope="row"><?php echo $count?></th>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['dateAdded']?></td>
    <td>
        <button type="button" data-toggle="modal" data-target="#myModalc1<?php echo $row['feedbackId']?>" class="btn btn-primary">View</button>
        <!-- Modal-->
        <div id="myModalc1<?php echo $row['feedbackId']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <h6>Name: <?php echo $row['name']?></h6>
                <h6>E-mail Address: <?php echo $row['email']?></h6>
                <h6>Content:</h6><p style="margin-left: 20px;"><?php echo $row['body']?></p>
                <?php //<h6>Write a response:</h6>
                //<textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea> ?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
            </div>
        </div>
        </div>
    </td>
</tr>
