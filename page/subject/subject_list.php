

<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Subject</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="">
            <tr>
              <th><center>Subject Name</center></th>
              <th><center>Subject Code</center></th>
              <th><center>Action</center></th>
              
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($subject as $key => $value) {
  $subject_name=$value['name'];
  $subject_code=$value['code'];
  $id=$value['id'];
?>
            <tr>
               
              <td><center><?php echo "$subject_name"; ?></center></td>
              <td><center><?php echo "$subject_code"; ?></center></td>
                
                <td><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo "$id"; ?>" ><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
    
            </tr>


<!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation <?php echo "$subject_name"; ?></h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Subject?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <form action="subject_action.php" method="POST">
            <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
             <input type="text" name="name" value="<?php echo "$subject_name"; ?>" hidden="">
              <input type="text" name="code" value="<?php echo "$subject_code"; ?>" hidden="">
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
            <h4 id="myModalLabel"><?php echo "$subject_name"; ?></h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
           <!-- start Body -->

  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          <form  action="subject_action" autocomplete="off" method="POST">
      <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
  <div class="form-group">
    <label class="control-label" for="inputName"><b>Subject Name</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$subject_name"; ?>" placeholder="Enter Subject Name"  type="text" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>

  <div class="form-group">
    <label class="control-label" for="inputName"><b>Subject Code</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="date" value="<?php echo "$subject_code"; ?>" placeholder="Enter Subject Code"  type="text" name="code"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>
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
        <div class="modal-header" style="">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">Add Subject</h4>
        </div>
        <div class="modal-body" style="">
            <?php include "page/subject/add_subject.php"; ?>
        </div>
       
      </div>
    </div>
</div>