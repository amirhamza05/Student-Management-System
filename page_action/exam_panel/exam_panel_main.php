<?php

if(isset($_POST['program_select'])){
	$program_id=$_POST['program_select'];
	echo "<option value='-1'>Select Exam Category</option>";
	$exam->get_exam_category_option($program_id);


}

if(isset($_POST['view_exam_panel'])){
$category_id=$_POST['view_exam_panel'];


?>
<link rel="stylesheet" type="text/css" href="page_action/exam_panel/css/style.css">
<div class="exam_panel_box">
	<div class="row no-gutter">
		<div class="col-md-3">
			<div class="exam_panel_left">
				<div class="panel_title">Exam Panel</div>
				<div class="panel_left_option">
					<div class="panel_option_link" onclick="get_dashboard()"><span class="glyphicon glyphicon-list-alt icon_class"></span> Exam Dashboard</div>
					<div class="panel_option_link" onclick="admit_card()"><span class="glyphicon glyphicon-flag icon_class"></span> Exam Admit Card</div>
					<div class="panel_option_link" onclick="get_exam_list()"><span class="glyphicon glyphicon-flag icon_class"></span> Exam List</div>
					<div class="panel_option_link"><span class="glyphicon glyphicon-pencil icon_class"></span> Result Report</div>
					<div class="panel_option_link"><span class="glyphicon glyphicon-list-alt icon_class"></span> Add Result</div>
					<div class="panel_option_link"><span class="glyphicon glyphicon-list-alt icon_class"></span> Link</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="exam_panel_right">
				<div class="panel_title" id="panel_title"></div>
				<div class="exam_panel_body" id="exam_panel_body">
					<center>
						<input type="number" id="total" name="">
						<button class="btn" onclick="add_result()">Add Result</button>	
						<button class="btn" onclick="save_result()">Save Result</button>	
					</center>
					<div id="add_result">
					
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php } ?>