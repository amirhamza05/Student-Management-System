<?php

if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='-1'>Select Batch</option>";
    $program_ob->select_batch_option($program_id);
}

if(isset($_POST['save_attend'])){
	$info=$_POST['save_attend'];
	$program_id=$info['program_id'];
	$date=$info['date'];
	$attend_list=$info['student_list'];
	foreach ($attend_list as $key => $value) {
		$student_id=$value['student_id'];
		$status=$value['status'];
        $data['student_id']=$student_id;
        $data['program_id']=$program_id;
        $data['date']=$date;
        $data['status']=$status;
        $ch_info=$attend_ob->get_attendence_info($program_id,$student_id,$date);
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
            $ch_info=$attend_ob->get_attendence_info($program_id,$id,$db_date);
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

 	

	?>

<div class="attend_area">	
 <?php $site->header_info_area(); ?>
<table width="100%">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 80px">ID</td>
		<td class="attend_td1" style="width: 130px">Name</td>
		<?php for($i=1; $i<=28; $i++){ ?>
		<td class="attend_td1" style="width: 5px"><?php echo "$i"; ?></td>
	    <?php } ?>
	    <td class="attend_td1" style="width: 10px">T.P.</td>
	    <td class="attend_td1" style="width: 10px">T.A.</td>		
	</tr>
	<?php
       for($j=0; $j<100; $j++){
       	?>

		<tr class="attend_tr">
			<td class="attend_td2" style="width: 80px;background-color: var(--bg-color);color: var(--font-color)">10035</td>
			<td class="attend_td2" style="width: 130px;background-color: var(--bg-color);color: var(--font-color)">Amir Hamza dsf sdf</td>
			<?php for($i=1; $i<=28; $i++){ ?>
			<td class="attend_td2" style=""><?php echo "P"; ?></td>
	    	<?php } ?>
	    	<td class="attend_td2" style="width: 10px; background-color: var(--bg-color);color: var(--font-color)">T.P.</td>
	    	<td class="attend_td2" style="width: 10px; background-color: var(--bg-color);color: var(--font-color)">T.A.</td>		
		</tr>

       	<?php
       }

	?>
</table>

</div>

<?php
}

?>

<style type="text/css">
	.attend_table{

	}
	.attend_td1{
		padding: 10px 5px 10px 5px;
		background-color: var(--bg-color);
		color: var(--font-color);
		font-weight: bold;
		border: 1px solid #eeeeee;
		text-align: center;
	}
	.attend_td2{
		padding: 4px;
		text-align: center;
		border: 1px solid #eeeeee;
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

</style>