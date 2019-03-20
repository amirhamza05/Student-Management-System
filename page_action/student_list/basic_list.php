<?php


if (isset($_POST['program_select'])) {
	$program_id=$_POST['program_select'];
	echo "<option value='0'>Select All Batch</option>";
	$program_ob->select_batch_option($program_id);
}


if(isset($_POST['view_program'])){

?> 
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12">
        <div style="border-width: 0px; background-color: #C6C9D1" class="panel with-nav-tabs panel-primary animated slideInDown">
            <div class="header_box">
                <ul class="nav nav-tabs" style="border-width: 0px;">
                    <li class="active">
                      <a href="#tab1primary" data-toggle="tab" onclick="get_action('program_overview')">
                      <span class="glyphicon glyphicon-eye-open"></span> Program Overview
                      </a>
                    </li>
                    <li class="" onclick="get_action('student_list')"><a href="#tab2primary" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span> Student List</a></li>
                    <li class="" onclick="get_action('id_card')"><a href="#tab3primary" data-toggle="tab"><span class="glyphicon glyphicon-compressed"></span> Student ID Card</a></li>
                    <li class="" onclick="get_action('payment')"><a href="#tab3primary" data-toggle="tab"><span class="glyphicon glyphicon-usd"></span> Student Payment</a></li>
                </ul>
            </div>
  <div class="box_body" id="box_body">
      
 </div>

 </div>
</div>
</div>
<?php	
}


?>