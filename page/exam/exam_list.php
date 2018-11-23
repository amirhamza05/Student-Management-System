
<script src="script/exam/exam.js" type="text/javascript"></script>

<center>
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Exam</button>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead style="">
            <tr>
              <th><center>Exam Name</center></th>
              <th><center>Program Name</center></th>
              <th><center>Subject Name</center></th>             
              <th><center>MCQ Mark</center></th>
              <th><center>Written Mark</center></th>
              <th><center>Total Mark</center></th>
              <th><center>Date</center></th>
              <th><center>Action</center></th>
              
              
            </tr>
          </thead>
          <tbody>

<?php 

foreach ($exam as $key => $value) {
  
  $subject_code=$value['subject_id'];
  $subject_id=$value['subject_id'];
  $exam_name=$value['exam_name'];
  $subject_name=$subject[$subject_id]['name'];
  $program_id=$value['program_id'];
  $program_name=$program[$program_id]['name'];
  $mcq=$value['mcq'];
  $written=$value['written'];
  $total=$value['total'];
  $date=$value['date'];
  $date = date("Y-m-d",strtotime($date));
  $id=$value['id'];
?>
            <tr>
               
              <td><center><?php echo "$exam_name"; ?></center></td>
              <td><center><?php echo "$program_name"; ?></center></td>
              <td><center><?php echo "$subject_name"; ?></center></td>
              <td><center><?php echo "$mcq"; ?></center></td>
              <td><center><?php echo "$written"; ?></center></td>
              <td><center><?php echo "$total"; ?></center></td>
               <td><center><?php echo "$date"; ?></center></td>
                
                <td><div class="btn-toolbar list-toolbar"><center><button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo "$id"; ?>" ><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
    
            </tr>


<!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Exam?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <form action="exam_action.php" method="POST">
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
        <div class="modal-header" style="">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel"><?php echo "$subject_name"; ?></h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
           <!-- start Body -->

<div class="row">

  <div class="col-xs-12 col-sm-12">  
  <form  action="exam_action.php" autocomplete="off" method="POST">
    
<input type="text" value="<?php echo "$id"; ?>"  name="update_id" hidden="">

<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Program</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='update_program_id' id='update_program_id_<?php echo "$id"; ?>' class='cs-select cs-skin-border' onchange="select_program_id(<?php echo "$id"; ?>)"  required="">
  <option value="0">Select Program</option>
  <?php
 foreach ($program as $key => $pro) {
    $pro_id=$pro['id'];
    $pro_name=$pro['name'];
    if($pro_id==$program_id)echo "<option value='$pro_id' selected>$pro_name</option>";
    else echo "<option value='$pro_id'>$pro_name</option>";
 }
  ?>
</select>
</div></div>



<div class='form-group'>
  <label class='control-label' for='inputName'><b>Select Subject</b></label>
  <div class='input-group'>
  <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span> 
<select class='form-control'  name='update_subject_id' id='update_select_subject_<?php echo "$id"; ?>' class='cs-select cs-skin-border' onchange="select_subject(<?php echo "$id"; ?>)"  required="">
    <?php
   foreach ($program[$program_id]['subject'] as $key => $sub) {
    $sub_id=$sub['id'];
    $sub_name=$sub['name'];
   if($sub_id==$subject_id)echo "<option value='$sub_id' selected>$sub_name</option>";
  else echo "<option value='$sub_id'>$sub_name</option>";
  }
     ?>
  </select>
</div></div>

 <?php

$site->form_input("Exam Name","exam_name","exam_name","text","exclamation-sign","$exam_name");
$site->form_input("MCQ Mark","mcq","mcq","number","exclamation-sign","$mcq");
$site->form_input("Written Mark","written","written","number","exclamation-sign","$written");
$site->form_input("Total Mark","total","total","number","exclamation-sign","$total");
$site->form_input("Exam Date","date","date","date","exclamation-sign","$date");

  ?>


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
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ffffff">Close</button>
            <h4 id="myModalLabel">Add Exam</h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
            <?php include "page/exam/add_exam.php"; ?>
        </div>
       
      </div>
    </div>
</div>

<!-- 
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});

</script>

<div class="input-group date">
  <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div>
 -->