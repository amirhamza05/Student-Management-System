<?php

include 'connection.php';

$details  = array(
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>200),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>200),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	 array('mbl' =>"01780520287",'msg_length'=>40,'no_of_msg'=>2),
	);

$keys = array_keys($details);
$total_current_msg = 0;
for($i = 0; $i < count($details); $i++) {
	$total_current_msg+=$details[$keys[$i]]['no_of_msg'];
}

$sql = "SELECT SUM(cnt) AS count FROM dewMessage";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_current_msg+= $row['count'];

$sql = "SELECT SUM(balance) AS count FROM addbalance WHERE '2018-12-04' BETWEEN addbalance.date AND addbalance.expair_date";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($total_current_msg<=$row['count']){
	echo "Yes";
}else{
	echo "No";
}

?>