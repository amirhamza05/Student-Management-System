<?php

if(isset($_POST['program_overview'])){
	$info=$_POST['program_overview'];
	
	$program_id=$info['program_id'];
	$program=$program[$program_id];
	$program_name=$program['name'];

	$batch_id=$info['batch_id'];
	$subject=$program['subject_string'];

	$admission_fee=$program['fee'];
    $subject=$program['subject_string'];
	//$site->myprint_r($program);
	if($batch_id==0){
       $batch_name=$program['batch_string'];
	}
	else{
		$batch=$batch[$batch_id];
        $batch_name=$batch['name'];
	}
   $batch_id=($batch_id==-1)?0:$batch_id;
   $total_student=$student_ob->get_total_student($program_id,$batch_id);
  ?>

<div class="row">
	<div class="col-md-6">
		<table style="width: 100%">
			
			<tr>
				<td class="program_td">Program Name</td>
				<td class="batch_td3"><?php echo "$program_name"; ?></td>
			</tr>
			<tr>
				<td class="program_td">Batch Name</td>
				<td class="batch_td3"><?php echo "$batch_name"; ?></td>
			</tr>
			<tr>
				<td class="program_td">Subject</td>
				<td class="batch_td3"><?php echo "$subject"; ?></td>
			</tr>
			<tr>
				<td class="program_td">Total Student</td>
				<td class="batch_td3"><?php echo "$total_student"; ?></td>
			</tr>
		
		</table>	
	</div>
	<div class="col-md-6">
		<table style="width: 100%">
			<tr>
				
				<td class="batch_td1">Batch Name</td>
				<td class="batch_td1">Batch Day</td>
				<td class="batch_td1">Batch Time</td>
			</tr>
	<?php 
        foreach ($program['batch'] as $key => $value) {
            $id=$value['id'];
            if($batch_id!=0){
                if($batch_id!=$id)continue;
            }
            $name=$value['name'];
            $day=$value['day_string'];
            $start=$value['start'];
            $end=$value['end'];
	?>
			<tr>
				
				<td class="batch_td2"><?php echo "$name"; ?></td>
				<td class="batch_td2"><?php echo "$day"; ?></td>
				<td class="batch_td2"><?php echo "($start - $end)"; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	
</div>

<?php

}

if(isset($_POST['id_card'])){
	$info=$_POST['id_card'];
	$program_id=$info['program_id'];
  	$batch_id=$info['batch_id'];

  	$info= $student_ob->get_student_list($program_id,$batch_id);

  	?>
<button class="btn btn-primary hidden-print pull-right" onclick="print('print_area')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
  	<?php
  	echo "<div id='print_area' style='margin-top: 40px;'>";
  	$id_card->get_id_card($info);
  	echo "</div></div>";
?>
<?php

}

?>

