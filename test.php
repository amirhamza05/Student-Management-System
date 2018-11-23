<?php
$array=array();

$date="2018-02-02";
$date=explode("-", $date);
print_r($date);

$y=$date[0];
$m=$date[1];
$d=$date[2];

$sy=$y*12*30*24*3600;
$sm=$m*30*24*3600;
$sd=$d*24*3600;

$s=$sy+$sm+$sd;

echo "$s ";


array_push($array, 1234567897);
array_push($array, 123456784);
array_push($array, 123456784);
array_push($array, $s);

$key = array_search($s, $array); // $key = 2;
//$key = array_search('redd', $array);   // $key = 1;
echo "$key";
?>

<script type="text/javascript">

	function test(){
		alert("working");
	}
	
</script>