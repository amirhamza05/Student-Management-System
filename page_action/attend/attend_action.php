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

if(isset($_POST['view_attend'])){
	$info=$_POST['view_attend'];
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
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="attend_area">
		<?php $site->header_info_area(); ?>

  	<div class="daily_attend_header">
<center>		
	<span class="glyphicon glyphicon-pencil"></span>  
	<font style="font-size: 22px; padding-bottom: 15px">Daily Attendence</font>
</center>

<center>
 <span class="glyphicon glyphicon-certificate"></span> <u><b>Program Name</u>: </b> <?php echo "$program_name"; ?> | 
  <span class="glyphicon glyphicon-certificate"></span> <u><b>Batch Name</u>: </b> <?php echo "$batch_name"; ?> | 
 <span class="glyphicon glyphicon-certificate"></span> <u><b>Date</u>: </b> <?php echo "$date"; ?> | 
 <span class="glyphicon glyphicon-certificate"></span> <u><b>Total Student</u>: </b> <?php echo "$date"; ?>
 </center>


	</div>
<table style="width: 100%">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 140px">Student ID</td>
		<td class="attend_td1" style="width: 120px">Student Photo</td>
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
		<td class="attend_td2"><img src="<?php echo "$img"; ?>" class="img_td"></td>
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
</div>
<?php

}

if(isset($_POST['attend_report'])){
  $year=2018;
  $month=12;
  $program_id=8;
  $day = cal_days_in_month(CAL_GREGORIAN,$month,$year);
  $date1="$year-$month-01";
  $date2="$year-$month-$day";
  $info=$report->get_student_attend_info($date1,$date2,$program_id);
  
  $student_list=$info['student_list'];
  $info_index=$info['info_index'];
  //$site->myprint_r($info_index);
  $program_name=$program[$program_id]['name'];

	?>

<div class="attend_area">	
 <?php $site->header_info_area(); ?>

<div class="row  info_area">
	<div class="col-md-12">
		<font class="report_title">
			<center>
				Monthly Attendence Report<br/>
			</center>
		</font>
		<center>
			<font class="report_description">
				<?php echo "January 2019"; ?><br/>
			</font>	
		</center>
		<font class="report_description">
			<div style="float: left;"><b>Program: </b><?php echo "$program_name"; ?> </div>
			<div style="float: right;"><b>Batch:</b> All Batch</div>
		</font>
	</div>

</div>
<table width="100%" style="background-color: #ffffff">
	<thead style="border-width: 0px;">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 70px">ID</td>
		<td class="attend_td1" style="width: 140px">Name</td>
		<?php for($i=1; $i<=$day; $i++){ ?>
		<td class="attend_td1" style="width: 15px"><?php echo "$i"; ?></td>
	    <?php } ?>
	    <td class="attend_td1" style="width: 25px">T.P.</td>
	    <td class="attend_td1" style="width: 25px">T.A.</td>		
	</tr>
	</thead>

	<tbody>

	<?php
       
      foreach ($student_list as $key => $value) {
      	$student_id=$value;

      	$student_name=$student[$student_id]['name'];
        
       	?>

		<tr class="attend_tr">
			<td class="attend_td2" style="width: 70px;background-color: #f7f7f7;color: #000000"><b><?php echo "$student_id"; ?></b></td>
			<td class="attend_td2" style="width: 130px;background-color: #f7f7f7;color: #000000"><b><?php echo "$student_name"; ?></b></td>
			<?php 
             
             $present=0;
             $absent=0;
			for($i=1; $i<=$day; $i++){

                $att_cls="";
                $att="";
                $status=-1;
               
                if(isset($info_index[$student_id][$i])){
                  $status=$info_index[$student_id][$i];
                }
                
                
                if($status==0){
                    $absent++;
                	$att_cls="absent_class";
                	$att="A";
                }
                else if($status==-1)$pr="";
                else {
                	$present++;
                	$att_cls="present_class";
                	$att="P";
                }
			 ?>
			<td class="attend_td2 <?php echo $att_cls; ?>" style=""><b><?php echo "$att"; ?></b></td>
	    	<?php } ?>
	    	<td class="attend_td2" style="width: 10px; background-color: #f7f7f7;color: #000000"><b><?php echo "$present"; ?></b></td>
	    	<td class="attend_td2" style="width: 10px; background-color: #f7f7f7;color: #000000"><b><?php echo "$absent"; ?></b></td>		
		</tr>
	</tbody>
       	<?php
       }

	?>
</table>


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
 	color: #1A2229;
 	font-family: Verdana, Geneva, sans-serif;
 }
 .report_description{
 	color: #1A2229;
 	font-size: 14px;
 	font-family: Verdana, Geneva, sans-serif;
 }  
	.attend_table{

	}
	.attend_td1{
		padding: 8px 0px 8px 0px;
		background-color: #EFF0F2;
		color: #000000;
		font-weight: bold;
		border: 1px solid #C6C9D1;
		font-size: 12px;
		text-align: center;
	}
	.attend_td2{
		padding: 6px 2px 6px 2px;
		text-align: center;
		font-size: 10px;
		color: #5C6765;
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
	.watermark {
            background-repeat: repeat;
            background-image: url("http://localhost/project/youth/upload/custom_content/techserm_full_logo.jpg");
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
	

</style>
<style type="text/css" media="print">

                

    </style>