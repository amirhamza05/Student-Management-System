<?php

if(isset($_POST['program_select'])){

	$program_id=$_POST['program_select'];
  echo "<option value='0'> --Select Subject-- </option>";
  foreach ($program[$program_id]['subject'] as $key => $value) {
    $id=$value['id'];
    $name=$subject[$id]['name'];
    echo "<option value='$id'>$name</option>";
  }
}

if(isset($_POST['select_subject'])){
	$info=$_POST['select_subject'];
	$program_id=$info['program_id'];
	$subject_id=$info['subject_id'];
	echo "<option value='0'> --Select Exam-- </option>";
	$result->get_exam_list_option($program_id,$subject_id);
}

if(isset($_POST['update_result'])){
	$info=$_POST['update_result'];
	$db->sql_action("result","update",$info,"no");
}
if(isset($_POST['delete_result'])){
	$id=$_POST['delete_result'];
	$info['id']=$id;
	$db->sql_action("result","delete",$info,"no");
}

if(isset($_POST['save_result'])){
	$info=$_POST['save_result'];
	$exam_id=$info['exam_id'];
	$student_list=$info['student_list'];
	$mcq_list=$info['mcq'];
	$written_list=$info['written'];
	$exam_add_list=$result->get_student_add_exam_list($exam_id);
	
	if(!isset($student_list))return;

	foreach ($student_list as $key => $value) {
		$student_id=$value;
		$mcq=$mcq_list[$key];
		$written=$written_list[$key];
		if($mcq=="")$mcq=0;
  		if($written=="")$written=0;
  		$total=$mcq+$written;

		if(!isset($student[$student_id]))continue;
		if (in_array($student_id, $exam_add_list))continue;

		$data['exam_id']=$exam_id;
		$data['student_id']=$student_id;
		$data['mcq']=$mcq;
		$data['written']=$written;
		$data['total']=$total;
		$data['add_by']=$user_id;
		$data['date']=$db->date();
		$data['sms']=0;
		
		$db->sql_action("result","insert",$data,"no");
	}

	$site->myprint_r($info);				
}

if(isset($_POST['update_result_form'])){
	$id=$_POST['update_result_form'];
    $info=$result->get_separeate_result($id);
    $mcq=$info['mcq'];
    $written=$info['written'];
    $site->form_input("MCQ","mcq","mcq","text","exclamation-sign","$mcq","");
    $site->form_input("Written","written","written","number","exclamation-sign","$written","");
   echo ";
    <button class='btn btn-lg btn-primary btn-block' name='insert' type='submit' onclick='update_result($id)'><span class='glyphicon glyphicon-floppy-save'></span> Save Result</button>
    ";

}

if(isset($_POST['delete_result_form'])){
   $id=$_POST['delete_result_form'];
   ?>
 <center>
    <h3>Are You Want To Delete This Result</h3><br/>
    <button class="btn btn-lg btn-primary btn-block" name="insert" type="submit" onclick="delete_result(<?php echo "$id"; ?>)"><span class="glyphicon glyphicon-trash"></span> Delete</button>
  </center>


  <?php 
}

if(isset($_POST['add_result'])){
	$exam_id=$_POST['add_result'];
    
	$subject_id=$exam[$exam_id]['sub_id'];
	$program_id=$exam[$exam_id]['program_id'];
	$exam_name=$exam[$exam_id]['exam_name'];

	$mcq=$exam[$exam_id]['mcq'];
	$written=$exam[$exam_id]['written'];
	$total=$exam[$exam_id]['total'];
	$date=$exam[$exam_id]['date'];

	$subject_name=$subject[$subject_id]['name'];
	$program_name=$program[$program_id]['name'];
	$flag=0;
if($mcq!="N/A" && $written!="N/A")$flag=1;
    exam_header($exam,$program,$subject,$exam_id);
  ?>



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
if(isset($_POST['show_result'])){
	$exam_id=$_POST['show_result'];
    exam_header($exam,$program,$subject,$exam_id);
    ?>

<div class="header_box text-center" style="margin-top: 25px;">
            Exam Ranklist
     </div>

 <div class="box_body" id="ranklist_body">

<!-- start datatable -->
 
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
            <tr>
              <th>Rank</th>
              <th><center>Student Id</center></th>
              <th><center>Student Name</center></th>
              <th><center>Batch Name Name</center></th>
              <th><center>MCQ Mark</center></th>
              <th><center>Written Mark</center></th>
              <th><center>Total Mark</center></th>
              <th><center>Batch Rank</center></th>
              <th><center>Action</center></th>
            </tr>
         
          <tbody>

<?php 
$result_info=$result->get_exam_result($exam_id);

foreach ($result_info as $key => $value) {
  
  $student_id=$value['student_id'];
  $center_merit=$value['center_merit'];
  $student_name=$value['student_name'];
  
  $mcq=$value['mcq'];
  $written=$value['written'];

  $total=$value['total'];
  $batch_merit=$value['batch_marit'];

  $id=$value['id'];
?>
            <tr>

              <td><center><?php echo "$center_merit"; ?></center></td>
              <td><center><?php echo "$student_id"; ?></center></td>
              <td><center><?php echo "$student_name"; ?></center></td>
              <td><center><?php echo $value['batch_name']; ?></center></td>
              <td><center><?php echo "$mcq"; ?></center></td>
              <td><center><?php echo "$written"; ?></center></td>
              <td><center><?php echo "$total"; ?></center></td>
              <td><center><?php echo "$batch_merit"; ?></center></td>
                
             <td><div class="btn-toolbar list-toolbar"><center>
             	<button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Edit" onclick="update_result_form(<?php echo $id; ?>)" ><span class="glyphicon glyphicon-pencil"></span></button>

             	<button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="delete_result_form(<?php echo $id; ?>)" ><span class="glyphicon glyphicon-trash"></span></button></center></div></td>
    
            </tr>

<?php } ?>
          </tbody>
        </table>


<!-- end datatable -->
 </div>

    <?php

}


if(isset($_POST['send_sms'])){
	
	$info=$_POST['send_sms'];
	$exam_id=$info['exam_id'];
	$receiver=$info['receiver'];
	$pending_sms_list=$result->get_sms_pending_id($exam_id);
    
    $sms_list=array();

	foreach ($pending_sms_list as $key => $value) {
		$id=$value['id'];
		$student_id=$value['student_id'];
		$nick=$student[$student_id]['nick'];

		$exam_id=$value['exam_id'];
		$exam_name=$exam[$exam_id]['exam_name'];
    	$exam_mcq=$exam[$exam_id]['mcq'];
    	$exam_written=$exam[$exam_id]['written'];
    	$exam_total=$exam[$exam_id]['total'];

    	$mcq=$value['mcq'];
    	$written=$value['written'];
    	$msg="Dear $nick,\nYour obtained marks for the exam '$exam_name' is,\n\n";
    	if($exam_mcq!="N/A")$msg.="MCQ: $mcq/$exam_mcq\n";
        if($exam_written!="N/A")$msg.="Written: $written/$exam_written\n";
        $msg.="\n$db->msg";

        $mobile_number_list=$sms->get_student_mobile_number($student_id,$receiver);

	    foreach ($mobile_number_list as $key => $value1) {
	    	$number=$value1;
	    	$res=$sms->make_sms_array($value1,$msg);
    		array_push($sms_list, $res);
	    }
        
        $data=array();
        $data['id']=$id;
        $data['sms']=1;
        $db->sql_action("result","update",$data,"no");
	}

	// /$site->myprint_r($sms_list);
	$sms->send_sms($sms_list);
}


if(isset($_POST['send_sms_form'])){
 $exam_id=$_POST['send_sms_form'];
 exam_header($exam,$program,$subject,$exam_id);
 ?>


<div class="header_box text-center" style="margin-top: 25px;">
          Sending Exam SMS
     </div>

 <div class="box_body" id="sms_body">
  <center>

<div class="dropdown">
  
            <select class="dropdown-select-version select" name="options" id="receive_by" onchange ="">
                <?php $sms->get_sms_recever_only_option(); ?>
            </select>


             <button id="btnn"  onclick="send_sms(<?php echo $exam_id; ?>)" class="button_result" style="" title="Send SMS" alt="Download"><span style="margin-right: 6px;" class="glyphicon glyphicon-envelope"></span>Send SMS</button>
        </div>

  <div id="message_detail">
    
  </div>


  </center>
</div>


	<?php
}


function exam_header($exam,$program,$subject,$exam_id){
	$subject_id=$exam[$exam_id]['sub_id'];
	$program_id=$exam[$exam_id]['program_id'];
	$exam_name=$exam[$exam_id]['exam_name'];

	$mcq=$exam[$exam_id]['mcq'];
	$written=$exam[$exam_id]['written'];
	$total=$exam[$exam_id]['total'];
	$date=$exam[$exam_id]['date'];

	$subject_name=$subject[$subject_id]['name'];
	$program_name=$program[$program_id]['name'];
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

<?php
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