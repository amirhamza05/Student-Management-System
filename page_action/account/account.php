<?php

$path="page_action/account/";
$file=array();
array_push($file, "expence.php");
array_push($file, "income.php");

foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}

?>