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
      
      <button style="" title="view" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-eye-open" onclick="view_program(<?php echo "$id"; ?>)"></span></button>
      <button style="" title="Edit" onclick="edit_program_area(<?php echo "$id"; ?>)"  class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
      <button class="btn btn-danger btn-xs" title="Delete"  onclick="delete_program_form(<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span></button>
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

if(isset($_POST['edit_program_area'])){
$admit_id=$_POST['edit_program_area'];
$info=$student_ob->get_admit_program_info($admit_id);
$program_id=$info['program_id'];
$batch_id=$info['batch_id'];
$program_name=$info['program_name'];

?>

<b class="txt">Select Batch</b>
  <select class="select" id="edit_batch_id">
     <option value="-1">Select <?php echo "$program_name"; ?> Batch</option>
      <?php $program_ob->select_program_batch($program_id,$batch_id); ?>
  </select>
   <center> 
    <button class="btn btn-primary btn-xs" style="margin-right: 4px; padding: 10px" title="Update Program" onclick="update_program(<?php echo "$admit_id"; ?>)">Update Program</button>

<?php
}


if(isset($_POST['update_program'])){
  $info=$_POST['update_program'];
  $data['id']=$info['admit_id'];
  $data['batch_id']=$info['batch_id'];
  $db->sql_action("admit_program","update",$data,"no");
  echo "Sucessfully Update Batch";
}

if(isset($_POST['delete_program'])){
  $id=$_POST['delete_program'];
  $data['id']=$id;
  $db->sql_action("admit_program","delete",$data,"no");
  echo "Program Sucessfully Delete";
}


if(isset($_POST['delete_program_form'])){
  $admit_id=$_POST['delete_program_form'];
  
  ?>

    <center>
    <h3>Are You Want To Delete This Payment</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="delete_program(<?php echo "$admit_id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>

  </center>

  <?php
} 

if(isset($_POST['view_program'])){
  $admit_id=$_POST['view_program'];
  ?>

  <div class="row">
    <div class="col-md-9">
      <div class="view_program_body" id="view_program_body">
        
      </div>
       
    </div>
    <div class="col-md-3">
      <center>
      <button class="view_program_btn" onclick="program_view_info(<?php echo $admit_id; ?>)">Admission Info</button>
      <button class="view_program_btn" onclick="send_admission_sms_area(<?php echo $admit_id; ?>)">Send Admission SMS</button>
      <button class="view_program_btn" onclick="program_id_card(<?php echo $admit_id; ?>)">ID Card</button>
      <button class="view_program_btn" onclick="admission_recept(<?php echo $admit_id; ?>)">Admission Recept</button>
      </center>
    </div>
  </div>
<?php

}

if(isset($_POST['program_id_card'])){
  $id=$_POST['program_id_card'];
  $info=$student_ob->get_admit_program_info($id);
  $data=array();
  array_push($data, $info);
  
 ?>
 <div id="print_area">
  <?php  $id_card->get_id_card($data); ?>
</div>
<button onclick="print('print_area')">Print</button>
 <?php
}

if(isset($_POST['program_view_info'])){
  $id=$_POST['program_view_info'];
  $info=$student_ob->get_admit_program_info($id);
  $student_id=$info['student_id'];
  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];
  $student_name=$student[$student_id]['name'];
  $program_name=$program[$program_id]['name'];
  $batch_name=$batch[$batch_id]['name'];
  $batch_day=$batch[$batch_id]['day_string'];
  $batch_time=$batch[$batch_id]['start']." - ".$batch[$batch_id]['end'];
  $program_start=$program[$program_id]['start'];

  ?>
   <table width="100%">
     <tr>
       <td class="td_view1">Student Name:</td>
       <td class="td_view2"><?php echo $student_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Student ID:</td>
       <td class="td_view2"><?php echo $student_id; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program Name:</td>
       <td class="td_view2"><?php echo $program_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Name:</td>
       <td class="td_view2"><?php echo $batch_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program Start:</td>
       <td class="td_view2"><?php echo $program_start; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program End:</td>
       <td class="td_view2"><?php echo $program[$program_id]['end']; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Day:</td>
       <td class="td_view2"><?php echo $batch_day; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Time:</td>
       <td class="td_view2"><?php echo $batch_time; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Admission Date:</td>
       <td class="td_view2"><?php echo $info['admit_date']; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Admit By:</td>
       <td class="td_view2"><?php echo $info['admit_by'] ?></td>
     </tr>
   </table>


  <?php
}

if(isset($_POST['admission_recept'])){
   $id=$_POST['admission_recept'];
  $info=$student_ob->get_admit_program_info($id);
  $student_id=$info['student_id'];
  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];
  $student_name=$student[$student_id]['name'];
  $program_name=$program[$program_id]['name'];
  $batch_name=$batch[$batch_id]['name'];
  $batch_day=$batch[$batch_id]['day_string'];
  $batch_time=$batch[$batch_id]['start']." - ".$batch[$batch_id]['end'];
  $program_start=$program[$program_id]['start'];
  ?>
  
<div id="print_area">
  <?php $site->header_info_area(); ?>
  <table width="100%">
     <tr>
       <td class="td_view1">Student Name:</td>
       <td class="td_view2"><?php echo $student_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Student ID:</td>
       <td class="td_view2"><?php echo $student_id; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program Name:</td>
       <td class="td_view2"><?php echo $program_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Name:</td>
       <td class="td_view2"><?php echo $batch_name; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program Start:</td>
       <td class="td_view2"><?php echo $program_start; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Program End:</td>
       <td class="td_view2"><?php echo $program[$program_id]['end']; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Day:</td>
       <td class="td_view2"><?php echo $batch_day; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Batch Time:</td>
       <td class="td_view2"><?php echo $batch_time; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Admission Date:</td>
       <td class="td_view2"><?php echo $info['admit_date']; ?></td>
     </tr>
     <tr>
       <td class="td_view1">Admit By:</td>
       <td class="td_view2"><?php echo $info['admit_by'] ?></td>
     </tr>
   </table>

</div>
<button onclick="print('print_area')">Print</button>
<?php
} 

if(isset($_POST['send_admission_sms_area'])){
  $admit_id=$_POST['send_admission_sms_area'];
  ?>
  <center>
  <div style="width: 250px" id="message_body">
    <?php $sms->get_sms_recever_option(); ?>
      <button class='btn btn-default' style="margin-top: 5px;" onclick='send_admission_sms(<?php echo "$admit_id"; ?>)'>Send SMS</button>
  </div>
  <div id="message_sending"></div>
  </center>
<?php
}

if(isset($_POST['send_admission_sms'])){
 $info=$_POST['send_admission_sms'];
 $admit_id=$info['admit_id'];
 $receiver=$info['receiver'];
 $info=$student_ob->get_admit_program_info($admit_id);
 $student_id=$info['student_id'];
  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];
  $student_name=$student[$student_id]['nick'];
  $program_name=$program[$program_id]['name'];
  $batch_name=$batch[$batch_id]['name'];
  $batch_day=$batch[$batch_id]['day_sort_string'];
  $batch_time=$batch[$batch_id]['start']." - ".$batch[$batch_id]['end'];
  $site_msg=$db->msg;
  $message="Dear $student_name,\nCongratulation. You got admitted to our '$program_name' Program.\n
Your ID: $student_id
Batch: $batch_name
Time: $batch_day ($batch_time)

$site_msg
";

  $info=$sms->get_student_mobile_number($student_id,$receiver);
  $list=array();
  foreach ($info as $key => $value) {
    $res=$sms->make_sms_array($value,$message);
    array_push($list, $res);
  }
  $sms->send_sms($list);
}
?>
 <style type="text/css">
 


 .td_view1,.td_view2{
  padding: 10px;
  border: 1px solid #C6C9D1;
 }
 .td_view1{
  background-color: #f5f5f5;
  font-weight: bold;
  text-align: right;
  width: 220px;
 }

 .view_program_btn{
   background-color: var(--bg-color);
   color: var(--font-color);
   padding: 15px;
   width: 170px;
   border-width: 0px;
   margin-top: 5px;
   border-radius: 5px;
 }
  .view_program_body{
    background-color: #ffffff;
    border: 1px solid #DDDDDD;
    padding: 10px;
  }

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