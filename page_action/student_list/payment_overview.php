<?php

if(isset($_POST['select_payment_year'])){
	$info=$_POST['select_payment_year'];
	$program_id=$info['program_id'];
	$year=$info['year'];
	if($year!=-1){
        $set_payment_ob->get_program_payment_month_option($program[$program_id],$year); 
    }
   else echo "<option value='-1'>Select Month</option>";
	
}


if(isset($_POST['payment'])){
	$info=$_POST['payment'];
	$program_id=$info['program_id'];
	$program_type=$program[$program_id]['type'];
?> 
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-3">
		<select class="form-control" id="payment_type" onchange="select_payment_type()">
			<option value="-1">Select Payment Type</option>
			<option value="1">Admission Fee</option>
		<?php if($program_type==2){ ?>	<option value="2">Monthly Fee</option> <?php } ?>
		</select>
	</div>
	<div id="payment_month_area">
		
	</div>
	
</div> 

<div id="payment_panel_body" style="margin-top: 15px;"></div>

<?php	
}

if(isset($_POST['select_monthly_program'])){
	$program_id=$_POST['select_monthly_program'];
	?>
	<div class="col-md-3">
		<select class="form-control" id="payment_year" onchange="select_payment_year()">
			<?php $set_payment_ob->get_program_payment_year_option($program[$program_id]); ?>
		</select>
	</div>
	<div class="col-md-3">
		<select class="form-control" id="payment_month" onchange="select_payment_month()">
			<option value="-1">Select Payment Type</option>
		</select>
	</div>

<?php

}

if(isset($_POST['payment_panel'])){
	payment_overview_css();
?>
	<div class="row">
  	<div class="col-md-3">
  		<div class="payment_btn_area">
  			<button class="payment_overview_btn" onclick="get_payment_option('payment_option_overview')">Payment Overview</button><br/>
  			<button class="payment_overview_btn" onclick="get_payment_option('payment_option_status')">Payment Status</button><br/>
  			<button class="payment_overview_btn" onclick="get_list_payment('All')">Paid And Due Student List</button><br/>
  			<button class="payment_overview_btn" onclick="get_list_payment('Paid')">Paid Student List</button><br/>
  			<button class="payment_overview_btn" onclick="get_list_payment('Due')">Due Student List</button><br/>
  			<button class="payment_overview_btn" onclick="get_payment_option('payment_status_sms')">Payment Status SMS</button>
  		</div>
  	</div>
  	<div class="col-md-9">
  		<div class="payment_overview_header" id="payment_overview_header">Payment Overview</div>
  		<div class="payment_overview_body" id="payment_overview_body">
  			
  		</div>
  	</div>
  </div>

 <?php 
}

if(isset($_POST['payment_option_status'])){
	$data=$_POST['payment_option_status'];
    echo "<h1>This System Working</h1>";
	$payment_status_list=$payment->get_payment_status_list($data);
}

function payment_overview_css(){

?>

<style type="text/css">
	
.payment_overview_btn{
	width: 100%;
	background-color: var(--bg-color);
   	color: var(--font-color);
	padding: 12px 3px 12px 3px;
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 2px;
	border-radius: 10px;
	border-width: 0px;
}
.payment_overview_body{
	background-color: #ffffff;
	height: auto;
	border: 1px solid #C6C9D1;
	padding: 10px;
}
.payment_overview_header{
   background-color: var(--bg-color);
   color: var(--font-color);
   padding: 15px;
   border-radius: 5px 5px 0px 0px;
   font-weight: bold;
}
.payment_btn_area{
	margin-top: 15px;
}

.payment_overview_btn:hover{
  font-size: 16px;
}

.payment_overview_btn:focus{
  outline: none;
   border: none;
}

</style>

<?php } ?>