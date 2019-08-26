<?php

$path="page_action/exam_panel/exam_category_panel/";
$file=array();
array_push($file, "category_dashboard.php");
array_push($file, "exam_list.php");

foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}


?>