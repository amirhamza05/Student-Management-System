<?php

$path="page_action/exam_panel/";
$file=array();
array_push($file, "exam_panel_main.php");
array_push($file, "add_result.php");
array_push($file, "admit_card.php");

foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}


?>