
<style type="text/css">

.student_add .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}



tbody> tr.odd td,tr{ 
    background: #ffffff;
    cursor: pointer;
}

tbody tr.odd:hover td,tr:hover { 
    background: #D5D6D7;
}

table{
  border-width: 2px;
  border-color: #2E363F;
  border-style: solid;
}
 
</style>

<center>


<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary" data-title="Add Product" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Add Student</button>
    <a href="export.php"><i class="fa fa-plus"></i>Export</a>
    
</div>
</center>
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr style="background-color: var(--bg-color); color: var(--font-color)">
              <th><center>Student Photo</center></th>
              <th><center>Student Id</center></th>
              <th><center>Student Name</center></th>
            
              <th><center>Student Mobile</center></th>
              
              <th><center>Program Name</center></th>
              <th><center>Batch Name</center></th>
              <th><center>Action</center></th>
              
            </tr>
          </thead>
          <tbody style="background-color: #ffffff">

<?php 

foreach ($student as $key => $value) {
  $name=$value['name'];
  $nick=$value['nick'];
  $id=$value['id'];
  $fater_name=$value['father_name'];
  $mother_name=$value['mother_name'];
  $student_mobile=$value['personal_mobile'];
  $photo=$value['photo'];
  $program_id=$value['program'];
  $program_name=$program[$program_id]['name'];
  $batch_id=$value['batch'];
  $batch_name=$batch[$batch_id]['name'];

  
?>
            <tr style="" >
               <style type="text/css">
                 .img{
                  height: 50px;
                  width: 50px;
                 }
               </style>
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "<img src='$photo' class='img'>"; ?></center></td>
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "$id"; ?></center></td>
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "$name ($nick)"; ?></center></td>
              

              
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "$student_mobile"; ?></center></td>
             
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "$program_name"; ?></center></td>
              <td onclick="profile(<?php echo "$id"; ?>)"><center><?php echo "$batch_name"; ?></center></td>

                
                <td><div class="btn-toolbar list-toolbar"><center>

          <button class="btn btn-primary btn-xs" onclick="edit_student(<?php echo "$id"; ?>)" style="margin-right: 4px;" title="Edit" data-title="Add Product" data-toggle="modal" data-target="#student_edit_<?php echo "$id"; ?>" ><span class="glyphicon glyphicon-pencil"></span></button>

          <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo"$id"; ?>" ><span class="glyphicon glyphicon-trash"></span></button>

        </center></div></td>
    
            </tr>


<!-- starting edit model -->
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

<!-- Start Delete Model -->
<div class="modal small fade" id="delete<?php echo"$id"; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Student?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          <form action="student_action.php" method="POST">
            <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
             <input type="text" name="name" value="<?php echo "$name"; ?>" hidden="">
              <input type="text" name="code" value="<?php echo "$id"; ?>" hidden="">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" type="submit" name="delete">Delete</button>
            </form>
        </div>
      </div>
    </div>
</div>
<!-- End Delete Model -->

<!-- Start Edit Model-->


            <!-- end edit model -->

<?php } ?>
          </tbody>
        </table>

<!-- start Add model -->

  <div class="modal fade student_add" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
            <?php include "page/student/add_student.php"; ?>
        </div>
       
      </div>
    </div>
</div>

 <div class="modal fade student_add" id="student_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        
        <div style="padding: 0px;" class="modal-body" style="background-color: #ecf0f1">
            <?php 
       $student_ob->student_edit_form(10001);
          ?>
        </div>
      </div>
    </div>
</div>

<script>
  

  function profile(id){
    st="student_profile.php?get_id=";
    url=st+id;
    var win = window.open(url, '_blank');
    win.focus();
  }
</script>
