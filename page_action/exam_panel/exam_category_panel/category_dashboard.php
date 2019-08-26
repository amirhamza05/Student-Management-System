<?php

if(isset($_POST['program_select'])){
	$program_id=$_POST['program_select'];
	echo "<option value='-1'>Select Exam Category</option>";
	$exam->get_exam_category_option($program_id);
}

if(isset($_POST['view_exam_panel'])){
$category_id=$_POST['view_exam_panel'];
need_css();
?>
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

<?php } 

function need_css(){
?>

<style type="text/css">
	.exam_panel_box{

	}
	.exam_panel_left{
		background-color: #ffffff;
		height: auto;
		border-radius: 5px 5px 5px 5px;
		margin-bottom: 10px;
	}
	.exam_panel_right{
		background-color: #ffffff;
		height: auto;
		border-radius: 5px 5px 5px 5px;
	}
	.panel_title{
		font-size: 20px;
		text-align: center;
		padding: 7px;
		font-weight: bold;
		color: var(--font-color);
		background-color: var(--bg-color);
		border-radius: 5px 5px 0px 0px;
	}
	.panel_left_option{
		
	}
	.panel_option_link{
		font-size: 16px;
		font-weight: bold;
		color: #474747;
		cursor: pointer;
		font-family:sans-serif;
		padding: 10px 5px 10px 15px;
	}
	.panel_option_link:hover{
		background-color: #f5f5f5;
		color: var(--bg-color);
		border: 1px solid var(--bg-color);
		border-width: 0px 0px 0px 5px;
	}
	.icon_class{
		position: relative;
  		top: 4px;
  		left: 1px;
  		font-size: 20px;
	}
	.no-gutter > [class*='col-'] {
    	padding-right:1;
    	padding-left: 1;
	}
	.exam_panel_body{
		padding: 5px;
	}

</style>

<?php } ?>