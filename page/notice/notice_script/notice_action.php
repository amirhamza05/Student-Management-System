<?php

include "layout/header_script.php";


if(isset($_POST['select_program'])){
  $program_id=$_POST['select_program'];
  $flag=0;

  if($program_id!=0){
  	$batch1=$program[$program_id]['batch'];
    $program_name="'".$program[$program_id]['name']."'";
  }
  else {
  	$flag=1;
  	$program_name="";
  }
	?>
<select onchange="batch()" class="dropdown-select-version select" name="options" id="batch_select" style="width: 100%">
<option value="0"> <?php echo "All $program_name Batch"; ?></option>   
	<?php
   if($flag==1){
         foreach ($batch as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "$name"; ?></option>        
	<?php 
   }
}
   if($flag==0){

	  foreach ($batch1 as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "$name"; ?></option>        
	<?php
}
}
echo "</select>";

}

else if(isset($_POST['select_batch'])){
  $program_id=$_POST['program_id'];
  $batch_id=$_POST['select_batch'];
 $program_name=$program_ob->get_program_name($program_id);

  $batch_name=$batch_ob->get_batch_name($batch_id);


	?>
<select onchange="student_update()" class="dropdown-select-version select" name="options" id="student_select" style="width: 100%">
<option value="0"> <?php echo "All $program_name $batch_name Student"; ?></option>   

<?php 
if($program_id==0){
	 foreach ($student as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	$pid=$value['program'];
            	$bid=$value['batch'];
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "($id) $name"; ?></option>        
	<?php
}

}
else{

	 foreach ($student as $key => $value) {
            	$id=$value['id'];
            	$name=$value['name'];
            	$pid=$value['program'];
            	$bid=$value['batch'];
            	if(($pid==$program_id && $bid==$batch_id)||($batch_id==0 && $pid==$program_id)){
            	   ?>
<option value="<?php echo"$id"; ?>"> <?php echo "($id) $name"; ?></option>        
	<?php
}
}
}
echo "</select>";

}

if(isset($_POST['send_body'])){
  ?>

<div class="dropdown">
             <center>
              <div class="col-md-12" style="margin-bottom: -20px">
            <select style="width: 100%;" onchange="program()" class="dropdown-select-version select" id="program_select" name="options">
              <option value="0">All Program</option>
        <?php  foreach ($program as $key => $value) {
              $id=$value['id'];
              $name=$value['name'];
                 ?>
                <option value="<?php echo "$id"; ?>"><?php echo "$name"; ?></option>
               <?php } ?>
            </select>
            </div>
            <div class="col-md-12" style="margin-bottom: -20px">
            <a id="batch_div" style="">
            <select class="dropdown-select-version select" name="options" style="width: 100%;" id="batch_select">
                <option value="0"> All Batch </option>
            </select>
         </a>   
       </div>
       <div class="col-md-12" style="margin-bottom: -20px">
         <a id="student_div">
            <select style="width: 100%;" class="dropdown-select-version select" name="options" id="student_select">
                <option value="0"> All Student </option>
            </select>
        </a>
      </div>
      <div class="col-md-12" style="">
        
            <select style="width: 100%;" class="dropdown-select-version select" name="permission" id="select_receive">
               <option value="0"> --Select Recever-- </option>
                <option value="a"> ALL </option>
                <option value="s"> Student </option>
                <option value="g"> Guardians </option>

            </select>
        
      </div>

            <a id="btnn"  onclick="send_sms()" class="btn btn_send" style="width: 50%;" title="Send SMS" alt="Download">Send SMS</a>
              </center>
        </div>

<style type="text/css">
  .sms_report{
    
  }
</style>
<div class="sms_report" id="sms_report">
  
</div>

  <?php
}

else if(isset($_POST['s_program_id'])){
  $program_id=$_POST['s_program_id'];
  $batch_id=$_POST['batch_id'];
  $student_id=$_POST['student_id'];
  $notice_id=$_POST['notice'];
  $receive_by=$_POST['recever'];
  $info=$student_ob->get_select_student($program_id,$batch_id,$student_id);
  //$title=$notice_info[$notice_id]['title'];
  //echo "$title";
$notice_des=$notice_info[$notice_id]['description'];
  foreach ($info as $key => $value) {
    $student_id=$value['id'];
    $msg=$sms->get_sms($student_id,$notice_des);
    $sms->send_sms_student($student_id,$msg,$receive_by);
  }
  ?>
<!-- <style type="text/css">
table{
  
        margin-top: 15px;
        table-layout: fixed;
}
  td,th{
    border-width: 1px;
    border-style: solid;
    padding: 5px;
    text-align: center;
  }
  th{
    background-color: #f1f1f1;
    font-weight: bold;
    padding: 10px;
  }
  .t_msg{
    width: 45%;
  }
  .t_mobile{
    width: 20%;
  }
  .t_sta{
    width: 17%;
  }
  .t_tok{
    width: 18%;
  }

</style>

<table class="tb"  width="100%" style="">
  <tr>
    <th class="t_mobile">Mobile</th>
    <th class="t_msg">Message</th>
    <th class="t_sta">Status</th>
    <th class="t_tok">Token</th>
  </tr>
  <tbody>
  <tr>
    <?php //for($i=0; $i<100; $i++){ ?>
    <td class="t_mobile">100000001</td>
    <td class="t_msg">jhga sddfas dfsdafsdafsadfasdf sdafsadfsdfsdfsdafsdfsdasdfa</td>
    <td class="t_sta">Hamza</td>
    <td class="t_tok">10000000454</td>
  </tr>
  <?php //} ?>
  </tbody>
</table> -->

  <?php
}
else if(isset($_POST['save_notice'])){
  $title=$_POST['save_notice'];
  $notice=$_POST['notice'];
  $info['title']=$title;
  $info['description']=$notice;
  $date=date("Y-m-d");
  $info['date']=$date;
  $add_by=$login_user['id'];
  $info['ad_by']=$add_by;
  $db->sql_action("notice","insert",$info,"no");
  ?>
  <?php 

foreach ($notice_info as $key => $value) {
  $title=$value['title'];
  $description=$value['description'];
  $id=$value['id'];

  for($i=0; $i<1; $i++){
?>
        <div class="row carousel-row">
        <div class="col-xs-10 col-xs-offset-1 slide-row">
          
<div id="carousel-1" style="" class="carousel slide slide-carousel">
  
              <!-- Wrapper for slides -->
              <div style="background-color: #2E363F;height: 160px;">
              <div class="carousel-inner">
                  <div class="time_body">
              <span class="day">4</span>
              <span class="month">Jul</span>
              <span class="year">2014</span>
                  </div>
              </div>
            </div>

    </div>


            <div class="slide-content">
               <div class="notice_des">
                <h4><?php echo "$title"; ?></h4>
                <p style="">
                    <?php echo "$description"; ?>
                </p>
                </div>
            </div>
            <div class="slide-footer">
                <span class="pull-right buttons">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" onclick="send_btn(<?php echo "1"; ?>)" data-target="#send_sms"><i class="fa fa-fw fa-shopping-cart"></i><b>Send SMS</b></button>
                  <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i><b>Edit</b></button>
                   <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i><b>Delete</b></button>
                </span>
            </div>
        </div>
    </div>

<?php } }
        
}


?>