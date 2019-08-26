<?php

include 'layout/header_script.php';

if( isset($_SESSION['user'])!="" ){
	include "page_action/exam_panel/exam_panel.php";
}

else echo "Api Request Is Not Found";

?>