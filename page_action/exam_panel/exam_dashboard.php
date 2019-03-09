<?php

if(isset($_POST['get_dashboard'])){
	$category_id=$_POST['get_dashboard'];
	$info=$exam->get_exam_category($category_id);
	$info=$info[0];
	$site->myprint_r($info);
}



?>