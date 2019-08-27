<link rel="stylesheet" type="text/css" href="page/index/style.css">

<?php
	$color=array();
	$color[0]="#2c3e50";
	$color[1]="#c0392b";
	$color[2]="#8e44ad";
	$color[3]="#27ae60";
	$color[4]="#16a085";

	$pending_sms_list=$sms->get_pending_sms_list();
	$total_package=count($pending_sms_list);
?>



<script type="text/javascript">
	var package_id=[];
	var package_serial=1;
	var ok=0;
	var total_package=<?php echo "$total_package"; ?>;
	var alert_msg=0
	function process_img(){
		return "<img src='https://www.wire2air.com/images/animated_horizontal_email2sms1.gif' class='img_processing'>";
	}

	function processing_bar(){
		percent=(package_serial*100)/total_package;
		percent=Math.ceil(percent);
		set_html("percent_msg",percent+"%");
		pro_bar=document.getElementById('sms_progress_bar');
		pro_bar.style="width:"+percent+"%;";
	}

	function success_sms(){
		return "<strong>Sucessfully Send Package "+package_serial+"<strong>";
	}

	function processing_sms(){
		div="pending_list_"+package_serial;
		value=document.getElementById(div).innerHTML;
		set_html("send_area",value);
		document.getElementById(div).style.display="none";
		status_div="status_"+package_serial;
		set_html(status_div,process_img());

		var package=package_id[package_serial];
		var data = {
        	"send_pending_sms": package
    	}
		$.ajax({
        type: 'POST',
        url: "sms_action.php",
        data:data,
        success: function(response) {
        	console.log(response);
           complate_div="complate_list_"+package_serial;
			set_html(complate_div,value);
			set_html("send_area",success_sms());
			set_html(status_div,"");
			processing_bar();
			if(package_serial>=total_package){
				ok=0;
		        package_serial++;
				return;
			}
			package_serial++;
			processing_sms();
        }
    	});  


	}

	function send_permission(){

		ok=1;
		if(total_package==0){
			alert("You Have No Pending Package");
			return;
		}
		document.getElementById("btn_area").innerHTML="";
		processing_sms();
	}
	setInterval(function(){ 
		if(ok==0 && total_package!=0 && alert_msg==0 && package_serial>total_package){
			alert("All SMS Sucessfully Send");
			alert_msg=1;
		}
	}, 1500);
</script>



<div class="row">
	<div class="col-md-5">
		<div id="btn_area">
			<center><button class="button" onclick="send_permission()">Start Sending SMS</button></center>
		</div>
		<div class="dashboard_box">
            <div class="box_header">Complete Percent</div>
            <div class="box_body" id="processing_area">
            	<center><h1 id="percent_msg">0%</h1></center>
            	<div class="progress">
  					<div id="sms_progress_bar" class="progress-bar progress-bar-success progress_color" role="progressbar" aria-valuenow="40"
  					aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
				</div>

            </div>
        </div>
		<div class="dashboard_box">
            <div class="box_header">Complete Mesasge</div>
            <div class="box_body" id="complete_area">
            	<?php for($i=$total_package; $i>=1; $i--){
            		echo "<div id='complate_list_$i'></div>";
            	}
            	?>
            </div>
        </div>
		
	</div>
	<div class="col-md-7">
		<div class="dashboard_box">
            <div class="box_header">Sending Mesasge</div>
            <div class="box_body" id="send_area">
            	
            </div>
        </div>
		<div class="dashboard_box">
                <div class="box_header">Pending SMS List</div>
                <div class="box_body">
                	 <div class="pull-rightt" style="margin-top: -10px;"></div>
                
                	<div class="pending_msg_list">
                	<?php 
                	$i=0;
                	foreach ($pending_sms_list as $key => $value) {
          				$i++;
          				$id=$value['id'];
          			?>
          			<script type="text/javascript">
          				package_id[<?php echo $i; ?>]=<?php echo "$id"; ?>
          			</script>
          			<?php	
          				$number_list=$value['number_list'];
          				$message=$value['message'];
                		
                		$div_color=$color[$i%5];
                		?>
                		<div  id="<?php echo "pending_list_$i" ?>">	
                		<div class="msg_body">
                			<span style="background-color: <?php echo $div_color; ?>" class="serial"><?php echo "$i"; ?></span>
                			<span class="number_list">
                				<textarea class="number_list_text"><?php echo "$number_list"; ?></textarea>
                				<textarea class="number_list_text"><?php echo "$message"; ?></textarea>
                			</span>
                			<span class="status" id="<?php echo "status_$i" ?>">
                				
                			</span>
                		</div>
                		</div>
                	<?php } ?>
                	</div>
                </div>
            </div>
	</div>
</div>

<style type="text/css">
	.msg_body{
		background-color: #ffffff;
		border: 1px solid #D1D5DA;
		border-radius: 10px;
		padding: 10px;
		margin-bottom: 4px;
		overflow: hidden;
	}
	.number_list_text{
		width: 180px;
		height: 40px;
	}
	.serial{
		padding: 10px;
		font-size: 20px;
		font-weight: bold;
		margin-left: -5px;
		border-radius: 10px 0px 10px 0px;
		color: #ffffff;
	}
	.processing{
		padding: 0px;
		margin-left: 40px;
	}
	.img_processing{
		height: 50px;
		width: 160px;
	}
	.progress_color{
		background-color: var(--bg-color);
	}
</style>
