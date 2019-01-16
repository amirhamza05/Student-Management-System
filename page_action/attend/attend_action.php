<?php

if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='-1'>Select Batch</option>";
    $program_ob->select_batch_option($program_id);
}

if(isset($_POST['save_attend'])){
	$info=$_POST['save_attend'];
	$program_id=$info['program_id'];
    $batch_id=$info['batch_id'];
	$date=$info['date'];
	$attend_list=$info['student_list'];
	foreach ($attend_list as $key => $value) {
		$student_id=$value['student_id'];
		$status=$value['status'];
		$data=array();
        $data['student_id']=$student_id;
        $data['program_id']=$program_id;
        $data['date']=$date;
        $data['status']=$status;
        $data['batch_id']=$batch_id;
        $ch_info=$attend_ob->get_attendence_info($program_id,$batch_id,$student_id,$date); 
        $action="insert";
        if($ch_info!=-1){
        	$action="update";
        	$data['id']=$ch_info['id'];
        }
        $db->sql_action("student_attendence",$action,$data,"no");
	}
	
}

if(isset($_POST['take_attend'])){
	$info=$_POST['take_attend'];
	$program_id=$info['program_id'];
	$batch_id=$info['batch_id'];
	$batch_name=$batch[$batch_id]['name'];
	$program_name=$program[$program_id]['name'];
	$student_list= $student_ob->get_student_list($program_id,$batch_id);
    
    $date=$info['date'];
    $db_date=$date;
    $date=date("d F Y",strtotime($date));
    $data=json_encode($info);
	?>

<div class="row">
	
	<div class="col-md-12">
	<div class="attend_area">
  	<div class="daily_attend_headerr">


<font class="report_title">
		<center>
			Daily Attendence <br/>
		</center>
		</font>
		<center>
			<font class="report_description">
				Date: <?php echo "$date"; ?>
			</font>	
		</center>

<div style="float: left;">Program: <?php echo "$program_name"; ?></div>
<div style="float: right;">Batch: <?php echo "$batch_name"; ?></div>

</div>
<table style="width: 100%">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 140px">Student ID</td>
		<td class="attend_td1">Student Name</td>
		<td class="attend_td1" style="width: 200px">Attendance</td>
	</tr>
	<?php 
       foreach ($student_list as $key => $value) {
            $id=$value['student_id'];
      		$value1=$value;
      		$value=$student[$id];
      		$name=$value['name'];
        	$img=$value['photo'];
            $ch_info=$attend_ob->get_attendence_info($program_id,$batch_id,$id,$db_date);
            $ch1="";
            $ch2="";
            if($ch_info!=-1){
            	if($ch_info['status']==1)$ch1="checked";
            	else $ch2="checked";
            }
       ?>

	<tr class="attend_tr">
		<td class="attend_td2"><?php echo "$id"; ?></td>
		<td class="attend_td2"><?php echo "$name"; ?></td>
		<td class="attend_td2">
			<input type="radio" name="attend[<?php echo "$id" ?>]" value="1" <?php echo $ch1; ?>>Present 
			<input type="radio" name="attend[<?php echo "$id" ?>]" value="0" <?php echo $ch2; ?>>Absent</td>
	</tr>
    <?php } ?>
</table>
<div style="margin-top: 10px"></div>

<center><button class="btn_attend" onclick='save_attend(<?php echo $data; ?>)'>Save Attendence</button></center>
</div>
</div> 

<?php

}

if(isset($_POST['attend_report'])){
	$info=$_POST['attend_report'];
	$program_id=$info['program_id'];
	$batch_id=$info['batch_id'];
	$date=$info['date'];
	$status=$info['status'];
	$attend_list=array();
	if($status==1)$attend_list=$attend_ob->get_present_list($program_id,$batch_id,$date);
	else if($status==0)$attend_list=$attend_ob->get_absent_list($program_id,$batch_id,$date);
	else $attend_list=$attend_ob->get_absent_present_list($program_id,$batch_id,$date);

	$date1=date("d M Y", strtotime($date));
	$program_name=$program[$program_id]['name'];
	$batch_name=$batch[$batch_id]['name'];

?>

<div class="row">

	<div class="col-md-4">
        <button class="btn_select" onclick="attend_report(2)">Present And Absent Report</button>
 	</div>
 	<div class="col-md-4">
        <button class="btn_select" onclick="attend_report(1)">Present Report</button>
 	</div>
 	<div class="col-md-4">
        <button class="btn_select" onclick="attend_report(0)">Absent Report</button>
 	</div>
</div>
<div class="pull-right">
	<button class="button" onclick="print('attend_report_area')">Print Report</button>
</div>



<div class="attend_area" id="attend_report_area">

<style type="text/css">
	.attend_report_td1{
		padding: 12px 0px 12px 0px;
		background-color: #EFF0F2;
		color: #000000;
		font-weight: bold;
		border: 1px solid #C6C9D1;
		font-size: 16px;
		text-align: center;
	}
	.attend_report_td2{
		padding: 6px 2px 6px 2px;
		text-align: center;		
		color: #000000;
		border: 1px solid #C6C9D1;
		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	}
	table {
  border-collapse: collapse;
}

 .report_title{
 	font-size: 18px;
 	color: #1A2229;
 	font-family: Verdana, Geneva, sans-serif;
 }
 .report_description{
 	color: #1A2229;
 	font-size: 14px;
 	font-family: Verdana, Geneva, sans-serif;
 }  
</style>


<?php $site->header_info_area(); ?>

		<font class="report_title">
			<center>
				Daily Attendence Report<br/>
			</center>
		</font>
		<center>
			<font class="report_description">
				Date: <?php echo "$date1"; ?>
			</font>	
		</center>

<div style="float: left;">Program: <?php echo "$program_name"; ?></div>
<div style="float: right;">Batch: <?php echo "$batch_name"; ?></div>

<table style="width: 100%">
	<tr class="attend_tr">
		<td class="attend_report_td1" style="width: 140px">Student ID</td>
		<td class="attend_report_td1">Student Name</td>
		<td class="attend_report_td1" style="width: 200px">Attendance</td>
	</tr>
    <?php 
       
       foreach ($attend_list as $key => $value) {
       	$student_id=$value['student_id'];
       	$student_name=(!isset($student[$student_id]['name']))?"-":$student[$student_id]['name'];
       	$status=($value['status']==1)?"Present":"Absent";
    ?>
    <tr class="attend_tr">
    	<td class="attend_report_td2"><?php echo "$student_id"; ?></td>
    	<td class="attend_report_td2"><?php echo "$student_name"; ?></td>
    	<td class="attend_report_td2"><?php echo "$status"; ?></td>
    </tr>

	<?php } ?>

</table>
</div>


<?php


}

if(isset($_POST['attend_sms'])){
	$info=$_POST['attend_sms'];

?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<select class='form-control' id='attend_type'>
        	<option value='-1'> --Select Attendence Type-- </option>
       		<option value='2'> Absent And Present All Student</option>
        	<option value='0'> Absent Student</option>
        	<option value='1'> Present Student</option>
    	</select>
	</div>
	<div class="col-md-4">
		<select class='form-control' id='select_receiver'>
        	<option value='-1'> --Select Recever-- </option>
       		<option value='all'> ALL </option>
        	<option value='st'> Student </option>
        	<option value='ga'> Guardians </option>
    	</select>
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-4"></div>
	<div class="col-md-3"><button class="btn_select" onclick="send_attend_sms()">Send Attendence SMS</button></div>
</div>

<?php

}

if(isset($_POST['send_attend_sms'])){
	$info=$_POST['send_attend_sms'];
	$program_id=$info['program_id'];
	$batch_id=$info['batch_id'];
	$date=$info['date'];
	$status=$info['type'];
	$receiver=$info['receiver'];

	$attend_list=array();
	if($status==1)$attend_list=$attend_ob->get_present_list($program_id,$batch_id,$date);
	else if($status==0)$attend_list=$attend_ob->get_absent_list($program_id,$batch_id,$date);
	else $attend_list=$attend_ob->get_absent_present_list($program_id,$batch_id,$date);
    
	$program_name=$program[$program_id]['name'];
	$batch_name=$batch[$batch_id]['name'];

    $date1=date("d M Y l", strtotime($date));

	$list=array();
	foreach ($attend_list as $key => $value) {
		$student_id=$value['student_id'];
		$student_name=$student[$student_id]['nick'];
		$student_status=$value['status'];
		$not=($student_status==1)?"Present":"Absent";

		$c_name=$db->msg;
		$message="Dear $student_name, \nYou are $not in '$date1' Class. Please Attend All Class.\n\n$c_name";
	    $mobile_number_list=$sms->get_student_mobile_number($student_id,$receiver);
	    foreach ($mobile_number_list as $key => $value1) {
	    	$number=$value1;
	    	$res=$sms->make_sms_array($value1,$message);
    		array_push($list, $res);
	    }
	}
	//$site->myprint_r($list);
	$sms->send_sms($list);
}

if(isset($_POST['attend_panel'])){
 ?>

<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12">
	
        <div class="panel with-nav-tabs panel-primary animated slideInDown">
            <div class="header_box">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1primary" data-toggle="tab" onclick="take_attend()">Take Attendence</a></li>
                    <li onclick="attend_report()"><a href="#tab2primary" data-toggle="tab">Attendence Report</a></li>
                    <li onclick="attend_sms()"><a href="#tab3primary" data-toggle="tab">Send Attendence SMS</a></li>
                </ul>
            </div>
  	<div class="box_body">
      	<div class="tab-content">
        	<div style="" class="tab-pane fade in active" onclick="student()" id="tab1primary">
        		<div id="take_attend"></div>
        	</div>
        	<div class="tab-pane fade" id="tab2primary">
        		<div id="attend_report"></div>
        	</div>
        	<div class="tab-pane fade" id="tab3primary">
        		<div id="attend_sms"></div>
        	</div>                  
      	</div>
 	</div>

 </div>
</div>
</div>
<?php
}

?>

<style type="text/css">

	.info_area{
    	padding: 2px 0px 8px 0px;
    }
 	.report_title{
 		font-size: 18px;
 		color: #000000;
 		font-family: Verdana, Geneva, sans-serif;
 	}
 	.report_description{
 		color: #000000;
 		font-size: 14px;
 		font-family: Verdana, Geneva, sans-serif;
 	}  

	.attend_td1{
		padding: 12px 0px 12px 0px;
		background-color: #EFF0F2;
		color: #000000;
		font-weight: bold;
		border: 1px solid #C6C9D1;
		font-size: 16px;
		text-align: center;
	}
	.attend_td2{
		padding: 6px 2px 6px 2px;
		text-align: center;		
		color: #000000;
		border: 1px solid #C6C9D1;
		font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	}
	.present_class{
       background-color: #CDFFD8;
	}
	.absent_class{
		background-color: #FFDCE0;
	}
	.img_td{
		height: 40px;
		width: 40px;
		border:1px solid #eeeeee;
        border-radius: 5px;
        cursor: pointer;
	}
	.attend_area{
		background-color: #ffffff;
		padding: 15px;
		border-radius: 5px;
	}
	
	.daily_attend_header{
		color: #868686;
		margin-bottom: 10px;
		font-family: 'Trocchi', serif;
		padding: 10px 10px 10px 10px;
	}
	
	@page {
  		size: landscape;
  		margin: 1;
  		table { page-break-after:auto }
  		tr    { page-break-inside:avoid; page-break-after:auto }
  		td    { page-break-inside:avoid; page-break-after:auto }
  		thead { display:table-header-group }
  		tfoot { display:table-footer-group }
	}

	/* start panel css */

	.header_box{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding-top: 15px;
        padding-left: 15px;
        margin-bottom: -17px;
    }
    .box_body{
        background-color: #E1E2E1;
        padding: 20px;
        border-color: var(--bg-color);
        border-width: 1px;
        color: #000000;

    }
    .head_id{
        background-color: var(--bg-color);
        color: var(--font-color);
        padding: 15px;
        margin-left: 80px;: 
        
    }

    .box_overview{
        background-color: #ffffff;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
    }
    .overview_body{
    	background-color: #ffffff;
    }	


.panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
    border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
    margin-bottom: -1px;
}
/********************************************************************/

/*** PANEL PRIMARY ***/
.with-nav-tabs.panel-primary .nav-tabs > li > a,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;

}
.with-nav-tabs.panel-primary .nav-tabs > .open > a,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
    color: #fff;
    background-color: rgba(0,0,0,0.4);
    padding: 17px;
    margin-bottom: 0px;
    border-color: transparent;
}
.with-nav-tabs.panel-primary .nav-tabs > li.active > a,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
    color: #000000;
    font-weight: bold;
    background-color: #E1E2E1;
    margin-bottom: 2px;
    padding: 17px;
   
}


.tab-pane{
	color: #000000;
	cursor: unset;
}


</style>
