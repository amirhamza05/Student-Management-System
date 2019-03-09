<?php

include "layout/header.php";

$ok=0;

if(isset($_GET['page'])){
	$page=$_GET['page'];
	if($page=="exam_category"){
		$page="page/exam_page/exam_category/exam_category.php";
		$ok=1;
	}
	else if($page=="exam_panel"){
		$page="page/exam_page/exam_panel/exam_panel.php";
		$ok=1;
	}
}
if($ok==0)$page="404.php";
include "$page";

include "layout/footer.php";


?>