<?php

$path="page_action/exam_panel/exam_control_panel/";
$file=array();
array_push($file, "overview.php");
array_push($file, "exam_dashboard.php");



foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}


?>