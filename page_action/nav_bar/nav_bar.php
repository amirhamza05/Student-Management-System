<?php
include "page_action/nav_bar/chat_system.php";
include "page_action/nav_bar/sql_editor.php";
include "page_action/nav_bar/theme.php";



if(isset($_POST['student_info_nav_bar'])){
	need_css();
	?>

			<a href="add_student.php">
            <button class="btn_tab_under"><i class="fa fa-plus"></i> Add Student</button>
            </a>
            <button class="btn_tab_under" onclick="nav_bar_student_action(1)"><i class="fa fa-search	"></i> Find Student</button>
            <button class="btn_tab_under" onclick="nav_bar_student_action(2)"><i class="fa fa-usd"></i> Payment Receive</button>

	<?php 
}

if(isset($_POST['nav_bar_student_action'])){
	$per=$_POST['nav_bar_student_action'];
	$btn=($per==1)?"View Student":"Receive Payment";
	need_css();
?>
    <input type="text" class="input_style" placeholder="Enter Student ID" name="" id="student_id">
    <button class="btn_tab_under" onclick="nav_bar_student_final_action(<?php echo $per; ?>)"><?php echo $btn; ?></button>

<?php

}

if(isset($_POST['check_student_id'])){
	$id=$_POST['check_student_id'];
    $info=array();
	$info['status']=0;
	if(isset($student[$id]))$info['status']=1;
    $info=json_encode($info);
    echo "$info";
}

if(isset($_POST['sms_state_nav'])){
	$info=$sms->sms_balance();
	$total_send=$info['total_send'];
	$total_balance=$info['balance'];

	$sms_send_data=$graph->get_last_sms_data(7);
	$info=json_decode($sms_send_data,true);
	$today_send=0;
	$week_sms_send=0;
	foreach ($info as $key => $value) {
		$val=$value['y'];
		$today_send=$val;
		$week_sms_send+=$val;
	}

	
	need_css();
	?>
<div class="row">
	<div class="col-lg-6 col-sm-6">
	    <div class="circle-tile">
	            <div class="circle-tile-heading dark-blue">
	                <i class="fa fa-tasks fa-fw fa-3x"></i>
	            </div>
	       
	        <div class="circle-tile-content dark-blue">
	            <div class="circle-tile-description text-faded">
	                Total Send
	            </div>
	            <div class="circle-tile-number text-faded">
	                <?php echo "$total_send"; ?>
	                <span id="sparklineB"></span>
	            </div>
	            
	        </div>
	    </div>
	</div>
	<div class="col-lg-6 col-sm-6">
	    <div class="circle-tile">
	            <div class="circle-tile-heading dark-blue">
	                <i class="fa fa-tasks fa-fw fa-3x"></i>
	            </div>
	       
	        <div class="circle-tile-content dark-blue">
	            <div class="circle-tile-description text-faded">
	                Total Balance
	            </div>
	            <div class="circle-tile-number text-faded">
	                <?php echo "$total_balance"; ?>
	                <span id="sparklineB"></span>
	            </div>
	            
	        </div>
	    </div>
	</div>
	<div class="col-lg-6 col-sm-6">
	    <div class="circle-tile">
	            <div class="circle-tile-heading dark-blue">
	                <i class="fa fa-tasks fa-fw fa-3x"></i>
	            </div>
	       
	        <div class="circle-tile-content dark-blue">
	            <div class="circle-tile-description text-faded">
	                Today Total Send
	            </div>
	            <div class="circle-tile-number text-faded">
	                <?php echo "$today_send"; ?>
	                <span id="sparklineB"></span>
	            </div>
	            
	        </div>
	    </div>
	</div>
	<div class="col-lg-6 col-sm-6">
	    <div class="circle-tile">
	            <div class="circle-tile-heading dark-blue">
	                <i class="fa fa-tasks fa-fw fa-3x"></i>
	            </div>
	       
	        <div class="circle-tile-content dark-blue">
	            <div class="circle-tile-description text-faded">
	                This Week Total Send
	            </div>
	            <div class="circle-tile-number text-faded">
	                <?php echo "$week_sms_send"; ?>
	                <span id="sparklineB"></span>
	            </div>
	            
	        </div>
	    </div>
	</div>
</div>
<?php

}


function need_css(){

?>

<style type="text/css">
	.btn_tab_under{
		background-color: var(--bg-color);
		color: var(--font-color);
		padding: 15px 5px 15px 5px;
		margin-top: 5px;
		width: 100%;
		border-width: 0px;
	}
	.input_style{
		padding: 10px 5px 10px  5px;
		width: 100%;
		font-weight: bold;
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