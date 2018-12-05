<?php

if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='-1'>Select Batch</option>";
    $program_ob->select_batch_option($program_id);
}


if(isset($_POST['view_attend'])){
	$info=$_POST['view_attend'];
	$program_id=$info['program_id'];
	$batch_id=$info['batch_id'];
	$batch_name=$batch[$batch_id]['name'];
	$program_name=$program[$program_id]['name'];
	$student_list= $student_ob->get_student_list($program_id,$batch_id);
    
    $date=$info['date'];
    $date=date("d F Y",strtotime($date));
    $data=json_encode($info);
	?>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="attend_area">
		<?php $site->header_info_area(); ?>

  	<div class="daily_attend_header">
		
		<div class="row">
			<div class='pull-left' style="margin-bottom: 10px;">	
				<table width="100%">
					<tr>
						<td class="attend_td1" style="width: 130px">Program: </td>
						<td class="attend_td2" style="width: 250px"><?php echo "$program_name"; ?> </td>
					</tr>
					<tr>
						<td class="attend_td1">Batch: </td>
						<td class="attend_td2"><?php echo "$batch_name"; ?> </td>
					</tr>
					<tr>
						<td class="attend_td1">Date: </td>
						<td class="attend_td2"><?php echo "$date"; ?> </td>
					</tr>
				</table>
				
			</div>
			<div class='pull-left' style="width: 320px; margin-top: 30px;">
				<center>
				<font style="font-size: 22px; ">
					Daily Attendence
				</font>
				</center>
			</div>
		<div class='pull-right'>
			<table width="100%">
					<tr>
						<td class="attend_td1" style="width: 140px">Total Student: </td>
						<td class="attend_td2" style="width: 150px">108 </td>
					</tr>
					<tr>
						<td class="attend_td1">Total Attends: </td>
						<td class="attend_td2">5 </td>
					</tr>
					<tr>
						<td class="attend_td1">Total Presend: </td>
						<td class="attend_td2">100 </td>
					</tr>
				</table>
		</div>
	</div>

 <span class="glyphicon glyphicon-certificate"></span> <u><b>Program Name</u>: </b> <?php echo "$program_name"; ?>
  <span class="glyphicon glyphicon-fire"></span> <u><b>Batch Name</u>: </b> <?php echo "$batch_name"; ?>
 <span class="glyphicon glyphicon-calendar"></span> <u><b>Date</u>: </b> <?php echo "$date"; ?>
 <span class="glyphicon glyphicon-calendar"></span> <u><b>Total Student</u>: </b> <?php echo "$date"; ?>
 


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
       	 	

       ?>
	<tr class="attend_tr">
		<td class="attend_td2"><?php echo "$id"; ?></td>
		<td class="attend_td2"><img src="<?php echo "$img"; ?>" class="img_td"></td>
		<td class="attend_td2"><?php echo "$name"; ?></td>
		<td class="attend_td2">
			<input type="radio" name="attend[<?php echo "$id" ?>]" value="1">Present 
			<input type="radio" name="attend[<?php echo "$id" ?>]" value="0">Absent</td>
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

<table width="100%">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 80px">ID</td>
		<td class="attend_td1" style="width: 140px">Name</td>
		<?php for($i=1; $i<=31; $i++){ ?>
		<td class="attend_td1" style="width: 5px"><?php echo "$i"; ?></td>
	    <?php } ?>
	    <td class="attend_td1" style="width: 10px">T.P.</td>
	    <td class="attend_td1" style="width: 10px">T.A.</td>		
	</tr>
	<?php
       for($j=0; $j<100; $j++){
       	?>

		<tr class="attend_tr">
			<td class="attend_td2" style="width: 80px">10035</td>
			<td class="attend_td2" style="width: 140px;">Amir Hamza</td>
			<?php for($i=1; $i<=31; $i++){ ?>
			<td class="attend_td2" style="width: 5px"><?php echo "P"; ?></td>
	    	<?php } ?>
	    	<td class="attend_td2" style="width: 10px">T.P.</td>
	    	<td class="attend_td2" style="width: 10px">T.A.</td>		
		</tr>

       	<?php
       }

	?>
</table>

<?php
}

?>

<style type="text/css">
	.attend_table{

	}
	.attend_td1{
		padding: 10px 5px 10px 5px;
		background: #f5f5f5;
		color: #000000;
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