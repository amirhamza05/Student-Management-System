



<?php

$id=$_GET['get_id'];
foreach ($student as $key => $info) {
  $sid=$info['id'];
 $photo=$info['photo'];
 $name=$info['name'];
 $nick=$info['nick'];


  if($sid==$id){


 ?>

<div class="row">
  <div class="col-md-3 about_profile">
    <div class="profile_header">Profile</div>
    
  <div class="about_profile_body" style="text-align: center;">
    <img src="<?php echo "$photo" ?>" class="img_side">
    <div class="info_side">
      <div style="margin-top: 10px;"></div>
      <table width="100%">
        <tr>
          <td class="td_profile1">Full Name:</td>
          <td class="td_profile2"><?php echo "$name" ?><br/></td>
        </tr>
         <tr>
          <td class="td_profile1">Nick:</td>
          <td class="td_profile2"><?php echo "$nick" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID:</td>
          <td class="td_profile2"><?php echo "$id" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID Code:</td>
          <td class="td_profile2">
            <img src="barcode.php?text=<?php echo "$id" ?>" style="width: 100%" />
          </td>
        </tr>
      </table>
      
    </div>

  </div>
</div>

  <div class="col-md-8 panel_profile">
    
    <div style="position: static;">
<section class="buttons">
<div class="containerr">
<div class="row">
<div class="col-sm-12">
<div class="text-center" style="">

<div onclick="personal_info()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Info</p>
</div>

<div onclick="program()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Program</p>
</div>

<div onclick="payment()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Payment</p>
</div>

<div onclick="result()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Result</p>
</div>

<div onclick="message()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Message</p>
</div>

</div>

</div>
</div>
</div>
</section>
</div>

    <div class="profile_header" id="profile_option">
    </div>
    <div class="panel_profile_body" id="panel_profile_body"></div>
  </div>
  
</div>

<input type="text" value="<?php echo "$id" ?>" id="student_id" hidden="">
 <?php include "profile_lib.php"; ?>
<script type="text/javascript">
  set_profile_data(<?php echo $id; ?>);
</script>

<?php

}

}

 ?>





<div class="modal fade student_add" id="student_edit_<?php echo "$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
            <?php 
       $student_ob->student_edit_form($id);
          ?>
        </div>
      </div>
    </div>
</div>

<div class="modal fade program_add" id="add_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1;" >
           <div style="padding: 30px;" id="add_program_body">
            
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade program_add" id="edit_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1;" >
           <div style="padding: 30px;" id="">
            <div id="msg"></div>
            <div id="edit_program_body"></div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Start Delete Model -->
<div class="modal small fade" id="delete_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Program?<br>This cannot be undone.</p>
            <input type="number" name="" id="delete_id" hidden="">
        </div>
        <div class="modal-footer">
          
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" onclick="delete_program()" name="delete">Delete</button>
        </div>
      </div>
    </div>
</div>
<!-- End Delete Model -->

<div class="modal fade student_add" id="view_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
          <button type="button" style="padding: 5px 15px 10px 10px; color: #000000" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <div id="view_program_body" style="padding: 20px;">
            
          </div>
        </div>
      </div>
    </div>
</div>


<style type="text/css">
 

</style>