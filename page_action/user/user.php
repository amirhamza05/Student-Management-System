<?php 

$path="page_action/user/";
$file=array();

array_push($file, "user_profile.php");
array_push($file, "user_list.php");
array_push($file, "user_profile_body.php");


foreach ($file as $key => $value) {
	$file_name="$path$value";
	include $file_name;
}


?>