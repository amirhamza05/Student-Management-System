<?php
include "layout/header_script.php";

if(isset($_POST['id'])){
	$id=$_POST['id'];
	$total=$_POST['total'];
	$paid=$_POST['paid'];
	$due=$_POST['due'];
	$date=$_POST['date'];
	$info['student_id']=$id;
	$info['paid']=$paid;
	if($date!="")$info['next_date']=$date;
	$info['date']=date("Y-m-d h:i:s");
	$info['add_by']=$site->get_user_id();
	$db->sql_action("payment","insert",$info);
 
foreach ($student as $key => $value) {
	$id1=$value["id"];
	$name=$value['nick'];
	$fee=$value['fee'];
	$mobile=$value['personal_mobile'];
	if($id==$id1)break;
}
$payment_id=$payment->get_last_id();
	

?>

<div class="sucess_payment">
  
    <center>
        <b>Dear <?php echo "$name"; ?> Your Payment Is Successfully Completed</b>
        <br/>
        <div style="margin-bottom: 10px;"></div>
        <input type="text" name="" id="payment_id" value="<?php echo "$payment_id"; ?>" hidden="">
        <button class="btn btn-success" id="Sending" onclick="send_sms(<?php echo "$id"; ?>)"><div id="res">Send SMS</div></button>
        <button class="btn btn-success">Money Recept</button>
    </center>
</div>

<?php	

}

else if(isset($_POST['send_sms'])){
	$payment_id=$_POST['send_sms'];
	$student_id=$_POST['send_id'];
	$msg=$payment->get_sms($student_id);
	$sms->send_sms_student($student_id,$msg,"a");
	
}
else if(isset($_POST['payable_id'])){
	$id=$_POST['payable_id'];
	$paid=$payment->paid_ammount($id);
	echo "$paid";
}
else if(isset($_POST['due_id'])){
	$id=$_POST['due_id'];
	$due=$payment->due_ammount($id);
	echo "$due";
}
else if(isset($_POST['table_info'])){
	$id=$_POST['table_info'];
	$payment->payment_table($id);
}
else if(isset($_POST['delete_table'])){
	$id=$_POST['delete_table'];
	$info['id']=$id;
    $db->sql_action("payment","delete",$info);
}


?>