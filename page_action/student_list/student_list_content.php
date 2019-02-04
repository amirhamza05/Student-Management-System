<?php

if(isset($_POST['student_list'])){
	$info=$_POST['student_list'];
	$program_id=$info['program_id'];
	$batch_id=$info['batch_id'];
	$info= $student_ob->get_student_list($program_id,$batch_id);
	
	
   ?>
   <button class="btn btn-primary hidden-print pull-right" onclick="print('print_area')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
<div id="print_area">
<?php need_student_list_css();
	$site->header_info_area();
?>
<table id="datatable" style="width: 100%">
	<tr>
		<td class="student_list_td1">Admit ID</td>
		<td class="student_list_td1">Student ID</td>
		<td class="student_list_td1">Student Name</td>
		<td class="student_list_td1">Batch Name</td>
		<td class="student_list_td1">Mobile</td>
		<td class="student_list_td1">Admit Date</td>
		
	</tr>
	<?php 
      foreach ($info as $key => $value) {

      	$admit_id=$value['id'];
      	$admit_date=$db->date_to_string($value['admit_date']);
      	$id=$value['student_id'];
      	$value1=$value;
      	$value=$student[$id];
      	$name=$value['name'];
      	$father_name=$value['father_name'];
      	$mother_name=$value['mother_name'];
        
        $father_mobile=$value['father_mobile'];
  		$father_mobile=(strlen($father_mobile)<11)?"":$father_mobile;
  		$mother_mobile=$value['mother_mobile'];
  		$mother_mobile=(strlen($mother_mobile)<11)?"":$mother_mobile;

  		$mobile=$father_mobile.(($mother_mobile=="")?"":", ".$mother_mobile);
  		$mobile=($mobile=="")?"-":$mobile;

        $img=$value['photo'];
        $nick=$value['nick'];
        $batch_id=$value1['batch_id'];
        $batch_name=$batch[$batch_id]['name'];
	 ?>
	
	<tr class="tr_list" onclick="view_student(<?php echo "$id"; ?>)">
		<td class="student_list_td2"><?php echo "$admit_id"; ?></td>
		<td class="student_list_td2"><?php echo "$id"; ?></td>
		<td class="student_list_td2"><?php echo "$name ($nick)"; ?></td>
		<td class="student_list_td2"><?php echo "$batch_name"; ?></td>
		<td class="student_list_td2"><?php echo "$mobile"; ?></td>
		<td class="student_list_td2"><?php echo "$admit_date"; ?></td>
	</tr>
	
    <?php } ?>
</table>
</div>
<?php
}

if(isset($_POST['view_student'])){
	$student_id=$_POST['view_student'];
	$student_ob->get_student_profile($student_id);
?>
 <button onclick="reload_profile(<?php echo "$student_id"; ?>)" title='Reload Profile' class="btn btn_profile" ><span class="glyphicon glyphicon-repeat"></span></button>
<?php

 }

function need_student_list_css(){

?>

<style type="text/css">
.header_area{
	font-size: 16px;
	text-align: center;
	font-weight: bold;
	margin-bottom: 5px;
}
	.student_list_td1{
		background-color: #EFF0F2;
		border: 1px #C6C9D1 solid;
		padding: 15px;
		font-weight: bold;
		text-align: center;
	}
	.student_list_td2{
		border: 1px #C6C9D1 solid;
		padding: 10px;
		text-align: center;
	}

	@media print 
	{

    @page {
    	size: A4;
  		margin: 0;
  		table { page-break-after:auto,border-collapse: collapse; }
  		tr    { page-break-inside:avoid; page-break-after:auto;visibility: collapse;}
  		td    { page-break-inside:avoid; page-break-after:auto }
  		thead { display:table-header-group }
  		tfoot { display:table-footer-group }
		}
		
	}

	.status{
		font-size: 14px;
		font-weight: bold;
	}
</style>

<?php } 



?>