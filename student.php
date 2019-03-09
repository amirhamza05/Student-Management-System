<?php
 		include "layout/header.php";
 		$file="404.php";
 		if(isset($_GET['page'])){
 			$page=$_GET['page'];
 			if($page=="student_list")$file="page/student/student_list1.php";
 			else if($page=="add_student")$file="page/student/add_student.php";
 			else if($page=="attendence")$file="page/attend/attend.php";
 		}
 		include "$file";
 		//include "page/student/student_list.php";
 		include "layout/footer.php";
  ?>


