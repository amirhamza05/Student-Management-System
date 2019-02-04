 
<link rel="stylesheet" type="text/css" href="page/student/student_list/css/style.css">
<script type="text/javascript" src="page/student/student_list/js/script.js"></script>
<script type="text/javascript" src="page/student/student_list/js/payment_script.js"></script>

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
            <select class="select" id="batch_select" name="options">
            	<option value="0">Select Batch</option>
            </select>
          </div>
          <div class="col-md-2">
          	<button class="btn_select" onclick="view_program()">View Program</button>
          </div>
    </div>
</div> 

<div style="padding: 10px;"></div>



<div id="program_dashboard">	</div>

