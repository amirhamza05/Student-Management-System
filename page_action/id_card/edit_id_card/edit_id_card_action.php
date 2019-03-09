<?php

if(isset($_POST['load_id_card'])){
  $info=$student_ob->get_admit_program_info(15);
  $data=array();
  array_push($data, $info);
  
 ?>
 <div id="print_area">
  <?php  $id_card->get_id_card($data); ?>
</div>

 <?php
}
if(isset($_POST['click_option'])){
	$option_name=$_POST['click_option'];

?>

 <div class="wrapperr">
    <div class="box">
      <div id="task1" class="task" draggable="true">
         task 1
      </div>
      <div id="task2" class="task" draggable="true">
         task 2
      </div>
      <div id="task3" class="task" draggable="true">
         task 3
      </div>
    </div>
    
    <div class="box">
    </div>
  </div>

<div class="row">
	<div class="col-md-6">
		<div class="option_header">Select Option</div>
		<div class="option_area wrapper1" ondrop="ondrop(event)">
			<div class="option_btn" draggable="true" ondragstart="drag(event)" 
			>Name1</div>
			<div class="option_btn task1">Name</div>
			<div class="option_btn task1">Name</div>
			<div class="option_btn task1">Name</div>
			<div class="option_btn task1">Name</div>
			<div class="option_btn task1">Name</div>
			<div class="option_btn task1">Name</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="option_header">Select Option</div>
		<div class="option_area" id="drag1" draggable="true" ondragstart="drag(event)">
			

		</div>
	</div>
</div>
	



<style type="text/css">
	.option_area{
		background-color: #ffffff;
		border: 1px dashed #eeeeee;
		padding: 15px;
	}
	.option_header{
		background-color: #eeeeee;
		padding: 5px;
	}
	.option_btn{
		padding: 8px;
		background-color: #f5f5f5;
		cursor: pointer;
		border: 1px dashed #eeeeee;
		margin-bottom: 5px;
	}
	.option_btn:hover{
		background-color: #eeeeee;
	}
</style>
<!-- <input type="range" min="1" max="100" value="50" class="slider" id="myRange"> -->

<?php

}


?>