<?php

include 'layout/header_script.php';

if(isset($_POST['program_select'])){
	$program_id=$_POST['program_select'];
	$name=$program[$program_id]['name'];
?>
<select class="select" id="batch_select_id">
     <option value="-1">Select All <?php echo "$name"; ?> Batch</option>
      <?php $program_ob->select_batch_option($program_id); ?>
  </select>

<?php
}

else if(isset($_POST['view'])){
	?>

<div class="col-md-12 col-sm-12 col-lg-12">
        <div class="panel with-nav-tabs panel-primary animated slideInDown">
            <div class="header_box">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1primary" data-toggle="tab" onclick="overview()">Program Overview</a></li>
                    <li onclick="student_list()"><a href="#tab2primary" data-toggle="tab">Student List</a></li>
                    <li onclick="get_id_card()"><a href="#tab3primary" data-toggle="tab">Student ID Card</a></li>
                </ul>
            </div>
  <div class="box_body">
      <div class="tab-content">
        <div style="" class="tab-pane fade in active" onclick="student()" id="tab1primary">
        	<div id="overview_body"></div>
        </div>
        <div class="tab-pane fade" id="tab2primary">
        	<div id="student_body"></div>
        </div>
        <div class="tab-pane fade" id="tab3primary">
        	<div id="id_card_body"></div>
        </div>
                  
      </div>
 </div>

 </div>
</div>

	<?php
}

else if(isset($_POST['overview'])){
	
	$program_id=$_POST['overview'];

	$program=$program[$program_id];
	$program_name=$program['name'];

	$batch_id=$_POST['batch_id_ov'];
	$subject=$program['subject_string'];
	$admission_fee=$program['fee'];
    $subject=$program['subject_string'];

	//$site->myprint_r($program);
	if($batch_id==-1){
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

else if(isset($_POST['student_list'])){
	$program_id=$_POST['student_list'];
	$batch_id=$_POST['batch_id'];
	$batch_id=($batch_id==-1)?0:$batch_id;
	$info= $student_ob->get_student_list($program_id,$batch_id);
   ?>

<table id="datatable" style="width: 100%">
	<tr>
		<td class="student_td_1">Student ID</td>
		<td class="student_td_1">Student Photo</td>
		<td class="student_td_1">Student Name</td>
		<td class="student_td_1">Nick Name</td>
		<td class="student_td_1">Batch Name</td>
		<td class="student_td_1">Father Name</td>
		<td class="student_td_1">Mother Name</td>
	</tr>
	<?php 
      foreach ($info as $key => $value) {
      	$id=$value['student_id'];
      	$value1=$value;

      	$value=$student[$id];
      	$name=$value['name'];
      	$father_name=$value['father_name'];
      	$mother_name=$value['mother_name'];
        $img=$value['photo'];
        $nick=$value['nick'];
        $batch_id=$value1['batch_id'];
        $batch_name=$batch[$batch_id]['name'];

	 ?>
	<tr class="tr_list" onclick="go_to_profile(<?php echo "$id"; ?>)">
		<td class="student_td_2"><?php echo "$id"; ?></td>
		<td class="student_td_2"><img src="<?php echo "$img"; ?>" class="img"/></td>
		<td class="student_td_2"><?php echo "$name"; ?></td>
		<td class="student_td_2"><?php echo "$nick"; ?></td>
		<td class="student_td_2"><?php echo "$batch_name"; ?></td>
		<td class="student_td_2"><?php echo "$father_name"; ?></td>
		<td class="student_td_2"><?php echo "$mother_name"; ?></td>
	</tr>
    <?php } ?>
</table>
<?php
}

else if(isset($_POST['get_id_card'])){
  $program_id=$_POST['get_id_card'];
  $batch_id=$_POST['batch_id'];
  $batch_id=($batch_id==-1)?0:$batch_id;
	
  $info= $student_ob->get_student_list($program_id,$batch_id);

  echo "<div id='print_area'>";
  $id_card->get_id_card($info);
  echo "</div></div>";

?>
<button onclick="print('print_area')">Print</button>
<?php
}


?>
<style type="text/css">

	.batch_td1{
		padding: 15px;
    	border-style: solid;
    	border-width: 1px;
    	font-weight: bold;
    	font-family: "Big Caslon";
    	border-color: #C6C9D1;
    	text-align: center;
	}

	.batch_td2{
		background-color: #ffffff;
		border-color: #C6C9D1;
		padding: 15px;
		text-align: center;
		font-weight: normal;
		border-style: solid;
		border-width: 1px;
	}
	.batch_td3{
		background-color: #ffffff;
		border-color: #C6C9D1;
		padding: 15px;
		font-weight: normal;
		border-style: solid;
		border-width: 1px;
	}
	.program_td{
		padding: 15px;
		width: 28%;
    	border-style: solid;
    	border-width: 1px;
    	font-weight: bold;
    	font-family: "Big Caslon";
    	border-color: #C6C9D1;
    
	}

	.batch_td1,.program_td{
		background-color: var(--bg-color);
		color: var(--font-color);
	}

	.student_td_1{
		padding: 20px;
		background-color: var(--bg-color);
		color: var(--font-color);
		border-style: solid;
    	border-width: 1px;
    	font-weight: bold;
    	text-align: center;
    	font-family: "Big Caslon";
    	border-color: #C6C9D1;
	}
	.student_td_2{
		padding: 10px;
		border-style: solid;
    	border-width: 1px;
    	font-weight: normal;
    	text-align: center;
    	font-family: "Big Caslon";
    	border-color: #C6C9D1;
	}
	.tr_list{
		cursor: pointer;
		padding: 15px;
		background-color: #ffffff;

	}
	.tr_list:hover{
		background-color: #eeeeee;
		color: #000000;
	}
	.img{
		height: 50px;
		width: 45px;
	}
</style>