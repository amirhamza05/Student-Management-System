<?php

function seperate_date($value)
{
	$timestamp = strtotime($value);
	return date("d", $timestamp);
}

?>



<?php


$month = 11;
$year = 2018;

include 'connection.php';

$details = array();
$date_class = array();
$std_id = array();

$day = cal_days_in_month(CAL_GREGORIAN,$month,$year);
$first_date = "$year-$month-1";
$last_date = "$year-$month-$day";


for($i=0;$i<32;$i++){
	$date_class[$i] = 0;
}

$sql = "SELECT  COUNT(status) AS total FROM attendance WHERE attendance.date_class BETWEEN '$first_date' AND '$last_date';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total =  $row['total'];

$index = 0;

$sql = "SELECT  student_id FROM attendance WHERE attendance.date_class BETWEEN '$first_date' AND '$last_date';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	if(!in_array($row['student_id'], $std_id)){
		$details[$row['student_id']]['name'] = "jugal";
		array_push($std_id,$row['student_id']);
		for($i=1;$i<=$day;$i++){
			$details[$row['student_id']]['status'][$i] = 0;

		}
	}
	
}

$sql = "SELECT  student_id,status,date_class FROM attendance WHERE attendance.date_class BETWEEN '$first_date' AND '$last_date';";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	$d = (int)seperate_date($row['date_class']);
	$date_class[$d] = 1;
	$details[$row['student_id']]['status'][$d] = 1;
	/*$details[$d][3] = $row['student_name'];*/
}



?>

<div class="attend_area">
<table width="100%">
	<tr class="attend_tr">
		<td class="attend_td1" style="width: 80px">ID</td>
		<td class="attend_td1" style="width: 130px">Name</td>
		<?php for($i=1; $i<=$day; $i++){ ?>
		<td class="attend_td1" style="width: 5px"><?php echo "$i"; ?></td>
	    <?php } ?>
	    <td class="attend_td1" style="width: 10px">T.P.</td>
	    <td class="attend_td1" style="width: 10px">T.A.</td>		
	</tr>
	<?php
       for($j=0; $j<count($std_id); $j++){
       	$studentID = $std_id[$j];
       	$studentName = $details[$studentID]['name'];
    ?>

		<tr class="attend_tr">
			<td class="attend_td2" style="width: 80px;background-color: var(--bg-color);color: var(--font-color)"><?php echo $studentID; ?></td>
			<td class="attend_td2" style="width: 130px;background-color: var(--bg-color);color: var(--font-color)"><?php echo $studentName; ?></td>
			<?php 
				$present = 0;
				for($i=1; $i<=$day; $i++){
					$status = '';
					if($date_class[$i] == 1){
						if($details[$studentID]['status'][$i] == 1){
							$present++;
							$status = 'P';
						}else{
							$status = 'A';
						}
					}else{
						$status = '-';
					}

			?>
			<td class="attend_td2" style=""><?php echo $status; ?></td>
	    	<?php
	    	 }
	    	 $absent = $total - $present; 
	    	 ?>
	    	<td class="attend_td2" style="width: 10px; background-color: var(--bg-color);color: var(--font-color)"><?php echo $present;?></td>
	    	<td class="attend_td2" style="width: 10px; background-color: var(--bg-color);color: var(--font-color)"><?php echo $absent; ?></td>		
		</tr>

       	<?php } ?>
</table>

</div>
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

<?php $conn->close(); ?>
