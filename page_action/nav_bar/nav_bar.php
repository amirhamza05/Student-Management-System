<?php

if(isset($_POST['nav_bar_student'])){
	?>
	<link rel="stylesheet" type="text/css" href="style/css/nav_bar.css">

			<a href="add_student.php">
            <button class="btn_tab" style="margin-left: 15px;"><i class="fa fa-home"></i> Add Student</button>
            </a>
            <button class="btn_tab"><i class="fa fa-home"></i> View Student</button>
            <button class="btn_tab"><i class="fa fa-home"></i> Payment Receive</button>

	<?php 
}


?>