

<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Program</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="">
            <tr>
              <th><center>Program Name</center></th>
              <th><center>Program Start</center></th>
              <th><center>Program End</center></th>
              <th><center>Subject</center></th>
              <th><center>Batch</center></th>
              <th><center>Fee</center></th>
              <th><center>Start Fee</center></th>
              <th><center>End Fee</center></th>
              <th><center>Action</center></th>


              
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($program as $key => $value) {
  $id=$value['id'];
  $name=$value['name'];
  $start=$value['start'];
  $end=$value['end'];
  $subject=$value['subject_string'];
  $batch=$value['batch_string'];
  $fee=$value['fee'];
  $start_fee=$value['start_fee'];
  $end_fee=$value['end_fee'];
  
?>
            <tr>
               
              <td><center><?php echo "$name"; ?></center></td>
              <td><center><?php echo "$start"; ?></center></td>
              <td><center><?php echo "$end"; ?></center></td>
              <td><center><?php echo "$subject"; ?></center></td>
              <td><center><?php echo "$batch"; ?></center></td>
              <td><center><?php echo "$fee"; ?></center></td>
              <td><center><?php echo "$start_fee"; ?></center></td>
              <td><center><?php echo "$end_fee"; ?></center></td>
              
                
                <td><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo "$id"; ?>" ><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
    
            </tr>


<!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color: #414959; color: #ffffff">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation <?php echo "$name"; ?></h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Subject?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer" style="background-color: #ecf0f1; color: #ffffff">
          <form action="program_action.php" method="POST">
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

  
<style>
  
.select_box{
  background-color: #414959;
  padding: 5px;
  color: #ffffff;
}
.select_box1{
  border-width: 2px;
  border-style: solid;
  border-color: #414959;
  padding: 15px;
}

</style>

  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="program_action.php" autocomplete="off" method="POST">
      

<?php

 //$site->form_input("Batch Name","name","name");
 //$site->form_input("Start Time","start","start");
 //$site->form_input("End time","end","end");
 ?>
<input type="text" name="id" value="<?php echo "$id"; ?>" hidden>
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Program Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$name" ?>" placeholder="Enter Program Name"  type="text" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>



  <div class="form-group">
    <label class="control-label" for="inputName"><b>Start Program Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$start" ?>" placeholder="Enter Start Program Time"  type="date" name="start"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
  </div>



 <div class="form-group">
    <label class="control-label" for="inputName"><b>End Program Time</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$end" ?>" placeholder="Enter End Program Time"  type="date" name="end"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
  </div>


 <div class="form-group">
    <label class="control-label" for="inputName"><b>Admission Fee</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$fee" ?>" placeholder="Enter Admission Fee"  type="number" name="fee"  required="" />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>

<div class="form-group">
    <label class="control-label" for="inputName"><b>Start Fee Date</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$start_fee" ?>" placeholder="Enter End Batch Time"  type="date" name="start_fee"  />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>

<div class="form-group">
    <label class="control-label" for="inputName"><b>End Fee Date</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$end_fee" ?>" placeholder="Enter End Batch Time"  type="date" name="end_fee"   />
    </div>  
    <div id="err_product_date" class="error" style="padding-left: 40px;"></div>
</div>



  <b>


  <?php 
  echo "<div class='select_box'>Select Batch</div><div class='select_box1'>";
  $program_ob->select_batch($id);
 echo "</div><div class='select_box'>Select Subject</div><div class='select_box1'>";
  $program_ob->select_subject($id);
 echo "</div><br />";
   ?>
</b>
          <button class="btn btn-lg btn-primary btn-block" name="update" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
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
            <h4 id="myModalLabel">Add Program</h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
            <?php include "page/program/add_program.php"; ?>
        </div>
       
      </div>
    </div>
</div>
  