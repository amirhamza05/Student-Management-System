<?php
include 'layout/header_script.php';

if(isset($_POST['student_id'])){
  $id=$_POST['student_id'];
  echo "<option value=''>--Select Subject--</option>";
  foreach ($student as $key => $value) {
  	$id1=$value['id'];
  	$program_id=$value['program'];
  	if($id1==$id){
       foreach ($program[$program_id]['subject'] as $key => $pro) {
       	      $sub_id=$pro['id'];
              $sub_name=$subject[$sub_id]['name'];
              echo "<option value='$sub_id'>$sub_name</option>";
       }
  	}
  }
}
 
else if (isset($_POST['id_cheak'])) {

  $id=$_POST['id_cheak'];
  $flag=0;
  foreach ($student as $key => $value) {
  	$id1=$value['id'];
  	if($id1==$id){
      $flag=1;
  	  break;
  	}
  }
  if($flag==0)echo "ID is not found";
}

else if(isset($_POST['save_result'])){

  $student_id=$_POST['student_id_save'];
  $exam_id=$_POST['exam_id_save'];
  $program_id=$_POST['program_id_save'];
  $mcq=$_POST['mcq'];
  $written=$_POST['written'];
  $date=date("Y-m-d");
  $add_by=$login_user['id'];

  $s=sizeof($student_id);
  for ($i=0; $i <$s ; $i++) {
     $info['student_id']=$student_id[$i]; 
     $info['mcq']=$mcq[$i]; 
     $info['written']=$written[$i];
     $info['total']=$mcq[$i]+$written[$i];
     $info['exam_id']=$exam_id;
     $info['date']=$date;
     $info['add_by']=$add_by; 
     $per=$result->permission_for_save($info['student_id'],$exam_id,$program_id);

     if($per==0)continue;
     $db->sql_action("result","insert",$info,$msg="no");
  }

  echo "<script>alert('Successfully Insert Result!');</script><script>document.location='add_result.php'</script>";

}

else if(isset($_POST['subject_id_select'])){
  $sub_id=$_POST['subject_id_select'];
  $student_id=$_POST['student_id_select'];
  $program_id=$student[$student_id]['program'];  
  echo "<option value='0'>--Select Exam--</option>";
    foreach ($exam as $key => $value) {
        $id=$value['id'];
        $name=$value['exam_name'];
        $pro=$value['program_id'];
        $sub=$value['subject_id'];
       if($pro==$program_id && $sub==$sub_id){
          echo "<option value='$id'>$name</option>";
        }
    }
}

else if(isset($_POST['result_exam'])){

$exam_id=$_POST['result_exam'];
$student_id=$_POST['student_id_result'];
$program_id=$student[$student_id]['program'];
$program_name=$program[$program_id]['name'];
$student_name=$student[$student_id]['name'];
$info=$result->student_result($student_id,$exam_id);
if($info!=-1){

  $exam_name=$exam[$exam_id]['exam_name'];
  $exam_mcq=$exam[$exam_id]['mcq'];
  $exam_written=$exam[$exam_id]['written'];

  $full_marks=$exam[$exam_id]['total'];

  $mcq=$info['mcq'];
  $written=$info['written'];
if($exam_mcq=="N/A")$mcq="N/A";
if($exam_written=="N/A")$written="N/A";
  $total=$info['total'];
  $highest=$result->best_mark($exam_id);
  $batch_merit=$info['batch_merit'];
  $center_merit=$info['center_merit'];


  ?>

<div class="header_box text-center" style="margin-top: 25px;">
            Result Details
     </div>

 <div class="box_body">
  <center>
    <div style="font-weight: bold;font-size: 16px;">
    <?php echo "$program_name"; ?><br/>
        <?php echo "$student_id"; ?><br/>
        <?php echo "$student_name"; ?><br/>
        Individual Performance<br/>
      </div>

<style type="text/css">


</style>

<style type="text/css">
  table{
  margin-top: 15px;
  }
  th{
    background-color: #E0D0D5;
    padding: 5px;
    border-width: 1px;
    border-style: solid;
    padding: 10px;
  }
 td{
    padding: 12px;
    border-width: 1px;
    border-style: solid;
  }
</style>
<table style="width: 100%;">
  <center></center>
  <tr>
    <th><center>Exam Name</center></th>
    <th><center>Full Marks</center></th>
    <th><center>MCQ Marks</center></th>
    <th><center>Written Marks</center></th>
    <th><center>Total Marks</center></th>
    <th><center>Highest Marks</center></th>
    <th><center>Branch Merit</center></th>
    <th><center>Central Merit</center></th>
  </tr>
  <tr>
    <td><center><?php echo "$exam_name"; ?></center></td>
    <td><center><?php echo "$full_marks"; ?></center></td>
    <td><center><?php echo "$mcq"; ?></center></td>
    <td><center><?php echo "$written"; ?></center></td>
    <td><center><?php echo "$total"; ?></center></td>
    <td><center><?php echo "$highest"; ?></center></td>
    <td><center><?php echo "$batch_merit"; ?></center></td>
    <td><center><?php echo "$center_merit"; ?></center></td>
  </tr>
</table>
  </center>
 </div>
  <?php
}
else {
  ?>
  <div class="alert alert-danger" style="color: #000000">
  <strong>Soory!</strong> Result Is Not Found.
</div>

  <?php
}
}

else if(isset($_POST['show_result'])){

}

?>