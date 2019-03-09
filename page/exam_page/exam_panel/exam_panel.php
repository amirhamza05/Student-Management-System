<script type="text/javascript" src="page/exam_page/exam_panel/js/exam_panel.js"></script>
<script type="text/javascript" src="page/exam_page/exam_panel/js/add_result_script.js"></script>

<center><button class="btn" style="outline: none;" onclick="view_exam_panel()">View Panel</button></center>

 <div class="row">
    
        <div class="dropdown" style="">
          <div class="col-md-2"></div>
          <div class="col-md-3">
            <select onchange="program_select()" class="select" id="program_select" name="options">
            	<option value="0">Select Program</option>
            	<?php $program_ob->select_program(); ?>
            </select>
          </div>

          <div class="col-md-3">
            <select class="select" id="exam_category_select" name="options">
            	<option value="-1">Select Exam Category</option>
            </select>
            <div id="select_loader"></div>
          </div>
          <div class="col-md-2">
          	<button class="btn_select" onclick="view_exam_panel()">View Program</button>
          </div>
    </div>
</div> 

<div style="margin-bottom: 15px;"></div>
<div id="view_exam_panel"></div>