<?php
if(isset($_POST['select_program'])){
	$program_id=$_POST['select_program'];
	echo "<option value='0'>Select All Batch</option>";
    $program_ob->select_batch_option($program_id);
}

if(isset($_POST['year_set'])){
	$program_id=$_POST['year_set'];
	$set_payment_ob->get_program_payment_year_option($program[$program_id]);
} 
if(isset($_POST['select_year'])){
  $info=$_POST['select_year'];
  $year=$info['year'];
  $pid=$info['program_id'];
  if($year!=-1){
        $set_payment_ob->get_program_payment_month_option($program[$pid],$year); 
  }
  else echo "<option value='-1'>Select Month</option>";
}


if(isset($_POST['attend_report'])){
  $info=$_POST['attend_report'];
  $year=$info['year'];
  $month=$info['month'];
  $program_id=$info['program_id'];
  $batch_id=$info['batch_id'];
  $day = cal_days_in_month(CAL_GREGORIAN,$month,$year);
  $date1="$year-$month-01";
  $date2="$year-$month-$day";
  $month_name="$year-$month-1";
  $month_name=date("F Y",strtotime($month_name));
  $info=$report->get_student_attend_info($date1,$date2,$program_id,$batch_id);
  
  $student_list=$info['student_list'];
  $info_index=$info['info_index'];
  //$site->myprint_r($info_index);
  $program_name="All Program";
  if(isset($program[$program_id]['name']))$program_name=$program[$program_id]['name'];
  $batch_name="All Batch";
  if(isset($batch[$batch_id]['name']))$batch_name=$batch[$batch_id]['name'];

	?>
<div class="pull-right">
<button class="button" onclick="print('attend_area')">Print Report</button>
</div>
<div class="attend_area" id="attend_area">	
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
				<?php echo "$month_name"; ?><br/>
			</font>	
		</center>
		<font class="report_description">
			<div style="float: left;"><b>Program: </b><?php echo "$program_name"; ?> </div>
			<div style="float: right;"><b>Batch: </b><?php echo "$batch_name"; ?></div>
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



<?php
}

?>

<style type="text/css">

.attend_area{
		background-color: #ffffff;
		padding: 15px;
		border-radius: 5px;
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
	@page {
  		size: landscape;
	}
</style>


</div>