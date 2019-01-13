<?php

if(isset($_POST['program_select'])){
//subject list return
  $program_id=$_POST['program_select'];
  echo "<option value=''>--Select Subject--</option>";
  $program_ob->option_subject($program_id);

}
else if(isset($_POST['subject_select'])){
//exam list return
  $subject_id=$_POST['subject_select'];
  $program_id=$_POST['program_select_sub'];
   echo "<option value=''>--Select Exam--</option>";
   foreach ($exam as $key => $value) {
        $id=$value['id'];
        $name=$value['exam_name'];
        $pro=$value['program_id'];
        $sub=$value['subject_id'];
       if($pro==$program_id && $sub==$subject_id){
          echo "<option value='$id'>$name</option>";
        }
    }

}

else if(isset($_GET['save_student_result'])){
  $student_id=$_GET['save_student_result'];
  $total_student=$_GET['count_student'];
  $mcq_arry=$_GET['save_mcq'];
  $written_arry=$_GET['save_written'];
  $program_id=$_GET['program_id_save'];
  $exam_id=$_GET['exam_id_save'];
  $date=date("Y-m-d");
  $add_by=$login_user['id'];

for ($i=1; $i<=$total_student ; $i++) {
  $mcq=$mcq_arry[$i];
  $written=$written_arry[$i];
  if($mcq=="")$mcq=0;
  if($written=="")$written=0;
  $total=$mcq+$written;

  $info['student_id']=$student_id[$i]; 
  $info['mcq']=$mcq; 
  $info['written']=$written;
  $info['total']=$total;
  $info['exam_id']=$exam_id;
  $info['date']=$date;
  $info['add_by']=$add_by;  
  $per=$result->permission_for_save($info['student_id'],$exam_id,$program_id);
  
  if($per==0)continue;
  $db->sql_action("result","insert",$info,$msg="no");

}
 
}

else if(isset($_POST['add_result'])){

$exam_id=$_POST['add_result'];
$subject_id=$_POST['subject_id_add'];
$program_id=$_POST['program_id_add'];
$exam_name=$exam[$exam_id]['exam_name'];
$subject_name=$subject[$subject_id]['name'];
$program_name=$program[$program_id]['name'];

$mcq=$exam[$exam_id]['mcq'];
$written=$exam[$exam_id]['written'];
$total=$exam[$exam_id]['total'];
$date=$exam[$exam_id]['date'];
$flag=0;
if($mcq!="N/A" && $written!="N/A")$flag=1;
  ?>

<div class="header_box text-center" style="margin-top: 25px;">
            Exam Details
     </div>

 <div class="box_body">
  <center>
    <div style="font-weight: bold;font-size: 16px;">
    <?php echo "$program_name"; ?><br/>
        <?php echo "$subject_name"; ?><br/>
        <?php echo "$exam_name"; ?><br/>
        
      </div>


<table style="width: 100%">
  <center></center>
  <tr>
    <th><center>MCQ Marks</center></th>
    <th><center>Written Marks</center></th>
    <th><center>Total Marks</center></th>
    <th><center>Exam Date</center></th>
  </tr>
  <tr>
    <td><center> <?php echo "$mcq"; ?></center></td>
    <td><center> <?php echo "$written"; ?></center></td>
    <td><center> <?php echo "$total"; ?></center></td>
    <td><center> <?php echo "$date"; ?></center></td>
    
  </tr>
</table>

  </center>
 </div>

<div  id="result_add_body">
<div class="header_box text-center" style="margin-top: 25px;">
            Result Details
     </div>
<div class="box_body" style="overflow: auto;">
 
  <input type="text" name="exam_id_save" value="<?php echo "$exam_id"; ?>" hidden="">

  <input type="text" name="program_id_save" value="<?php echo "$program_id"; ?>" hidden="">

<div class="form-group" style="">
  <div class="row">
   <center><b><div class="col-sm-2 col-md-1 "></div><div class="col-sm-3 nopadding"><b>Student ID</b></div>
   <b><div class="col-sm-3 nopadding"><b>MCQ Mark</b></div>
    <div class="col-sm-3 nopadding">Written Mark </div><div class="col-sm-2 nopadding"></div></b></center>
  </div>
 <div class="form-group removeclass">
<div class="row" style="">
  <div class="col-sm-2 col-md-1 "></div>
    <div class="col-sm-3 col-md-3 nopadding">
      <div class="form-group"> 
      <input type="number" class="form-control" id="student_id_1" name="student_id_save[]" value="" required="" placeholder="Student ID">
      </div>
    </div>

    <div class="col-sm-3 col-md-3 nopadding">
      <div class="form-group"> 
        <input type="number"  step="0.01" class="form-control" id="mcq_save_1" name="mcq[]" value="0" <?php if($mcq=="N/A")echo "readonly"; ?> placeholder="MCQ Mark">
      </div>
    </div>

    <div class="col-sm-3 col-md-3 nopadding">
      <div class="form-group"> 
        <input type="number"  step="0.01" class="form-control" id="written_save_1" name="written[]" value="0" <?php if($written=="N/A")echo "readonly"; ?> placeholder="Written Mark">
      </div>
    </div>

    <div class="col-sm-2 col-md-2 nopadding">
      <div class="input-group-btn"> 
        <button class="btn btn-success" type="button"
<?php if($flag==1)echo "onclick='add_btn()'";
      else if($written=="N/A")echo "onclick='add_btn_hwritten()'";
      else if($mcq=="N/A")echo "onclick='add_btn_hmcq()'";

 ?>

       >

          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>

  </div>

<div id="result">
</div>
</div>

</div>
<center>
  <div id="responce_1"></div>
<button class="btn btn-lg btn-primary btn-block" style="width: 50%;" name="save_result" onclick="save_student_result()" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
</center>

 </div>
</div>

  <?php
}

else if(isset($_POST['show_result'])){

  $exam_id=$_POST['show_result'];
$subject_id=$_POST['subject_id_show'];
$program_id=$_POST['program_id_show'];
$exam_name=$exam[$exam_id]['exam_name'];
$subject_name=$subject[$subject_id]['name'];
$program_name=$program[$program_id]['name'];

$mcq_exam=$exam[$exam_id]['mcq'];
$written_exam=$exam[$exam_id]['written'];
$total=$exam[$exam_id]['total'];
$date=$exam[$exam_id]['date'];
$flag=0;
if($mcq_exam!="N/A" && $written_exam!="N/A")$flag=1;
  ?>

<div class="header_box text-center" style="margin-top: 25px;">
            Exam Details
     </div>

 <div class="box_body">
  <center>
    <div style="font-weight: bold;font-size: 16px;">
    <?php echo "$program_name"; ?><br/>
        <?php echo "$subject_name"; ?><br/>
        <?php echo "$exam_name"; ?><br/>
        
      </div>


<table style="width: 100%">
  <center></center>
  <tr>
    <th><center>MCQ Marks</center></th>
    <th><center>Written Marks</center></th>
    <th><center>Total Marks</center></th>
    <th><center>Exam Date</center></th>
  </tr>
  <tr>
    <td><center> <?php echo "$mcq_exam"; ?></center></td>
    <td><center> <?php echo "$written_exam"; ?></center></td>
    <td><center> <?php echo "$total"; ?></center></td>
    <td><center> <?php echo "$date"; ?></center></td>
    
  </tr>
</table>

  </center>
 </div>


<div id="">

<div class="header_box text-center" style="margin-top: 25px;">
            Exam Ranklist
     </div>

 <div class="box_body" id="ranklist_body">

<!-- start datatable -->
 
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
            <tr>
              <th>Rank</th>
              <th><center>Student Photo</center></th>
              <th><center>Student Id</center></th>
              <th><center>Student Name</center></th>
              <th><center>MCQ Mark</center></th>
              <th><center>Written Mark</center></th>
              <th><center>Total Mark</center></th>
              <th><center>Batch Rank</center></th>
              <th><center>Action</center></th>
            </tr>
         
          <tbody>

<?php 

$result_info=$result->get_result_info();
foreach ($result_info[$exam_id] as $key => $value) {
  $subject_name=$value['id'];
  $subject_code=$value['total'];
  
  $student_id=$value['student_id'];
  $center_merit=$value['center_merit'];
  $student_name=$student[$student_id]['name'];
  $mcq=$value['mcq'];
  $written=$value['written'];
  $total=$value['total'];
  $batch_merit=$value['batch_merit'];
  $photo=$student[$student_id]['photo'];

  if($mcq_exam=="N/A")$mcq="N/A";
  if($written_exam=="N/A")$written="N/A";

  $id=$value['id'];
?>
            <tr>

              <td><center><?php echo "$center_merit"; ?></center></td>
              <td><center><img src="<?php echo "$photo"; ?>" style="height: 60px; width: 50px;" class="img"></center></td>
              <td><center><?php echo "$student_id"; ?></center></td>
              <td><center><?php echo "$student_name"; ?></center></td>
              
              <td><center><?php echo "$mcq"; ?></center></td>
              <td><center><?php echo "$written"; ?></center></td>
              <td><center><?php echo "$total"; ?></center></td>
              <td><center><?php echo "$batch_merit"; ?></center></td>
                
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
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the Subject?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
          
          
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" onclick="delete_result(<?php echo "$id"; ?>)" type="submit" name="delete">Delete</button>
           
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
            <h4 id="myModalLabel"><?php echo "$student_id"; ?></h4>
        </div>
        <div class="modal-body" style="background-color: #ecf0f1">
           <!-- start Body -->

  <div class="row">
      <div class="col-xs-12 col-sm-12">  
          
      <input type="text" name="id" value="<?php echo "$id"; ?>" hidden="">
  <div class="form-group">
    <label class="control-label" for="inputName"><b>MCQ Mark</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="update_mcq_<?php echo "$id"; ?>" value="<?php echo "$mcq"; ?>" placeholder="N/A" <?php if($mcq=="N/A")echo "readonly"; ?>  type="number" step="0.01" name="name"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>

  <div class="form-group">
    <label class="control-label" for="inputName"><b>Written Mark</b></label>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-exclamation-sign"></i></span>     
        <input class="form-control" data-error="Please enter name field." id="update_written_<?php echo "$id"; ?>" value="<?php echo "$written"; ?>" placeholder="N/A" <?php if($written=="N/A")echo "readonly"; ?>  type="number" step="0.01" name="code"  required="" />
    </div>  
    <div id="err_product_date" class="error"></div>
  </div>
          <button class="btn btn-lg btn-primary btn-block" onclick="update_result(<?php echo "$id"; ?>)" name="update" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Update</button>
        
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


<!-- end datatable -->
 </div>
</div>

 <?php
}

else if(isset($_POST['update_mark'])){

  $id=$_POST['update_mark'];
  $mcq=$_POST['update_mcq'];
  if($mcq=="")$mcq=0;
  $written=$_POST['update_written'];
  if($written=="")$written=0;
  $total=$mcq+$written;
  $info['id']=$id;
  $info['mcq']=$mcq;
  $info['written']=$written;
  $info['total']=$total;
  $db->sql_action("result","update",$info,"no");

}

else if(isset($_POST['delete_mark'])){
   $id=$_POST['delete_mark'];
   $info['id']=$id;
   $db->sql_action("result","delete",$info,"no");
}


else if(isset($_POST['send_sms_exam'])){
  $exam_id=$_POST['send_sms_exam'];
  $subject_id=$_POST['send_sms_subject'];
  $program_id=$_POST['send_sms_program'];

  $exam_name=$exam[$exam_id]['exam_name'];
$subject_name=$subject[$subject_id]['name'];
$program_name=$program[$program_id]['name'];

$mcq=$exam[$exam_id]['mcq'];
$written=$exam[$exam_id]['written'];
$total=$exam[$exam_id]['total'];
$date=$exam[$exam_id]['date'];
$flag=0;



if($mcq!="N/A" && $written!="N/A")$flag=1;
  ?>

<div class="header_box text-center" style="margin-top: 25px;">
            Exam Details
     </div>

 <div class="box_body">
  <center>
    <div style="font-weight: bold;font-size: 16px;">
        <?php echo "$program_name"; ?><br/>
        <?php echo "$subject_name"; ?><br/>
        <?php echo "$exam_name"; ?><br/>
        
      </div>


<table style="width: 100%">
  <center></center>
  <tr>
    <th><center>MCQ Marks</center></th>
    <th><center>Written Marks</center></th>
    <th><center>Total Marks</center></th>
    <th><center>Exam Date</center></th>
  </tr>
  <tr>
    <td><center> <?php echo "$mcq"; ?></center></td>
    <td><center> <?php echo "$written"; ?></center></td>
    <td><center> <?php echo "$total"; ?></center></td>
    <td><center> <?php echo "$date"; ?></center></td>
    
  </tr>
</table>

  </center>
 </div>


<div class="header_box text-center" style="margin-top: 25px;">
          Sending Exam SMS
     </div>

 <div class="box_body" id="sms_body">
  <center>

<div class="dropdown">
  
            <select class="dropdown-select-version select" name="options" id="receive_by" onchange ="">
                <option value="0"> --Select Recever-- </option>
                <option value="a"> ALL </option>
                <option value="s"> Student </option>
                <option value="g"> Guardians </option>

            </select>

             <button id="btnn"  onclick="send_sms_sending()" class="button_result" style="" title="Send SMS" alt="Download"><span style="margin-right: 6px;" class="glyphicon glyphicon-envelope"></span>Send SMS</button>
        </div>

  <div id="message_detail">
    
  </div>


  </center>
</div>

 <?php
}

else if(isset($_POST['send_sms_sending'])){
  $exam_id=$_POST['send_sms_sending'];
  $receive_by=$_POST['send_sms_sending_receive'];
  $info=$result->get_avilable_sms_user($exam_id);
  $exam_name=$exam[$exam_id]['exam_name'];
  $exam_total=$exam[$exam_id]['total'];
  //$site->myprint_r($info);
  $total_student=0;
  $total_number=0;
  foreach ($info as $key => $value) {
     $id=$value['id'];
     $total=$value['total'];
     $student_id=$value['student_id'];
     $msg=$result->result_sms($value);
     
     $up_info['id']=$id;
     $up_info['sms']=1;
     
     $total_student++;
     $total_number+=$sms->send_sms_student($student_id,$msg,$receive_by);
     $db->sql_action("result","update",$up_info,$msg="no");
  }

  echo "<br/><br/>The System sent  Exam Message Total ".$total_student." Students And Total".$total_number." Number";


}

?>

<style type="text/css">
table{
  margin-top: 10px;
}
  table, th, td {
    border: 2px solid #D7DDE2;
    background-color: #ffffff;
    border-collapse: collapse;
    padding: 5px;
    }
    th{
      font-size: 15px;
    }

 
</style>