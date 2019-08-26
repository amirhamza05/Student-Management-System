<?php

if(isset($_POST['check_id'])){
	$student_id=$_POST['check_id'];

	$data=array();
	$error="not_found";

	if(isset($student[$student_id])){
		$error="found";
	}
	$data['error']=$error;
	$data=json_encode($data);
	echo "$data";
}

if(isset($_POST['add_result'])){
	$number=$_POST['add_result'];
	if($number<=0 || $number==""){
		echo "Please Select Result Type";
		return;
	}
	$percent=80/$number;

?>

<table width="100%">
	<tr>
		<td class="add_result_td1" style="width: 5%">#</td>
		<td class="add_result_td1" style="width: 20%">Student ID</td>
		<?php 
			for($i=0; $i<$number; $i++){ 
				echo "<td class='add_result_td1' style='width: $percent%'>$i</td>";
			}
		?>
	</tr>
	<?php for($j=1; $j<30; $j++){ ?>
	<tr class="add_result_body_tr">
		<td class="add_result_body_td2" style="width: 5%;" id="check_<?php echo $j; ?>">
			
		</td>
		<td class="add_result_body_td2" style="width: 20%">
			<input onkeyup="check_id(<?php echo $j; ?>)" class='add_result_input' id="student_id_<?php echo $j; ?>" type='number' placeholder=''>
		</td>
		<?php 
			for($i=0; $i<$number; $i++){ 
				echo "<td class='add_result_body_td2' style='width: $percent%'><input class='add_result_input' placeholder='' type='number'></td>";
			}
		?>
	</tr>
	<?php } ?>
</table>

<style type="text/css">
	.add_result_td1{
		background-color: #EFF0F2;
		padding: 10px;
		text-align: center;
		font-weight: bold;
		border: 1px #C6C9D1 solid;
	}
	.add_result_input{

		height: 100%;
		padding: 6px;
		width: 100%;
		font-size: 15px;
		font-weight: bold;
		border-radius: 0px;
		color: #7C7C7C;
		border: 0px solid #7C7C7C;
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		outline: none;
	}
	
	.add_result_body_td2{
		text-align: center;
		border: 1px solid #C6C9D1;
	}
	.add_result_body_tr:hover .add_result_input{
		background-color: #f5f5f5;
	}
	.add_result_body_tr:hover {
		background-color: #f5f5f5;
	}
	.icon{
		font-size: 18px;
		font-weight: bold;
	}
</style>
<?php

}

?>