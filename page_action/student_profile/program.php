<?php

if(isset($_POST['get_program_list'])){
  $id=$_POST['get_program_list'];
?>
<div style="text-align: right;margin-bottom: 10px;">
<button class="btn btn-primary btn-xs" onclick="add_program()" style="margin-right: 4px; padding: 10px" title="Add Program" data-title="Add Program" ><span class="glyphicon glyphicon-plus"></span> Add Program</button>

</div>
<table class="display" style="width: 100%">
  <thead>
  <tr>
    <td class="program_td">Admit ID</td>
    <td class="program_td">Program Name</td>
    <td class="program_td">Batch Name</td>
    <td class="program_td">Admission Date</td>
    <td class="program_td">Admit By</td>
    <td class="program_td">Action</td>
  </tr>
  </thead>
  <tbody>
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
  $admit_date=$value['admit_date'];
  $admit_by=$value['admit_by'];
  $uname=$user[$admit_by]['uname'];

  ?>  
  <tr>
    <td class="program_td_body"><?php echo "$id"; ?></td>
    <td class="program_td_body"><?php echo "$program_name"; ?></td>
    <td class="program_td_body"><?php echo "$batch_name"; ?></td>
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
 </tbody>
</table>

<?php

 }

 if(isset($_POST['add_program'])){
  $student_id=$_POST['add_program'];
  
  ?>
<b class="txt">Select Program</b>
    <select class="select" id="select_program" onchange="add_batch()">
      <option value="-1"> Select Program </option>
      <?php $student_ob->select_program_by_student($student_id); ?>
    </select>
 <div id="add_batch_field"></div>  

  <?php
 }

 if(isset($_POST['add_batch_field'])){
   $program_id=$_POST['add_batch_field'];
?>
<b class="txt">Select Batch</b>
<select id="add_batch" class="select">
   <option value="-1">Select Batch</option>
   <?php $program_ob->select_batch_option($program_id); ?>
</select>
<center>
<button class="btn btn-primary btn-xs" onclick="save_add_program()" style="margin-right: 4px; padding: 10px" title="Add Program" data-title="Add Program" ><span class="glyphicon glyphicon-plus"></span> Add Program</button>
</center>
<div id="res"></div>

<?php
 }

 if(isset($_POST['save_add_program'])){
  $data=$_POST['save_add_program'];
  $program_id=$data['program_id'];
  $student_id=$data['student_id'];
  $batch_id=$data['batch_id'];
  

  $info['program_id']=$program_id;
  $info['student_id']=$student_id;
  $info['batch_id']=$batch_id;

  $info['admit_by']=$user_id;
  $info['admit_date']=$db->date();

  $sql="select COUNT(*) as total_row from admit_program where student_id=$student_id and program_id=$program_id";

  $res=$db->get_sql_array($sql);
  $total_row=$res[0]['total_row'];
  
  if($total_row==0){
    $db->sql_action("admit_program","insert",$info,"no");
    echo "Sucessfully Add New Program";
  }
  else{
    echo "Program Aready Added";
  }
  

 }

?>
 <style type="text/css">
   .program_td{
    padding: 10px;
    border-style: solid;
    border-width: 1px;
    background-color: var(--bg-color);
    color: var(--font-color);
    font-weight: bold;
    font-family: "Big Caslon";
    border-color: #C6C9D1;
    text-align: center;
  }
  .program_td_body{
    text-align: center;
    padding: 5px;
    border-style: solid;
    border-width: 1px;
    background-color: #ffffff;
    border-color: #C6C9D1;
  }
   .select{
    position: relative;
    display: block;
    height: 3em;
    line-height: 3;
    width: 100%;
    overflow: hidden;
    border-radius: .25em;
    display: inline-block;
    display: -webkit-inline-box;
    border: 1px solid #667780;
    margin: 1em 0;
  }
 </style>