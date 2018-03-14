

<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Batch</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="">
            <tr>
              <th><center>Batch Name</center></th>
              <th><center>Batch Start</center></th>
              <th><center>Batch End</center></th>
               <th><center>Batch Day</center></th>
              <th><center>Action</center></th>
              
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($batch as $key => $value) {
  $name=$value['name'];
  $start=$value['start'];
  $end=$value['end'];
  $batch_day=$value['day_string'];
  $id=$value['id'];
  $day=$value['day'];
?>
            <tr>
               
              <td><center><?php echo "$name"; ?></center></td>
              <td><center><?php echo "$start"; ?></center></td>
              <td><center><?php echo "$end"; ?></center></td>
              <td><center><?php echo "$batch_day"; ?></center></td>
              <td><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo "$id"; ?>" ><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
    
            </tr>


<!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation <?php echo "$name"; ?></h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Batch?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <form action="batch_action.php" method="POST">
            <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
             
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
            </form>
        </div>
      </div>
    </div>
</div>
<!-- End Delete Model -->

<!-- Start Edit Model-->

<div class="modal large fade" id="edit<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #414959; color: #ffffff">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel"><?php echo "$name"; ?></h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
           <!-- start Body -->

  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="batch_action" autocomplete="off" method="POST">
      <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
<div class="form-group">
    <label class="control-label" for="inputName"><b>Batch Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$name"; ?>" placeholder="Enter Batch Name"  type="text" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>

  <div class="form-group">
    <label class="control-label" for="inputName"><b>Start Batch Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$start"; ?>" placeholder="Enter Start Batch Time"  type="text" name="start"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;">Ex: 8:00 AM</div>
  </div>

 <div class="form-group">
    <label class="control-label" for="inputName"><b>End Batch Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$end"; ?>" placeholder="Enter End Batch Time"  type="text" name="end"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;">Ex: 10:20 AM</div>
  </div>
  <?php $batch_ob->selectd_day($day); ?>
          <button class="btn btn-lg btn-primary btn-block" name="update" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Update</button>
        </form>
      </div>
</div>
           <!-- end Body -->
        </div>
      </div>
    </div>
</div>

            <!-- end edit model -->

<?php } ?>
          </tbody>
        </table>

<!-- start Add model -->

  <div class="modal large fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #414959; color: #ffffff">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">Add Batch</h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
            <?php include "page/batch/add_batch.php"; ?>
        </div>
       
      </div>
    </div>
</div>

