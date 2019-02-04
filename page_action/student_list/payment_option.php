<?php

if(isset($_POST['payment_option_overview'])){
	$data=$_POST['payment_option_overview'];
    
    $program_id=$data['program_id'];
    $batch_id=$data['batch_id'];
    $batch_name=($batch_id==0)?"All Batch":$batch[$batch_id]['name'];
    $type=$data['payment_type'];

    $payment_type="Admission Payment";
    $month="-";
    $year="-";

    if($type==2){
    	$payment_type="Monthly Payment";
    	$year=$data['year'];
    	$month=$set_payment_ob->get_month_name($data['month']);
    }

    
  	$info=$payment->program_payment_info($data);
  	
	over_view_css();
    get_program_overview_percent_css(75);
     echo "<div class='row'>";

     ?>
     <div class="col-md-7">
     	<table width="100%">
     		<tr>
     			<td class="payment_td_1">Program Name: </td>
     			<td class="payment_td_2"><?php echo $program[$program_id]['name']; ?></td>
     		</tr>
     		<tr>
     			<td class="payment_td_1">Batch Name: </td>
     			<td class="payment_td_2"><?php echo "$batch_name"; ?></td>
     		</tr>
     		<tr>
     			<td class="payment_td_1">Payment Type: </td>
     			<td class="payment_td_2"><?php echo "$payment_type"; ?></td>
     		</tr>
     		<tr>
     			<td class="payment_td_1">Year: </td>
     			<td class="payment_td_2"><?php echo "$year"; ?></td>
     		</tr>
     		<tr>
     			<td class="payment_td_1">Month: </td>
     			<td class="payment_td_2"><?php echo "$month"; ?></td>
     		</tr>

     	</table>
     </div>
    <div class="col-md-5">
    	<div class="payment_overvirw_info " style="align-content: center;margin-bottom: 15px">
    		<center>
    			<span style="margin-top: 85px;"></span>
    			<span style="font-size: 80px;"><?php echo $info['paid_percent']; ?></span><span style="font-size: 60px">%</span>
    			<div style=" margin-top: -22px;"></div>
    			<span style="font-size: 14px;">Payment Completed</span>
    		</center>
           
     	</div>
    </div>
    <?php
  	 make_dive_payment("Total Student",$info['total_student'],"fa fa-users");
  	 make_dive_payment("Total paid student",$info['paid_student'],"fa fa-users");
  	 make_dive_payment("Total due student",$info['due_student'],"fa fa-users");
  	 make_dive_payment("total fee (Tk)",$info['total_fee'],"fa fa-inr");
  	 make_dive_payment("total Pay (Tk)",$info['total_pay'],"fa fa-eur");
  	 make_dive_payment("total due (Tk)",$info['total_due'],"fa fa-gbp");
    echo "</div>";

}



if(isset($_POST['program_overview_send_sms'])){
	$data=$_POST['program_overview_send_sms'];
	$info=$payment->get_set_payment_list($data);
	$status=$data['status'];
	$receiver=$data['receiver'];
	
	$type=$data['payment_type'];
	$program_id=$data['program_id'];
	$program_name=$program[$program_id]['name'];

	$last_payment_date1=$data['last_payment_date'];
	$last_payment_date=date("d M Y", strtotime($last_payment_date1));
    $within=($last_payment_date1=="")?"":" within $last_payment_date";

    if($type==2){
    	$month=$data['month'];
    	$year=$data['year'];
    	$month_name=$set_payment_ob->get_month_name($month);
    }
    $msg_f=$db->msg;

    $sms_list=array();
	
	foreach ($info as $key => $value) {
		$p_status=$value['status'];
		$fee=$value['total_fee'];
		$due=$value['total_due'];
		$student_id=$value['student_id'];
		$student_name=$student[$student_id]['nick'];
		if($p_status==$status || $status=="All"){
			$msg="Dear $student_name,\n";
			if($type==1){
				$msg.="Your admission fee $fee tk for '$program_name'";
			}
			else{
				$msg.="Your monthly fee $fee tk for '$month_name-$year' in '$program_name'";
			}

			if($p_status=="Paid"){
				$msg.=" is sucessfully completed.";
			}
			else{
				$msg.=" is not completed. Your due amount $due tk. Please pay your due amount$within.";
			}

			$msg.="\n\n$msg_f";

			$mobile_number_list=$sms->get_student_mobile_number($student_id,$receiver);
	    		foreach ($mobile_number_list as $key => $value1) {
	    		$number=$value1;
	    		$res=$sms->make_sms_array($value1,$msg);
    			array_push($sms_list, $res);
	    	}
		}
	}

	$site->myprint_r($sms_list);
	$sms->send_sms($sms_list);
}

if(isset($_POST['payment_status_sms'])){
	over_view_css();
	?>

<div style="height: 180px;padding-top: 40px;">
<div class="row">
	
	<div class="col-md-4">
		<b>Select Payment Type</b>
		<select class="form-control" id="sms_payment_type">
			<option value="0">Select Payment Status Type</option>
			<option value="All">Paid And Due All Student</option>
			<option value="Paid">Paid Student</option>
			<option value="Due">Due Student</option>
		</select>
	</div>
	<div class="col-md-4">
		<b>Select Last Date Of Payment</b>
		<input type="date" class="form-control" id="last_payment_date" name="">
	</div>
	<div class="col-md-4">
		 <?php $sms->get_sms_recever_option(); ?>
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 15px;">
		<button class="btn_send_sms" onclick="program_overview_send_sms()">Send SMS</button>
	</div>
</div>
</div>

<div id="sms_info_area"></div>

<?php

}

if(isset($_POST['get_list_payment'])){
  $data=$_POST['get_list_payment'];
  $status=$data['status'];

  $info=$payment->get_set_payment_list($data);

  get_payment_status_list($site,$student,$info,$status,$program,$batch);
}




function get_payment_status_list($site,$student,$payment_list,$status_per,$program,$batch){
	need_student_list_css();
	
	?>
	<button class="btn btn-primary hidden-print pull-right" onclick="print('print_area')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
<div id="print_area">
<?php need_student_list_css();
	$site->header_info_area();
?>
<div class="header_area">
	<?php echo "$status_per Student List"; ?>

</div>
    <table width="100%" style="border-collapse: collapse;">
        <tr>
        	<td class="student_list_td1">Status</td>
        	<td class="student_list_td1">Student ID</td>
        	<td class="student_list_td1">Student Name</td>
        	<td class="student_list_td1">Total Fee</td>
        	<td class="student_list_td1">Total Pay</td>
        	<td class="student_list_td1">Total Due</td>
        	
        </tr>
        <?php foreach ($payment_list as $key => $value) {
             $student_id=$value['student_id'];
             $status=$value['status'];
             $payment_id=$value['payment_id'];
             if($status_per!=$status && $status_per!="All")continue;
             $color=($status=="Paid")?"#CDFFD8":"#FFDCE0";
         ?>
         <tr class="tr_list"  onclick="view_payment_history(<?php echo "$payment_id"; ?>)">
         	<td class="student_list_td2 status" style="background-color: <?php  echo "$color";?>"><?php echo $value['status']; ?></td>
        	<td class="student_list_td2"><?php echo $value['student_id']; ?></td>
        	<td class="student_list_td2"><?php echo $student[$student_id]['name']; ?></td>
        	<td class="student_list_td2"><?php echo $value['total_fee']; ?></td>
        	<td class="student_list_td2"><?php echo $value['total_pay']; ?></td>
        	<td class="student_list_td2"><?php echo $value['total_due']; ?></td>
        	
        </tr>

        <?php } ?>
    	
    </table>

</div>
<?php 

}

function make_dive_payment($name,$number,$icon){

?>

<div class="col-md-4">
                        <div class="circle-tile">
                            
                            <div class="circle-tile-heading dark-blue">
                                    <i class="<?php echo $icon; ?> fa-fw fa-3x"></i>
                            </div>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    <?php echo "$name"; ?>
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$number"; ?>
                                    <span id="sparklineA"></span>
                                </div>
                                
                            </div>
                        </div>
  </div>

<?php } ?>

<?php function over_view_css(){ ?>

<style type="text/css">


.btn_send_sms{
	background-color: var(--bg-color);
	color: var(--font-color);
	border-width: 0px;
	width: 100%;
	padding: 8px;
	border-radius: 10px;
}
.btn_send_sms:hover{
	font-size: 16px;
}
.btn_send_sms:focus{
	outline: none;
}
.payment_td_1{
	background-color: var(--bg-color);
	padding: 8px;
	width: 160px;
	color: var(--font-color);
	border: 1px solid #C6C9D1;
	text-align: right;
}

.payment_td_2{
	border:1px solid #C6C9D1;
	padding: 8px;
}

.payment_overvirw_info{
	background-color: var(--bg-color);
	height: 180px;
	margin-bottom: 10px;
	padding-top: 20px;
	margin-top: 5px;
	color: var(--font-color);
	border-radius: 200px;
}
.percent{
	text-align: center;
	
	font-size: 40px;

}

.progress_custom{
	height: 40px !important;
	margin-top: 20px;
	background-color: #F1F1F1;

}
.bar_custom{
	background-color: var(--bg-color);
	padding: 10px;
	font-size: 17px;
	border-radius: 2px;
	border-width: 0px 0px 2px 2px;
	border-color: 
}

.dashboard_box{
    margin-top: 20px;
}
.dashboard_box .box_header{
   background-color: var(--bg-color);
   color: var(--font-color);
   padding: 10px;
}
.dashboard_box .box_body{
   height: auto;
   border-width: 0px 1px 1px 1px;
   border-color: var(--bg-color);
}


    @media (min-width: 768px){
.circle-tile {
    margin-bottom: 30px;
}
}

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}

.circle-tile-heading {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto -40px;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
    color: #fff;
    transition: all ease-in-out .3s;
}

/* -- Background Helper Classes */

/* Use these to cuztomize the background color of a div. These are used along with tiles, or any other div you want to customize. */

 .dark-blue {
    background-color: var(--bg-color);
}

.green {
    background-color: #16a085;
}

.blue {
    background-color: #2980b9;
}

.orange {
    background-color: #f39c12;
}

.red {
    background-color: #e74c3c;
}

.purple {
    background-color: #8e44ad;
}

.dark-gray {
    background-color: #7f8c8d;
}

.gray {
    background-color: #95a5a6;
}

.light-gray {
    background-color: #bdc3c7;
}

.yellow {
    background-color: #f1c40f;
}

/* -- Text Color Helper Classes */

 .text-dark-blue {
    color: #34495e;
}

.text-green {
    color: #16a085;
}

.text-blue {
    color: #2980b9;
}

.text-orange {
    color: #f39c12;
}

.text-red {
    color: #e74c3c;
}

.text-purple {
    color: #8e44ad;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}



.circle-tile-heading .fa {
    line-height: 80px;
}

.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-description {
    text-transform: uppercase;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}

.circle-tile-number {
    padding: 5px 0 15px;
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
}

.circle-tile-footer {
    display: block;
    padding: 5px;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.1);
    transition: all ease-in-out .3s;
}

.circle-tile-footer:hover {
    text-decoration: none;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.2);
}
</style>

<?php } ?>

<?php function get_program_overview_percent_css($percent){ ?>
<style type="text/css">
	.progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

</style>

<?php }?>