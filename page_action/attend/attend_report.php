<?php

if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='-1'>Select Batch</option>";
    $program_ob->select_batch_option($program_id);
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