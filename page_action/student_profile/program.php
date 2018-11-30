<?php

if(isset($_POST['get_program_list'])){
  echo "hello";
}

function program($student,$batch,$program,$id,$user){
  ?>
<div style="text-align: right;margin-bottom: 10px;">
<button class="btn btn-primary btn-xs" onclick="add_program()" style="margin-right: 4px; padding: 10px" title="Edit" data-title="Add Product" data-toggle="modal" data-target="#add_program"><span class="glyphicon glyphicon-pencil"></span> Add Program</button>

</div>
<table style="width: 100%">
  <tr>
    <td class="program_td">Admit ID</td>
    <td class="program_td">Program Name</td>
    <td class="program_td">Batch Name</td>
    
    <td class="program_td">Fee</td>
    <td class="program_td">Admission Date</td>
    <td class="program_td">Admit By</td>
    <td class="program_td">Action</td>
  </tr>
<?php

 foreach ($student[$id]['program_list'] as $key => $value) {

  $id=$value['id'];
  $program_id=$value['program_id'];
  if(!isset($program[$program_id]))continue;
  $program_name=$program[$program_id]['name'];
  $batch_id=$value['batch_id'];
  $batch_name=$batch[$batch_id]['name'];
  $day=$batch[$batch_id]['day_string'];
  $start=$batch[$batch_id]['start'];
  $end=$batch[$batch_id]['end'];
  $fee=$value['fee']." TK";
  $admit_date=$value['admit_date'];
  $admit_by=$value['admit_by'];
  $uname=$user[$admit_by]['uname'];

  ?>  
  <tr>
    <td class="program_td_body"><?php echo "$id"; ?></td>
    <td class="program_td_body"><?php echo "$program_name"; ?></td>
    <td class="program_td_body"><?php echo "$batch_name"; ?></td>
    
    <td class="program_td_body"><?php echo "$fee"; ?></td>
    <td class="program_td_body"><?php echo "$admit_date"; ?></td>
    <td class="program_td_body"><?php echo "$uname"; ?></td>
    <td class="program_td_body" style="width: 100px;">
      <div class="btn-toolbar list-toolbar"><center>
      
      <button style="" title="view" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open" onclick="open_dilog_view_program(<?php echo "$id"; ?>)"></span></button>
      <button style="" title="Edit" onclick="edit_program(<?php echo "$id"; ?>)"  class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
      <button class="btn btn-danger btn-xs" title="Delete"  onclick="open_dilog_delete(<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span></button>
    </center></div>
    </td>
  </tr>
 <?php } ?>
</table>

<?php

 }

 ?>